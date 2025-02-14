<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class UploadController extends Controller
{
    use SaveFileTrait;

    public function upload(Request $request)
    {
        $path = $request->path ?? 'uploads';

        $file = $request->file('file');

        $fileName = $this->saveFile($file, $path);

        return response()->json([
            'url' => Storage::disk('public')->url($path . '/' . $fileName),
        ], 200);
    }
}
