<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateTime;
use DatePeriod;
use DateInterval;

use App\Models\CompanyInformation;
use App\Models\Department;
use App\Models\ExtensionService;
use App\Models\User;


class Helper
{
    // ///////////////////// DATE HELPER

    public static function getRangeBetweenDates($period_start, $period_end)
    {
        $start_date = Carbon::createFromFormat('Y-m-d', $period_start);
        $end_date = Carbon::createFromFormat('Y-m-d', $period_end);
  
        $dateRange = CarbonPeriod::create($start_date, $end_date);
   
        return $dateRange->toArray();
    }

    public static function getRangeBetweenDatesStr($period_start, $period_end)
    {
        $start_date = Carbon::createFromFormat('Y-m-d', $period_start);
        $end_date = Carbon::createFromFormat('Y-m-d', $period_end);
  
        $dateRange = CarbonPeriod::create($start_date, $end_date);;

        $dates = [];
        // Iterate over the period
        foreach ($dateRange as $date) {
            $dates[] = $date->format('Y-m-d');
        }

        // Convert the period to an array of dates
        return $dates;
    }


    // COMPANY INFORMATION
    
    public function getCompanyInformation()
    {
        return CompanyInformation::find(1);
    }
    

    public function getExtensionServices()
    {
        return ExtensionService::all();
    }

}