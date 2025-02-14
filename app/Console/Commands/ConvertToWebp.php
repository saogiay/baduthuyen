<?php

namespace App\Console\Commands;

use Buglinjo\LaravelWebp\Facades\Webp;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class ConvertToWebp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert:webp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert all images to webp';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $images = Storage::disk('public')->allFiles();

        //only get images with extension jpg, jpeg, png, gif, svg
        $images = array_filter($images, function ($image) {
            return in_array(pathinfo($image, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'svg']);
        });

        foreach ($images as $image) {
            $imagePath = Storage::disk('public')->path($image);

            $image = File::get($imagePath);

            $newPath = str_replace('.jpg', '.webp', $imagePath);

            $webp = ImageManagerStatic::make($image)->encode('webp', 70);

            File::delete($imagePath);

            File::put($newPath, $webp);
        }


        return;
    }
}
