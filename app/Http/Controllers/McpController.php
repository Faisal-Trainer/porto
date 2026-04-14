<?php

// app/Http/Controllers/McpController.php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
                        'name' => 'get_portfolio_info',
                        'description' => 'Get information about Faisal portfolio, skills, and projects',
                        'inputSchema' => [
                            'type' => 'object',
                            'properties' => new \stdClass,
                            'required' => [],
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
            'get_portfolio_info' => $this->getPortfolioInfo($args),
            default => ['error' => "Tool '$toolName' not found"],
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

private function getPortfolioInfo(array $args): array
{
    try {
        $projects = Project::with('technologies')
            ->latest('tanggal_rilis')
            ->get(['judul', 'slug', 'category', 'deskripsi', 'tanggal_rilis'])
            ->map(fn ($project) => [
                'title'        => $project->judul,
                'category'     => $project->category,
                'description'  => $project->deskripsi,
                'release_date' => $project->tanggal_rilis?->toDateString(),
                'technologies' => $project->technologies->pluck('name')->toArray(),
            ]); 

        return [
            'name'     => 'Faisal Yusra',
            'role'     => 'Web Developer',
            'skills'   => ['Laravel', 'PHP', 'Tailwind CSS', 'Alpine.js', 'Livewire', 'MySQL'],
            'projects' => $projects->toArray(),
        ];
    } catch (\Exception $e) {
        return [
            'error'   => $e->getMessage(),
            'name'    => 'Faisal Yusra',
            'role'    => 'Web Developer',
            'skills'  => ['Laravel', 'PHP', 'Tailwind CSS', 'Alpine.js', 'Livewire', 'MySQL'],
            'projects' => [],
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
