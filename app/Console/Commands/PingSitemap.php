<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class PingSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seo:ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ping search engines (Google, Bing) to notify about sitemap updates';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $sitemapUrl = config('app.url') . '/sitemap.xml';
        
        $this->info("Pinging search engines with sitemap: {$sitemapUrl}");

        // Google Ping (Traditional)
        $googleResponse = Http::get("https://www.google.com/ping", [
            'sitemap' => $sitemapUrl
        ]);

        if ($googleResponse->successful()) {
            $this->info('✅ Google successfully notified.');
        } else {
            $this->error('❌ Google ping failed.');
        }

        // Bing Ping
        $bingResponse = Http::get("https://www.bing.com/ping", [
            'sitemap' => $sitemapUrl
        ]);

        if ($bingResponse->successful()) {
            $this->info('✅ Bing successfully notified.');
        } else {
            $this->error('❌ Bing ping failed.');
        }

        return Command::SUCCESS;
    }
}
