<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pictures;
use Illuminate\Http\Request;
use Exception;
use Intervention\Image\Facades\Image;


class PicturesControllerimagegig extends Controller
{

    public function index()
    {
        $picturesObjects = Pictures::paginate(25);

        return view('pictures.index', compact('picturesObjects'));
    }


    public function create()
    {

        return view('pictures.create');
    }
    public function createMultiple()
    {

        return view('pictures.createMultiple');
    }




    public function multipleStore(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'image.*' => 'required'
        ]);

        foreach ($request->image as $index => $img) {
            $image = $request->file('image')[$index];
            $filename = time() . '_' . $index . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/' . $filename);

            // Resize image
            Image::make($image->getRealPath())
                ->resize(800, 600) // Set the desired width and height
                ->save($path);

            $picture = new Pictures();
            $picture->type = $request->type;
            $picture->image = $filename;
            $picture->save();
        }

        return redirect()->route('pictures.pictures.index')
            ->with('success_message', 'Pictures were successfully added.');
    }


//    private function moveFileS($image) {
//        $imageName = uniqid() . '.' . pathinfo($image->basePath(), PATHINFO_EXTENSION);
//        $image->save(public_path('uploads') . '/' . $imageName, 75);
//        return $imageName;
//    }



    public function store(Request $request)
    {

        $data = $this->getData($request);


        Pictures::create($data);

            return redirect()->route('pictures.pictures.index')
                ->with('success_message', 'Pictures was successfully added.');

    }


    public function show($id)
    {
        $pictures = Pictures::findOrFail($id);

        return view('pictures.show', compact('pictures'));
    }


    public function edit($id)
    {
        $pictures = Pictures::findOrFail($id);


        return view('pictures.edit', compact('pictures'));
    }


    public function update($id, Request $request)
    {

            $data = $this->getData($request);

            $pictures = Pictures::findOrFail($id);
            $pictures->update($data);

            return redirect()->route('pictures.pictures.index')
                ->with('success_message', 'Pictures was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $pictures = Pictures::findOrFail($id);
            $pictures->delete();

            return redirect()->route('pictures.pictures.index')
                ->with('success_message', 'Pictures was successfully deleted.');
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
            'name' => '',
            'type' => 'required',
            'details' => '',
            'image' => ['nullable','file'],
            'branchName' => '',
        ];

                if ($request->route()->getAction()['as'] == 'pictures.pictures.store' || $request->has('custom_delete_image')) {
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
