<?php

use Twig\Test\NodeTestCase;

class_exists('Twig\Test\NodeTestCase');

@trigger_error(sprintf('Using the "Twig_Test_NodeTestCase" class is deprecated since Twig version 1.38, use "Twig\Test\NodeTestCase" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Test_NodeTestCase extends NodeTestCase
    {
    }
}
