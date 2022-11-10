<?php

use Realodix\Relax\Config;
use Realodix\Relax\Finder;

$localRules = [
    // Base
    'binary_operator_spaces' => false,

    // Realodix
    'no_empty_comment'  => false,
    // 'no_unused_imports' => false,
    'PhpCsFixerCustomFixers/phpdoc_param_order' => false,
    'PhpCsFixerCustomFixers/comment_surrounded_by_spaces' => false,
    'no_superfluous_phpdoc_tags' => false,
];

return Config::create('@Realodix', $localRules)
    ->setFinder(Finder::laravel());
