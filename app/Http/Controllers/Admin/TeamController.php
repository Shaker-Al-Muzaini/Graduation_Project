<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Team = Team::all();
        return response()->json(['Team' => $Team], 200);
    }
    public function index2()
    {
        $Teams = Team::all();
        return view('dashboard.Teams.index', compact('Teams'));
    }

    public  function  create(){
        $teams=new Team();
        return view('dashboard.Teams.create',compact(['teams']));
    }
    public function store(Request $request)
    {
        //        validate
        $clean_data=$request->validate(Team::rules($id=0),[
            'required'=>'يجب إدخال قيمه',
            'team_title.required'=>'يجب إدخال الاسم',
        ]);

        $date=$request->except(['team_img']);
        $date['team_img']=$this->uploadImage($request);
        $Team=Team::create($date);
        return Redirect::route('team')
            ->with('success','teams Created !');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $teams=Team::findOrFail($id);
        } catch (\Exception $e){
            return Redirect::route('team')
                ->with('info','Record is  not  Fount !');

        }
        return view('dashboard.Teams.edit',compact(['teams']));
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(Team::rules());
        $Teams=Team::findOrFail($id);
        $old_image=$Teams->team_img;
        $date=$request->except('team_img');
        $new_image=$this->uploadImage($request);
        if ($new_image){
            $date['team_img']= $new_image;
        }
        $Teams->update($date);
        if($old_image && $new_image){
            Storage::disk('public')->delete($old_image);
        }
        return Redirect::route('team')
            ->with('success','Team Update !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Team=Team::findOrFail($id);
        $Team->delete();
        return Redirect::route('team')
            ->with('wring',' team deleted !');
    }
    protected function uploadImage(Request $request)
    {
        if(!$request->hasFile('team_img')) {
            return ;
        }
        $file= $request->file('team_img');
        $path='http://127.0.0.1:8000/storage/'.$file->store('uploads',[
                'disk'=>'public'
            ]);
        return $path;
    }
}
