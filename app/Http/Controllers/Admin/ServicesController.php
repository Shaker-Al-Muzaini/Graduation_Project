<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $r= Services::all();
       return $r;
    }

 	public function thServices()
    {
       $r= Services::limit(3)->get();
        return $r;
    }

    public function index2()
    {
        $services = Services::all();
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $services=new Services();
        return view('dashboard.Services.create',compact(['services']));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $clean_data = $request->validate(Services::rules($id = 0), [
            'required' => 'يجب إدخال قيمة',
            'name.required' => 'يجب إدخال الاسم',
        ]);

        $data = $request->except(['services_image', 'services_owner_image']);
        $data['services_image'] = $this->uploadImage($request, 'services_image');
        $data['services_owner_image'] = $this->uploadImage($request, 'services_owner_image');

        $services = Services::create($data);

        return redirect()->route('services')->with('success', 'Services Created!');
    }

    public function store2(Request $request)
    {
        $validatedData = $request->validate([
            'required' => 'يجب إدخال قيمة',
            'name.required' => 'يجب إدخال الاسم',
        ]);

        $data = $request->except(['services_image', 'services_owner_image']);
        $data['services_image'] = $this->uploadImage($request, 'services_image');
        $data['services_owner_image'] = $this->uploadImage($request, 'services_owner_image');

        $services = Services::create($data);

        return response()->json(['Services' => $services], 201);
    }

    public function show(string $id)
    {

            try {
                $services = Services::findOrFail($id);

                return response()->json([
                    'success' => true,
                    'data' => [
                        'Services' => $services
                    ],
                    'message' => trans('messages.show_success', ['name' => 'services'])
                ]);
            } catch (ModelNotFoundException $e) {
                return response()->json([
                    'success' => false,
                    'message' => trans('messages.not_found', ['name' => 'services'])
                ], 404);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => trans('messages.error', ['action' => 'services', 'name' => 'services'])
                ], 500);
            }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $services=Services::findOrFail($id);
        } catch (\Exception $e){
            return Redirect::route('services')
                ->with('info','Record is  not  Fount !');

        }

        return view('dashboard.Services.edit',compact(['services']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate
        $request->validate(Services::rules());

        $services = Services::findOrFail($id);
        $date = $request->except(['services_image', 'services_owner_image']);

        $old_image = $services->services_image;
        $new_image = $this->uploadImage($request, 'services_image');
        if ($new_image) {
            $date['services_image'] = $new_image;
        } else {
            $date['services_image'] = $old_image;
        }

        $old_image2 = $services->services_owner_image;
        $new_image2 = $this->uploadImage($request, 'services_owner_image');
        if ($new_image2) {
            $date['services_owner_image'] = $new_image2;
        } else {
            $date['services_owner_image'] = $old_image2;
        }

        $services->update($date);

        if ($old_image && $new_image) {
            Storage::disk('public')->delete($old_image);
        }

        if ($old_image2 && $new_image2) {
            Storage::disk('public')->delete($old_image2);
        }

        return redirect()->route('services')->with('success', 'Services Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Services::findOrFail($id);
        $category->delete();
        return Redirect::route('services')
            ->with('wring','Services deleted !');
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
