<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

trait SaveFileTrait
{
    protected function ensureDirectoryExists(string $path): void
    {
        if (!File::isDirectory(public_path("storage/$path"))) {
            File::makeDirectory(public_path("storage/$path"), 0777, true, true);
        }
    }

    public function getFile(string $path, string $fileName)
    {
        return Storage::disk('public')->url($path . '/' . $fileName);
    }

    public function saveFile(UploadedFile $file, string $path)
    {
        $this->ensureDirectoryExists($path);

        $fileName = Str::random(4) . '_' . preg_replace('/\s+/', '', $file->getClientOriginalName());

        $fileName = Str::slug($fileName) . '.webp';

        $webp = Image::read($file)->toWebp(70);

        Storage::disk('public')->put($path . '/' . $fileName, $webp);

        return $fileName;
    }

    public function deleteFile(string $path, string $fileName)
    {
        Storage::disk('public')->delete($path . '/' . $fileName);
    }
}
