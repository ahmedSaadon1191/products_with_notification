<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'csv_customers';
    protected $fillable = ['name', 'social_number', 'phone', 'job', 'notes', 'going_date', 'response', 'start_permit', 'end_permit'];
    public static function getEmployee()
    {

        $records = DB::table('csv_customers')->select()->get('name', 'social_number', 'phone', 'job', 'going_date', 'response', 'start_permit', 'end_permit')->toArray();
        return $records;
    }
}
