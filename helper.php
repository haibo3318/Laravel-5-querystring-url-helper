<?php

namespace App\Helpers;

class Helper
{
    /**
     * for those who want a querystring url instead of Laravel's default url()
     *
     * @param null $path
     * @param array $qs
     * @param null $secure
     * @return string
     */
    public static function url_querystring($path = null, $qs = array(), $secure = null)
    {
        $url = app('url')->to($path, $secure);
        if (sizeof($qs)){
            foreach($qs as $key => $value){
                $qs[$key] = $key.'='.urlencode($value);
            }
            $url = $url.'?'.implode('&', $qs);
        }
        return $url;
    }
}
