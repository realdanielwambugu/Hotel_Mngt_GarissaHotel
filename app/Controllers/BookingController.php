<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Booking;

use App\Models\Room;

class BookingController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'booking'))
        {
            return $error;
        }

        Booking::create($request->all());

        return $response->withSuccess('Room booked successfully');
    }

    public function invoice(Request $request, Response $response)
    {
        if (!Booking::dateIsValid($request->check_in, $request->check_out))
        {
            return $response->withError(
                'Invalid date: Check in date should be less than
                 check out date'
            );
        }

        if (Room::find($request->room_id)->isBooked($request->check_in, $request->check_out))
        {
            return $response->withView(
            'client/partials/isBooked',
            [
                'check_in'   => $request->check_in,
                'check_out'  => $request->check_out,
            ]);
        }

        $invoice = [
            'price_day'  => Room::find($request->room_id)->price,
            'days'       => Booking::getNumberOfDays(
                                    $request->check_in,
                                    $request->check_out,
                                ),
            'room_id'    => $request->room_id,
            'check_in'   => $request->check_in,
            'check_out'  => $request->check_out,
        ];

        return $response->withView(
            'client/partials/payment', ['invoice' => $invoice]
        );
    }

    public function show(Request $request, Response $response)
    {
        $bookings = Booking::all();

        if (auth()->user()->isAdmin())
        {
            return $response->withView('admin/bookings', ['bookings' => Booking::all()]);
        }

        return $response->withView();
    }



}
