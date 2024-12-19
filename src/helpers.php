<?php 

use Carbon\Carbon;

if (!function_exists('diffForHumans')) {
	/**
	 * Carbon::diffForHumans
	 * 
	 * Get the difference in a human readable format in the
	 * current locale from current instance to an other instance 
	 * given (or now if null given).
	 * 
	 * @param  string|DateTime  $date
	 * @returns string
	 */
	function diffForHumans($date)
	{
		return Carbon::parse($date)->diffForHumans();
	}
}
