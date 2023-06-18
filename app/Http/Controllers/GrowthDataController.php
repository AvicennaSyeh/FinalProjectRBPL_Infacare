<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\GrowthData;
use Illuminate\View\View;


class GrowthDataController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'age' => 'required',
            'kids_name' => 'required',
            'height' => 'required',
            'weight' => 'required',
        ]);

        // Create a new GrowthData model instance
        $growthData = new GrowthData();
        $growthData->age = $request->input('age');
        $growthData->kids_name = $request->input('kids_name');
        $growthData->height = $request->input('height');
        $growthData->weight = $request->input('weight');

        // Save the growth data to the database
        $growthData->save();

        // Redirect to a success page or perform any other actions
        return redirect()->route('success');
    }

    public function show()
    {
        $growthData = DB::table('infagrowth_data')->get(); // Retrieve growth data from the database table

        //dd($growthData); // Add this line to display the data and stop further execution
        //return $growthData;
        return view('showgrowthdata', compact('growthData'));
    }





}
