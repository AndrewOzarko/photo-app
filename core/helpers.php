<?php


/**
 * @param string $url
 */
function redirect(string $url)
{
    header("Location: {$url}");
    exit();
}
