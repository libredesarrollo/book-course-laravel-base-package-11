<?php

use Detection\MobileDetect;

function isMobile()
{
    $detect = new MobileDetect();
    // var_dump($detect->getUserAgent());
    try {
        return $detect->isMobile();
    } catch (\Detection\Exception\MobileDetectException $th) {
    }
    return false;
}
