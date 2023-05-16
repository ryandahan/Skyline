<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inquiries;
use Illuminate\Http\Request;
use Exception;

class InquiriesController extends Controller
{


    public function index()
    {
        $inquiriesObjects = Inquiries::latest()->get();
        $unread = Inquiries::where('is_read', '0')->count();

        return view('inquiries.index', compact('inquiriesObjects', 'unread'));
    }


    public function create()
    {


        return view('inquiries.create');
    }


    public function store(Request $request)
    {
        $data = $this->getData($request);

        Inquiries::create($data);

        return redirect()->route('index')
            ->with('success_message', 'Your inquiry has been placed. We will contact you soon.');

    }

    public function storeFoam(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:1|max:255',
            'email' => '',
            'phone' => 'required|string|min:1',
            'height' => 'nullable',
            'width' => 'nullable',
            'note' => 'nullable',
            'length' => 'nullable',
            'typeOfFurniture' => 'required',
        ];

        $data = $request->validate($rules);

        Inquiries::create($data);

        return redirect()->back()->with('success_message', 'Your inquiry has been placed. We will contact you soon.');

    }


    public function show($id)
    {
        $inquiries = Inquiries::findOrFail($id);
        $inquiries->is_read = 1;
        $inquiries->save();

        view()->share('title','View Details');
        return view('inquiries.show', compact('inquiries'));
    }


    public function edit($id)
    {
        $inquiries = Inquiries::findOrFail($id);


        return view('inquiries.edit', compact('inquiries'));
    }


    public function update($id, Request $request)
    {


        $data = $this->getData($request);

        $inquiries = Inquiries::findOrFail($id);
        $inquiries->update($data);

        return redirect()->route('inquiries.inquiries.index')
            ->with('success_message', 'Inquiries was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $inquiries = Inquiries::findOrFail($id);
            $inquiries->delete();

            return redirect()->route('inquiries.inquiries.index')
                ->with('success_message', 'Inquiries was successfully deleted.');
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
            'name' => 'required|string|min:1|max:255',
            'email' => '',
            'phone' => 'required|string|min:1',
            'note' => 'nullable|string|min:1|max:1000',
            'image' => '',
            'height' => 'nullable',
            'fabricType' => 'nullable',
            'backPiece' => 'nullable',
            'corners' => 'nullable',
            'pillowLook' => 'nullable',
            'pillowTop' => 'nullable',
            'armRest' => 'nullable',
            'halfCircleFront' => 'nullable',
            'designColor' => 'nullable',
            'woodColor' => 'nullable',
            'typeOfFurniture' => 'required',

            // Required if typeOfFurniture is either morocan or Yemeni or modern
            'height' => 'required_if:typeOfFurniture,morocan,Yemeni,modern,table',
//            'fabricType' => 'required_if:typeOfFurniture,morocan,Yemeni,modern',
            'backPiece' => 'required_if:typeOfFurniture,morocan,Yemeni,modern',
//            'corners' => 'required_if:typeOfFurniture,morocan,Yemeni,modern',
            'pillowLook' => 'required_if:typeOfFurniture,morocan,Yemeni,modern',
            'pillowTop' => 'required_if:typeOfFurniture,morocan,Yemeni,modern',
            'armRest' => 'required_if:typeOfFurniture,morocan,Yemeni,modern',
            'halfCircleFront' => 'required_if:typeOfFurniture,morocan,Yemeni,modern',
            'ends' => 'required_if:typeOfFurniture,morocan,Yemeni,modern',

            'height_wood' => 'required_if:typeOfFurniture,morocan,modern',

            'legs' => 'required_if:typeOfFurniture,modern',

            'main_fabric' => 'required_if:typeOfFurniture,morocan,curtains,Yemeni,modern',
            'inner_fabric' => 'required_if:typeOfFurniture,morocan,curtains,Yemeni,modern',


            // Required if typeOfFurniture is Curtain
            'win_height' => 'required_if:typeOfFurniture,curtains',
            'win_width' => 'required_if:typeOfFurniture,curtains',
            'certain_style' => 'required_if:typeOfFurniture,curtains',



//            required if table

            'table_style' => 'required_if:typeOfFurniture,table',
            'table_category' => 'required_if:typeOfFurniture,table',
            'table_size' => 'required_if:typeOfFurniture,table',

//            required if rugs

            'size' => 'required_if:typeOfFurniture,rugs',
            'rug_style' => 'required_if:typeOfFurniture,rugs',

//            'table_color' => 'required_if:typeOfFurniture,table',
//            'table_decoration' => 'required_if:typeOfFurniture,table',
            'table_color' => '',
            'table_decoration' => '',
            'table_count' => '',
            'table_design' => '',
            'decoration' => '',
            'button_type' => '',



        ];

        $data = $request->validate($rules);


        $data['is_read'] = $request->has('is_read');

        if (!empty(\request('image'))) {
            $data['image'] = \request()->image->store('uploads', 'public');
        }

        return $data;
    }

}
