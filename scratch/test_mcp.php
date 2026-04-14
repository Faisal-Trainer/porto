<?php

use Illuminate\Http\Request;
use App\Http\Controllers\McpController;

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$request = Request::create('/api/mcp', 'POST', [], [], [], ['CONTENT_TYPE' => 'application/json'], json_encode([
    'jsonrpc' => '2.0',
    'id' => 1,
    'method' => 'tools/call',
    'params' => [
        'name' => 'get_portfolio_info',
        'arguments' => (object)[]
    ]
]));

$controller = new McpController();
$response = $controller->handle($request);

echo $response->getContent();
