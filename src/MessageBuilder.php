<?php

namespace Edujugon\LaravelCachesCleaner;


class MessageBuilder
{

    /**
     * Compose a info message
     *
     * @param $message
     * @return string
     */
    public static function info($message)
    {
        return "<info>{$message}</info>";
    }
}