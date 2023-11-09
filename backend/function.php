<?php
function addStylesheet($fileName)
{
    global $extraCSS;
    $extraCSS .= '<link rel="stylesheet" href="/GAOKAO/frontend/css/' . $fileName . '">';
}

function addScript($fileName)
{
    global $extraJS;
    $extraJS = '<script src="/GAOKAO/frontend/js/' . $fileName . '"></script>';
}
