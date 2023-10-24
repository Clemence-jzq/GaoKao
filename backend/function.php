<?php
function addStylesheet($fileName)
{
    global $extraCSS;
    $extraCSS .= '<link rel="stylesheet" href="frontend/css/' . $fileName . '">';
}

function addScript($fileName)
{
    global $extraJS;
    $extraJS = '<script src="frontend/js/' . $fileName . '"></script>';
}
