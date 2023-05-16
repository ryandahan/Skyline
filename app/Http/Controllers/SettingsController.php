<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Exception;

class SettingsController extends Controller
{


    public function index()
    {
        $settingsObjects = Settings::paginate(25);

        return view('settings.index', compact('settingsObjects'));
    }


    public function create()
    {


        return view('settings.create');
    }


    public function store(Request $request)
    {


            $data = $this->getData($request);

            Settings::create($data);

            return redirect()->route('settings.settings.index')
                ->with('success_message', 'Settings was successfully added.');

    }


    public function show($id)
    {
        $settings = Settings::findOrFail($id);

        return view('settings.show', compact('settings'));
    }


    public function edit($id)
    {
        $settings = Settings::findOrFail($id);


        return view('settings.edit', compact('settings'));
    }


    public function update($id, Request $request)
    {


            $data = $this->getData($request);

            $settings = Settings::findOrFail($id);
            $settings->update($data);

            return redirect()->route('settings.settings.index')
                ->with('success_message', 'Settings was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $settings = Settings::findOrFail($id);
            $settings->delete();

            return redirect()->route('settings.settings.index')
                ->with('success_message', 'Settings was successfully deleted.');
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
                'name' => 'string|min:1|max:255|nullable',
            'picture' => ['file','nullable'],
        ];


        $data = $request->validate($rules);

        if ($request->has('custom_delete_picture')) {
            $data['picture'] = null;
        }
        if ($request->hasFile('picture')) {
            $data['picture'] = $this->moveFile($request->file('picture'));
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
