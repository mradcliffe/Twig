<?php

use Twig\Profiler\Dumper\BlackfireDumper;

class_exists('Twig\Profiler\Dumper\BlackfireDumper');

@trigger_error(sprintf('Using the "Twig_Profiler_Dumper_Blackfire" class is deprecated since Twig version 1.38, use "Twig\Profiler\Dumper\BlackfireDumper" instead.'), E_USER_DEPRECATED);

if (\false) {
    class Twig_Profiler_Dumper_Blackfire extends BlackfireDumper
    {
    }
}
