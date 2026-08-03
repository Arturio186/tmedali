<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileService
{
    public function upload(
        UploadedFile $file,
        string $directory,
    ): string {
        return Storage::disk('local')->putFileAs(
            $directory,
            $file,
            Str::uuid().'.'.$file->getClientOriginalExtension(),
        );
    }

    public function delete(?string $path): void
    {
        if (!$path) {
            return;
        }

        Storage::disk('local')->delete($path);
    }
}