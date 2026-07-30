<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ImageService
{
    public function upload(UploadedFile $file, string $directory): string
    {
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

        $file->move(
            public_path("uploads/{$directory}"),
            $filename,
        );

        return $filename;
    }

    public function delete(?string $filename, string $directory): void
    {
        if (!$filename) {
            return;
        }

        $path = public_path("uploads/{$directory}/{$filename}");

        if (is_file($path)) {
            unlink($path);
        }
    }

    public function replace(
        UploadedFile $file,
        ?string $oldFilename,
        string $directory,
    ): string {
        $this->delete($oldFilename, $directory);

        return $this->upload($file, $directory);
    }
}