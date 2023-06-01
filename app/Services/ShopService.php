<?php

namespace App\Services;

use DateTime;
use DateTimeZone;

class ShopService
{
  public function openOrCloseShop($addresses)
  {
    $arrayTimes = [];
    foreach ($addresses as $ad) {
      if (!$ad->non_working) {
        $working_mode = json_decode($ad->working_mode);
        $arrayTimes['firstTime'][] = $working_mode->timeFrom;
        $arrayTimes['lastTime'][] = $working_mode->timeBefore;
      } else {
        return true;
      }
    }

    $start_work = '23:59';
    foreach ($arrayTimes['firstTime'] as $firstTime) {
      if (strtotime($firstTime) < strtotime($start_work))
        $start_work = $firstTime;
    }

    $end_work = '00:00';
    foreach ($arrayTimes['lastTime'] as $lastTime) {
      if (strtotime($lastTime) > strtotime($end_work))
        $end_work = $lastTime;
    }

    if ($start_work != '23:59' && $end_work != '00:00') {
      $date = new DateTime(date('Y-m-d H:i:s'));
      $date->setTimezone(new DateTimeZone($addresses->first()->shop->timezone));

      $currentDateTime = strtotime($date->format('Y-m-d H:i'));
      $startDateTime = strtotime($date->format('Y-m-d')  . " " . $start_work);

      if (strtotime($start_work) <= strtotime($end_work)) {
        $endDateTime = strtotime($date->format('Y-m-d')  . " " . $end_work);
        $previousDayEnd = strtotime($date->format('Y-m-d')  . " " . $end_work . "-1 days");
      } else {
        $endDateTime = strtotime($date->format('Y-m-d')  . " " . $end_work . "+1 days");
        $previousDayEnd = strtotime($date->format('Y-m-d')  . " " . $end_work);
      }

      if ($currentDateTime >= $startDateTime && $currentDateTime <= $endDateTime) {
        return true;
      } else if ($currentDateTime < $startDateTime && $currentDateTime < $previousDayEnd) {
        return true;
      } else {
        return $start_work;
      }
    } else {
      return true;
    }
  }
}
