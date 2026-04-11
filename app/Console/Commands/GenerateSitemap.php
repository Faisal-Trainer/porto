<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for the website';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Generating SEO Optimized Sitemap...');

        $sitemap = Sitemap::create();

        // 1. Homepage: Crawl harian, prioritas tertinggi
        $sitemap->add(
            Url::create(route('home'))
                ->setPriority(1.0)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );

        // 2. Services: Update mingguan
        $sitemap->add(
            Url::create(route('service'))
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
        );

        // 3. Portfolio & Projects: Prioritas 0.8
        $sitemap->add(
            Url::create(route('portfolio'))
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
        );

        Project::all()->each(function (Project $project) use ($sitemap) {
            $sitemap->add(
                Url::create(route('portfolio.show', $project))
                    ->setLastModificationDate($project->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        });

        // 4. Blog Index & Posts: Crawl harian karena SEO Blog adalah fokus utama
        $sitemap->add(
            Url::create(route('blog.index'))
                ->setPriority(0.7)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );

        Post::where('is_published', true)->get()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(
                Url::create(route('blog.show', $post->slug))
                    ->setLastModificationDate($post->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.7)
            );
        });

        // 5. Static Pages: Update bulanan
        $sitemap->add(Url::create(route('about'))->setPriority(0.6)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create(route('contact.create'))->setPriority(0.6)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create(route('talent.create'))->setPriority(0.6)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));

        // 6. SEO Local Aliases
        $sitemap->add(Url::create('/jasa-pembuatan-website-bukittinggi')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        $sitemap->add(Url::create('/web-developer-bukittinggi')->setPriority(0.6)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create('/portofolio-website-umkm')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        $sitemap->add(Url::create('/konsultan-digital-bukittinggi')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));

        // Path Detection for Shared Hosting (public_html)
        $publicPath = public_path();

        // Cek jika sedang di PROD dengan struktur public_html
        if (app()->environment('production') && ! file_exists($publicPath)) {
            // Coba deteksi ../public_html relatif dari base_path
            $sharedPath = base_path('../public_html');
            if (file_exists($sharedPath)) {
                $publicPath = $sharedPath;
            }
        }

        $sitemap->writeToFile($publicPath.'/sitemap.xml');

        $this->info("Success! Sitemap has been updated in {$publicPath}/sitemap.xml");

        return self::SUCCESS;
    }
}
