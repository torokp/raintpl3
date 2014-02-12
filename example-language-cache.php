<?php

// include
require "library/Rain/autoload.php";

// namespace
use Rain\Tpl;

$lang = "EN";

function dictionary($matches, $lang) {
    return "Translate: <b>{$lang}/{$matches[1][0]}</b>";
}

Tpl::registerTag(
    "({@.*?@})", // preg split
    "{@(.*?)@}", // preg match
    "dictionary",
    true,
    $lang
);

Tpl::configure("cache_dir", "cache/".$lang."/");
// draw
$tpl = new Tpl;
echo $tpl->draw( "language-example" );



?>
