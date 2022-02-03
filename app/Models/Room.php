<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Room extends Model
{
    protected $fillable = [
        'image',
        'name',
        'beds',
        'baths',
        'price',
    ];

    public function upload_photo()
    {
        $storage = new FileSystem(upload_path('hotels_pic'));

        $file = new \Upload\File('image', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }

    public function isBooked($check_in, $check_out)
    {
        $res = [];

        foreach (Booking::all() as $booking)
        {
            $res[] = $this->betweenDates($check_in, $booking->check_in, $booking->check_out);

            $res[] = $this->betweenDates($check_out, $booking->check_in, $booking->check_out);

            $res[] = $this->betweenDates($booking->check_in, $check_in ,$check_out);

            $res[] = $this->betweenDates($booking->check_out, $check_in ,$check_out);
        }

        return in_array(true, $res);
    }

    public function betweenDates($cmpDate,$startDate,$endDate)
    {
        return (strtotime($cmpDate) >= strtotime($startDate))
                                   &&
              (strtotime($cmpDate) <= strtotime($endDate));
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
