<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class McpTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('X-MCP-Token') ?? $request->query('token');
        $secret = config('app.mcp_secret');

        if (empty($secret) || $token !== $secret) {
            return response()->json([
                'jsonrpc' => '2.0',
                'error' => [
                    'code' => -32600,
                    'message' => 'Unauthorized',
                ],
            ], 401);
        }

        return $next($request);
    }
}
