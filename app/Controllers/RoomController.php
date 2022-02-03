<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Room;

class RoomController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        if ($request->id)
        {
            return $response->withView(
                'client/room', ['room' => Room::find($request->id)]
            );
        }

        $rooms = ['rooms' => Room::all()];

        $view = 'admin/room';

        if (auth()->user()->isClient())
        {
            $view = 'client/rooms';
        }

        return $response->withView($view, $rooms);
    }

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'room'))
        {
            return $error;
        }

        Room::create(
            array_merge(
                $request->all(),
                ['image' => Room::upload_photo()]
            )
        );

        return $response->withSuccess('Room added succesfully');
    }

    public function edit(Request $request, Response $response)
    {
        return $response->withView(
          'admin/edit_room', ['room' => Room::find($request->id)]
        );
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'room'))
        {
            return $error;
        }

        Room::find($request->id)->update($request->except('id'));

        return $response->withSuccess('Room updated succesfully');
    }

    public function delete(Request $request, Response $response)
    {
        $room = Room::find($request->id);

        foreach ($room->booking as $booking)
        {
           $booking->delete();
        }

        unlink(upload_path('hotels_pic\\'.$room->image));

        $room->delete();

        return $response->withRedirect('/admin/room');
    }

}
