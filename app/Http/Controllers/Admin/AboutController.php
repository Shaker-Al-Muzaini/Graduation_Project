<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $About = About::all();

        return response()->json(['About' => $About], 200);
    }
    public function index2()
    {
        $Abouts = About::all();
        return view('dashboard.Abouts.index', compact('Abouts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        try {
            $abouts=About::findOrFail($id);
        } catch (\Exception $e){
            return Redirect::route('about')
                ->with('info','Record is  not  Fount !');

        }
        return view('dashboard.Abouts.edit',compact(['abouts']));
    }
    public function update(Request $request, string $id)
    {
        $request->validate(About::rules());
        $Teams=About::findOrFail($id);
        $date=$request->all();
        $Teams->update($date);
        return Redirect::route('about')
            ->with('success','about Update !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
