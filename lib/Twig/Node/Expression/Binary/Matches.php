<?php

use Twig\Node\Expression\Binary\MatchesBinary;

class_exists('Twig\Node\Expression\Binary\MatchesBinary');

@trigger_error(sprintf('Using the "Twig_Node_Expression_Binary_Matches" class is deprecated since Twig version 1.38, use "Twig\Node\Expression\Binary\MatchesBinary" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Node_Expression_Binary_Matches extends MatchesBinary
    {
    }
}
