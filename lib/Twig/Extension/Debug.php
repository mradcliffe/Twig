<?php

use Twig\Extension\DebugExtension;

class_exists('Twig\Extension\DebugExtension');

@trigger_error(sprintf('Using the "Twig_Extension_Debug" class is deprecated since Twig version 1.38, use "Twig\Extension\DebugExtension" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Extension_Debug extends DebugExtension
    {
    }
}
