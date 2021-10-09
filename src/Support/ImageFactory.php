<?php

namespace Spatie\MediaLibrary\Support;

use Spatie\Image\Image;

class ImageFactory
{
    public static function load(string $path): Image
    {
        return Image::load($path)
            ->setTemporaryDirectory(config('laravel-medialibrary.temporary_image_directory_path', null))
            ->useImageDriver(config('media-library.image_driver'));
    }
}
