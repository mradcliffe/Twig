<?php

use Twig\Node\Expression\Filter\DefaultFilter;

class_exists('Twig\Node\Expression\Filter\DefaultFilter');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Filter_Default" class is deprecated since Twig version 1.38, use "Twig\Node\Expression\Filter\DefaultFilter" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Node_Expression_Filter_Default extends DefaultFilter
    {
    }
}
