<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Exception;

class SalesController extends Controller
{


    public function index(Request $request)
    {
        $salesObjects = Sales::all();

        if ($request->month) {
            $monthsAgo = $request->month;

            if ($monthsAgo == 1) {
                // Retrieve sales data from the last month
                $salesObjects = Sales::where('created_at', '>=', Carbon::now()->subMonth())->get();
            } elseif ($monthsAgo == 3) {
                // Retrieve sales data from three months ago up to today
                $salesObjects = Sales::where('created_at', '>=', Carbon::now()->subMonth(2))->get();
            } elseif ($monthsAgo == 6) {
                // Retrieve sales data from six months ago up to today
                $salesObjects = Sales::where('created_at', '>=', Carbon::now()->subMonth(5))->get();
            } elseif ($monthsAgo == 12) {
                // Retrieve sales data from twelve months ago up to today
                $salesObjects = Sales::where('created_at', '>=', Carbon::now()->subYear())->get();
            } else {
                // Invalid month value provided
                return redirect()->back()->with('error', 'Invalid month value provided.');
            }
        }

        return view('sales.index', compact('salesObjects' ,'request'));
    }


    public function create()
    {


        return view('sales.create');
    }


    public function store(Request $request)
    {


            $data = $this->getData($request);

            Sales::create($data);

            return redirect()->route('sales.sales.index')
                ->with('success_message', 'Sales was successfully added.');

    }


    public function show($id)
    {
        $sales = Sales::findOrFail($id);

        return view('sales.show', compact('sales'));
    }


    public function edit($id)
    {
        $sales = Sales::findOrFail($id);


        return view('sales.edit', compact('sales'));
    }


    public function update($id, Request $request)
    {


            $data = $this->getData($request);

            $sales = Sales::findOrFail($id);
            $sales->update($data);

            return redirect()->route('sales.sales.index')
                ->with('success_message', 'Sales was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $sales = Sales::findOrFail($id);
            $sales->delete();

            return redirect()->route('sales.sales.index')
                ->with('success_message', 'Sales was successfully deleted.');
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
            'date' => 'required|nullable|string|min:1',
            'number' => 'required|nullable|numeric',
            'DownPayment' => 'required|nullable|string|min:1',
            'FullAmount' => 'required|nullable|string|min:1',
            'details' => 'string|min:1|max:1000|nullable',
        ];


        $data = $request->validate($rules);




        return $data;
    }

}
