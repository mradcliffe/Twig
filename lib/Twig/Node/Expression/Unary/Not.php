<?php

use Twig\Node\Expression\Unary\NotUnary;

class_exists('Twig\Node\Expression\Unary\NotUnary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Unary_Not" class is deprecated since Twig version 1.38, use "Twig\Node\Expression\Unary\NotUnary" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Node_Expression_Unary_Not extends NotUnary
    {
    }
}
