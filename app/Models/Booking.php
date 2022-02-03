<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'room_id',
        'check_in',
        'check_out',
        'days',
        'price_day',
        'total_price',
        'payment_code',
    ];

    public function dateIsValid($check_in, $check_out)
    {
        return strtotime($check_in) < strtotime($check_out);
    }

    public function getNumberOfDays($check_in, $check_out)
    {
        $diff = strtotime($check_out) - strtotime($check_in);

        return abs(round($diff / 86400));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function monthly_sales()
    {
        $sales = 0;

        foreach ($this->where('created_at', 'like', '%' . date("Y-m") . '%')->get() as $booking)
        {
            $sales = $sales + $booking->total_price;
        }

        return $sales;
    }


    public function total_sales()
    {
        $sales = 0;

        foreach ($this->all() as $booking)
        {
            $sales = $sales + $booking->total_price;
        }

        return $sales;
    }

}
