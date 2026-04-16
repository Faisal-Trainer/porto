<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerateMcpSecret extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-mcp-secret';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $secret = Str::random(64);
        $this->info("MCP_SECRET={$secret}");
        $this->comment('Tambahkan baris di atas ke file .env kamu');
    }
}
