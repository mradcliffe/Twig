<?php

use Twig\Node\NodeOutputInterface;

class_exists('Twig\Node\NodeOutputInterface');

@trigger_error(sprintf('Using the "Twig_NodeOutputInterface" class is deprecated since Twig version 1.38, use "Twig\Node\NodeOutputInterface" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_NodeOutputInterface extends NodeOutputInterface
    {
    }
}
