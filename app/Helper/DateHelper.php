<?php
/**
 * Created by PhpStorm.
 * User: Arman
 * Date: 11/17/2018
 * Time: 7:52 PM
 */

namespace App\Helper;


use Carbon\Carbon;

class DateHelper
{
    protected static $format = 'd/m/Y';
    protected static $dbFormat = 'Y-m-d H:i:s';

    public static function changeDateFormat($date)
    {
        return Carbon::createFromFormat(self::$dbFormat, $date)->format(self::$format);
    }

    public static function getThisStartEndDateMonth()
    {
        return $data = [
            'monthStart' => Carbon::now()->startOfMonth(),
            'monthEnd' => Carbon::now()->endOfMonth()];
    }
}
