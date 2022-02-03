<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Facility;

class FacilityController extends Controller
{
   use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        $facilities = Facility::all();

        $view = 'admin/facilities';

        if (auth()->user()->isClient())
        {
            $view = 'client/facilities';
        }

        return $response->withView(
            $view, ['facilities' => $facilities]
        );
    }

   public function create(Request $request, Response $response)
   {
        if ($error = $this->isInvalid($request, 'facility'))
        {
            return $error;
        }

        Facility::create(
            array_merge(
                $request->all(),
                ['image' => Facility::upload_photo()]
            )
        );

        return $response->withSuccess('Facility added succesfully');
   }

    public function edit(Request $request, Response $response)
    {
        return $response->withView(
            'admin/edit_facility',
            ['facility' => Facility::find($request->id)]
        );
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'facility'))
        {
            return $error;
        }

        Facility::find($request->id)->update($request->except('id'));

        return $response->withSuccess('Facility upadted succesfully');
    }

    public function delete(Request $request, Response $response)
    {
        $facility = Facility::find($request->id);

        unlink(upload_path('facility\\'.$facility->image));

        $facility->delete();

        return $response->withRedirect('/admin/facilities');
    }


}
