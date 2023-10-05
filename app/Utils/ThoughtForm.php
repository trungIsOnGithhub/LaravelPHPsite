<?php

namespace App\Utils;

class ThoughtForm
{
    // form can only be display 30 second from the last time submited
    private static $delayIntervalMilisecond = 30000;
    private static $lastThoughtTimestamp = null;

    public static function isEnabledNow()
    {
        if(is_null(self::$lastThoughtTimestamp)) {
            error_log(self::$lastThoughtTimestamp);
            self::$lastThoughtTimestamp = time();
            return false;
        }

        $timeGoneBySinceLastThought = time() - self::$lastThoughtTimestamp;
        self::$lastThoughtTimestamp = time();

        error_log(self::$lastThoughtTimestamp);

        return $timeGoneBySinceLastThought > $delayIntervalMilisecond;
    }
}