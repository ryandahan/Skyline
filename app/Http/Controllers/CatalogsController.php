<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Exception;

class CatalogsController extends Controller
{


    public function index()
    {
        $catalogs = Catalog::all();

        return view('catalogs.index', compact('catalogs'));
    }


    public function create()
    {


        return view('catalogs.create');
    }


    public function store(Request $request)
    {


            $data = $this->getData($request);

            Catalog::create($data);

            return redirect()->route('catalogs.catalog.index')
                ->with('success_message', 'Catalog was successfully added.');

    }


    public function show($id)
    {
        $catalog = Catalog::findOrFail($id);

        return view('catalogs.show', compact('catalog'));
    }


    public function edit($id)
    {
        $catalog = Catalog::findOrFail($id);


        return view('catalogs.edit', compact('catalog'));
    }


    public function update($id, Request $request)
    {


            $data = $this->getData($request);

            $catalog = Catalog::findOrFail($id);
            $catalog->update($data);

            return redirect()->route('catalogs.catalog.index')
                ->with('success_message', 'Catalog was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $catalog = Catalog::findOrFail($id);
            $catalog->delete();

            return redirect()->route('catalogs.catalog.index')
                ->with('success_message', 'Catalog was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'name' => 'required|nullable|string|min:1|max:255',
            'details' => 'string|min:1|max:1000|nullable',
        ];


        $data = $request->validate($rules);




        return $data;
    }

}
