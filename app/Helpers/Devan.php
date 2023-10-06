<?php

if (!function_exists('region_cd')) {
    function region_cd()
    {
        return \App\Models\ComRegion::where('region_level', 4)->pluck('region_nm', 'region_cd');
    }
}

if (!function_exists('is_mobile')) {
    function is_mobile()
    {
        $detect = new \Detection\MobileDetect;
        return $detect->isMobile();
    }
}