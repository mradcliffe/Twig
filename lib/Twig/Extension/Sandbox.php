<?php

use Twig\Extension\SandboxExtension;

class_exists('Twig\Extension\SandboxExtension');

@trigger_error(sprintf('Using the "Twig_Extension_Sandbox" class is deprecated since Twig version 1.38, use "Twig\Extension\SandboxExtension" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Extension_Sandbox extends SandboxExtension
    {
    }
}
