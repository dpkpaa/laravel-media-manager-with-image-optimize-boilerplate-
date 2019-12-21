<?php

namespace App\Http\Controllers;

use ctf0\MediaManager\App\Controllers\MediaController;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class MyMediaController extends MediaController
{
    protected function allowUpload($file = null)
    {
        return true;
    }

    protected function optimizeUpload(UploadedFile $file)
    {
        app(\Spatie\ImageOptimizer\OptimizerChain::class)->optimize($file->getPathname());

        return $file;
    }
}
