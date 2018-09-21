<?php
/**
 * Created by PhpStorm.
 * User: bglacial
 * Date: 19/09/18
 * Time: 22:52
 */
if (!function_exists('currentRoute')) {
    function currentRoute(...$routes)
    {
        foreach($routes as $route) {
            if(request()->url() == $route) {
                return ' active';
            }
        }
    }
}