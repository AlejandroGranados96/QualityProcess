<?php
function Conectarse()
{
    $link=mysqli_connect("localhost", "root","","qualityprocess");
    if(!$link)
    exit();
    return $link;
}

