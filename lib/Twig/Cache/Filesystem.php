<?php

use Twig\Cache\FilesystemCache;

class_exists('Twig\Cache\FilesystemCache');

@trigger_error(sprintf('Using the "Twig_Cache_Filesystem" class is deprecated since Twig version 1.38, use "Twig\Cache\FilesystemCache" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Cache_Filesystem extends FilesystemCache
    {
    }
}
