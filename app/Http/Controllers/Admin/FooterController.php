<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Footer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Footers = Footer::all();
        return response()->json(['Footers' => $Footers], 200);
    }

    public  function  index2(){
        $Footers = Footer::all();
        return view('dashboard.Footers.index', compact('Footers'));
    }

    public  function  edit ($id){

        try {

            $footers=Footer::findOrFail($id);
        } catch (\Exception $e){
            return Redirect::route('footer')
                ->with('info','Record is  not  Fount !');

        }
        return view('dashboard.Footers.edit',compact(['footers']));

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $validatedData = $request->validate([
//            'name' => 'required|max:255',
//            'description' => 'required',
//            'image_1' => 'required|image|max:2048',
//            'image_2' => 'required|image|max:2048',
//            'features' => 'required',
//            'link' => 'required',
//        ]);
//
//        $project = Project::create($validatedData);
//
//        return response()->json(['project' => $project], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $Footer = Footer::findOrFail($id);

            return response()->json([
                'success' => true,
                'data' => [
                    'project' => $Footer
                ],
                'message' => trans('messages.show_success', ['name' => 'المشروع'])
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => trans('messages.not_found', ['name' => 'المشروع'])
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => trans('messages.error', ['action' => 'عرض', 'name' => 'المشروع'])
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id,)
    {
        $request->validate(Footer::rules());
        $Footers=Footer::findOrFail($id);
        $date=$request->all();
        $Footers->update($date);
        return Redirect::route('footer')
            ->with('success','footer Update !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        $project->delete();
//        return response()->json(null, 204);
    }
}

