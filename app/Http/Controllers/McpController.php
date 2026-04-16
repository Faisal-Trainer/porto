<?php

// app/Http/Controllers/McpController.php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class McpController
{
    public function handle(Request $request): JsonResponse
    {
        if ($request->isMethod('GET')) {
            return response()->json([
                'message' => 'MCP (Model Context Protocol) Server is running.',
                'instructions' => 'Use POST with JSON body to interact with this endpoint.',
            ]);
        }

        $body = $request->json()->all();
        $method = $body['method'] ?? '';
        $id = $body['id'] ?? null;

        return match ($method) {
            'initialize' => $this->initialize($id),
            'tools/list' => $this->toolsList($id),
            'tools/call' => $this->toolsCall($id, $body['params'] ?? []),
            default => $this->methodNotFound($id, $method),
        };
    }

    private function initialize(mixed $id): JsonResponse
    {
        return response()->json([
            'jsonrpc' => '2.0',
            'id' => $id,
            'result' => [
                'protocolVersion' => '2024-11-05',
                'serverInfo' => [
                    'name' => 'my-porto-mcp',
                    'version' => '1.0.0',
                ],
                'capabilities' => [
                    'tools' => new \stdClass,
                ],
            ],
        ]);
    }

    private function toolsList(mixed $id): JsonResponse
    {
        return response()->json([
            'jsonrpc' => '2.0',
            'id' => $id,
            'result' => [
                'tools' => [
                    [
                        'name' => 'create_blog_post',
                        'description' => 'Create a new blog post. Restricted to "CREATE" only.',
                        'inputSchema' => [
                            'type' => 'object',
                            'properties' => [
                                'title' => [
                                    'type' => 'string',
                                    'description' => 'The title of the blog post',
                                ],
                                'content' => [
                                    'type' => 'string',
                                    'description' => 'The main content of the blog post',
                                ],
                                'excerpt' => [
                                    'type' => 'string',
                                    'description' => 'A short summary of the blog post',
                                ],
                                'category_id' => [
                                    'type' => 'integer',
                                    'description' => 'The ID of the category',
                                ],
                                'user_id' => [
                                    'type' => 'integer',
                                    'description' => 'The ID of the author/user',
                                ],
                                'published_at' => [
                                    'type' => 'string',
                                    'description' => 'The scheduled publication date (YYYY-MM-DD HH:MM:SS)',
                                ],
                            ],
                            'required' => ['title', 'content'],
                        ],
                    ],
                ],
            ],
        ]);
    }

    private function toolsCall(mixed $id, array $params): JsonResponse
    {
        $toolName = $params['name'] ?? '';
        $args = $params['arguments'] ?? [];

        $result = match ($toolName) {
            'create_blog_post' => $this->createBlogPost($args),
            default => ['error' => "Tool '$toolName' not found or restricted"],
        };

        return response()->json([
            'jsonrpc' => '2.0',
            'id' => $id,
            'result' => [
                'content' => [
                    [
                        'type' => 'text',
                        'text' => json_encode($result),
                    ],
                ],
            ],
        ]);
    }

    private function createBlogPost(array $args): array
    {
        try {
            $title = $args['title'] ?? null;
            $content = $args['content'] ?? null;
            $userId = $args['user_id'] ?? User::first()?->id;
            $categoryId = $args['category_id'] ?? Category::first()?->id;

            if (! $userId) {
                return ['error' => 'No author (user) found in database. Please create a user first.'];
            }

            $post = Post::create([
                'user_id' => $userId,
                'category_id' => $categoryId,
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => $content,
                'excerpt' => $args['excerpt'] ?? Str::limit(strip_tags($content), 160),
                'is_published' => false,
                'published_at' => $args['published_at'] ?? null,
            ]);

            return [
                'status' => 'success',
                'message' => 'Blog post created successfully as draft.',
                'post_id' => $post->id,
                'slug' => $post->slug,
                'url' => url("/blog/{$post->slug}"),
            ];
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'Failed to create blog post: '.$e->getMessage(),
            ];
        }
    }

    private function methodNotFound(mixed $id, string $method): JsonResponse
    {
        return response()->json([
            'jsonrpc' => '2.0',
            'id' => $id,
            'error' => [
                'code' => -32601,
                'message' => "Method '$method' not found",
            ],
        ]);
    }
}
