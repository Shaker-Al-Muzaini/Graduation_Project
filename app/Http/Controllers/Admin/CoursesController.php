<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\Courses;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Courses::all();
        return response()->json(['projects' => $projects], 200);
    }

    public function for_project()
    {
        return Courses::limit(4)->get();
    }

    public function  create(){
        $courses=new Courses();
        return view('dashboard.courses.create',compact(['courses']));
    }

    public function edit(string $id)
    {
        try {
            $courses=Courses::findOrFail($id);
        } catch (\Exception $e){
            return Redirect::route('courses')
                ->with('info','Record is  not  Fount !');

        }

        return view('dashboard.courses.edit',compact(['courses']));
    }

    public function index2()
    {
        $courses= Courses::all();
        return view('dashboard.courses.index', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $clean_data = $request->validate(Courses::rules($id = 0), [
            'required' => 'يجب إدخال قيمة',
            'name.required' => 'يجب إدخال الاسم',
        ]);

        $data = $request->except(['courses_image', 'small_img']);
        $data['courses_image'] = $this->uploadImage($request, 'courses_image');
        $data['small_img'] = $this->uploadImage($request, 'small_img');

        $courses = Courses::create($data);

        return redirect()->route('courses')->with('courses', 'Courses Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $project = Courses::findOrFail($id);
//            return $project;
//
            return response()->json([
                'success' => true,
                'data' => [
                    'Courses' => $project
                ],
                'message' => trans('messages.show_success', ['name' => 'المشروع'])
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => trans('messages.not_found', ['name' => 'Courses'])
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => trans('messages.error', ['action' => 'عرض', 'name' => 'Courses'])
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, string $id)
{
    // validate
    $request->validate(Courses::rules());

    $courses = Courses::findOrFail($id);
    $date = $request->except(['courses_image', 'small_img']);

    $old_image = $courses->courses_image;
    $new_image = $this->uploadImage($request, 'courses_image');
    if ($new_image) {
        $date['courses_image'] = $new_image;
    } else {
        $date['courses_image'] = $old_image;
    }

    $old_image2 = $courses->small_img;
    $new_image2 = $this->uploadImage($request, 'small_img');
    if ($new_image2) {
        $date['small_img'] = $new_image2;
    } else {
        $date['small_img'] = $old_image2;
    }

    $courses->update($date);

    if ($old_image && $new_image) {
        Storage::disk('public')->delete($old_image);
    }

    if ($old_image2 && $new_image2) {
        Storage::disk('public')->delete($old_image2);
    }

    return redirect()->route('courses')->with('success', 'Courses Updated!');
}


    public function destroy(string $id)
    {
        $category=Courses::findOrFail($id);
        $category->delete();
        return Redirect::route('courses')
            ->with('wring','Courses deleted !');
    }

    protected function uploadImage(Request $request, $fieldName)
    {
        if (!$request->hasFile($fieldName)) {
            return;
        }

        $file = $request->file($fieldName);
        $path = 'http://127.0.0.1:8000/storage/'.$file->store('uploads', ['disk' => 'public']);

        return $path;
    }
}

