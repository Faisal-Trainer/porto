<?php

namespace App\Services;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageService
{
    protected ImageManager $manager;

    public function __construct()
    {
        $this->manager = new ImageManager(new Driver());
    }

    /**
     * Process and upload image as WebP
     */
    public function uploadToWebp(UploadedFile $file, string $directory, int $quality = 80): string
    {
        $filename = Str::random(40) . '.webp';
        $path = $directory . '/' . $filename;

        // Process image
        $image = $this->manager->read($file);
        
        // Convert to WebP and get content
        $encoded = $image->toWebp($quality);

        // Store to disk
        Storage::disk('public')->put($path, $encoded);

        return $path;
    }
}
