<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\User;

use App\Models\Booking;

    class ProfileController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        if (!$request->id)
        {
            return $response->withView(
                'admin/client',
                ['clients' => User::all()]
            );
        }

        return $response->withView(
            'client/profile',
            ['user' => User::find($request->id)]
        );
    }

    public function account(Request $request, Response $response)
    {
        return $response->withView(
            'client/partials/account',
            ['user' => User::find(auth()->id())]
        );
    }

    public function bookings(Request $request, Response $response)
    {
        return $response->withView(
            'client/partials/bookings',
            ['user' => User::find(auth()->id())]
        );
    }

    public function delete(Request $request, Response $response)
    {
        $user = User::find($request->id);

        foreach ($user->booking as $booking)
        {
            $booking->delete();
        }

        $user->delete();

        return $response->withRedirect('admin/clients');
    }


}
