<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class UploadController extends Controller
{
    protected function ensureDirectoryExists(string $path): void
    {
        if (!File::isDirectory(public_path("storage/$path"))) {
            File::makeDirectory(public_path("storage/$path"), 0777, true, true);
        }
    }
    public function upload(Request $request)
    {
        $path = $request->path ?? 'uploads';

        $file = $request->file('file');

        $this->ensureDirectoryExists($path);

        $fileName = Str::random(4) . '_' . preg_replace('/\s+/', '', $file->getClientOriginalName());

        $fileName = Str::slug($fileName);

        Storage::putFileAs("public/$path", $file, $fileName);

        return $fileName;
    }
}
