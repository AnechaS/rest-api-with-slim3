<?php

namespace App\Helpers\Illuminate;

use Illuminate\Translation;
use Illuminate\Filesystem\Filesystem;

class Translator extends Translation\Translator {

    protected $locale = 'en';

    public function __construct() {
        $path = __DIR__ . '/lang';
        $filesystem = new Filesystem();
        $loader = new Translation\FileLoader(new Filesystem(),  $path);
        $loader->addNamespace('lang', $path);
        $loader->load('en', 'validation', 'lang');

        $this->loader = $loader;
    }
}