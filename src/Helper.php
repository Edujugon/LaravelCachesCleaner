<?php

namespace Edujugon\LaravelCachesCleaner;


class Helper
{

    /**
     * Set the full php artisan command with proper path.
     *
     * @param $string
     * @return string
     */
    public static function phpArtisanCommand($string)
    {
        return 'php '. getcwd() . '/artisan ' . $string;
    }

    /**
     * Compose a single string from array items.
     *
     * @param $array
     * @return string
     */
    public static function stringfyArray($array)
    {
        $string = '';

        foreach ($array as $item)
        {
            $string = $string . ' ' . (string)$item;
        }

        return $string;
    }
}