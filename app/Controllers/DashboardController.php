<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Booking;

use App\Models\User;

use App\Models\Room;

use App\Models\Facility;


class DashboardController
{
   public function show(Request $request, Response $response)
   {
        $booking = new Booking;

        return $response->withView(
          'admin/dashboard',
           [
              'total_sales' => $booking->total_sales(),
              'monthly_sales' => $booking->monthly_sales(),
              'bookings' => $booking->count(),
              'users' => User::count(),
              'facilities' => Facility::count(),
              'rooms' => Room::count(),
           ]
        );
   }

}
