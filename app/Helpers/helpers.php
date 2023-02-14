<?php

use App\Models\HomeSetting;
use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('homeseeting')) {
    function homeseeting()
    {
        $data = HomeSetting::all()->first();
        return $data;
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */

