<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class OrderedUserInfo extends Model
{
    protected $guarded = [];

    public function setStartDateFromCalenderAttribute($value)
    {
        $this->attributes['start_date_from_calender'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function setEndDateFromCalenderAttribute($value)
    {
        $this->attributes['end_date_from_calender'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function setMeetingTimeStampAttribute($value)
    {
        $this->attributes['meeting_time_stamp'] = Carbon::parse($value)->format('Y-m-d H:s:i');
    }

    public function setEndTimeStampAttribute($value)
    {
        $this->attributes['end_time_stamp'] = Carbon::parse($value)->format('Y-m-d H:s:i');
    }

    public function getStartDateFromCalenderAttribute($value)
    {
       return Carbon::parse($value)->format('d-m-Y');
    }

    public function getEndDateFromCalenderAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getMeetingTimeStampAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y H:s:i');
    }

    public function getEndTimeStampAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y H:s:i');
    }

}
