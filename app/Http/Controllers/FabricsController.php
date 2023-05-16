<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Models\Fabric;
use Illuminate\Http\Request;
use Exception;

class FabricsController extends Controller
{


    public function index(Request $request)
    {
        $fabrics = Fabric::all();
        $catalogs = Catalog::all();

        if ($request->catalog){
            $fabrics = Fabric::where('catalog_id',$request->catalog)->get();
        }


        if ($request->type){
            $fabrics = Fabric::where('type',$request->type)->get();
        }

        if ($request->catalog && $request->type ){
            $fabrics = Fabric::where('catalog_id',$request->catalog)->where('type',$request->type)->get();
        }

        return view('fabrics.index', compact('fabrics','catalogs','request'));
    }


    public function create()
    {


        return view('fabrics.create');
    }


    public function store(Request $request)
    {


            $data = $this->getData($request);

            Fabric::create($data);

            return redirect()->route('fabrics.fabric.index')
                ->with('success_message', 'Fabric was successfully added.');

    }


    public function show($id)
    {
        $fabric = Fabric::findOrFail($id);

        return view('fabrics.show', compact('fabric'));
    }


    public function edit($id)
    {
        $fabric = Fabric::findOrFail($id);


        return view('fabrics.edit', compact('fabric'));
    }


    public function update($id, Request $request)
    {


            $data = $this->getData($request);

            $fabric = Fabric::findOrFail($id);
            $fabric->update($data);

            return redirect()->route('fabrics.fabric.index')
                ->with('success_message', 'Fabric was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $fabric = Fabric::findOrFail($id);
            $fabric->delete();

            return redirect()->route('fabrics.fabric.index')
                ->with('success_message', 'Fabric was successfully deleted.');
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
            'name' => 'nullable|string|min:0|max:255',
            'type' => 'required|nullable',
            'category' => '',
            'SerialNumber' => 'required|nullable|numeric',
            'Amount' => 'required|nullable|numeric',
            'details' => 'nullable|string|min:0|max:1000',
            'image' => ['nullable','file'],
            'catalog_id' => 'required|nullable|numeric',
        ];

                if ($request->route()->getAction()['as'] == 'fabrics.fabric.store' || $request->has('custom_delete_image')) {
            array_push($rules['image'], 'required');
        }
        $data = $request->validate($rules);

        if ($request->has('custom_delete_image')) {
            $data['image'] = null;
        }
        if ($request->hasFile('image')) {
            $data['image'] = $this->moveFile($request->file('image'));
        }



        return $data;
    }

    /**
     * Moves the attached file to the server.
     *
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return string
     */
    protected function moveFile($file)
    {
        if (!$file->isValid()) {
            return '';
        }


        $path = config('laravel-code-generator.files_upload_path', 'uploads');

        $saved = $file->store('public/' . $path, config('filesystems.default'));

        return substr($saved, 7);
    }
}
