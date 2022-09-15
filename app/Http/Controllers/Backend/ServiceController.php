<?php

namespace App\Http\Controllers\Backend;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $services = Service::latest()->paginate(10);
         return view('backend.services.index',compact('services'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'title' => 'required',
        'body'=>'required',
        'image' => 'required|max:2048',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploadImg/services'), $new_name);
        $form_data = array(
            'title'          =>   $request->title,
            'body'           =>   $request->body, 
            'image'          =>   $new_name
        );
         Service::create($form_data);
 
        return redirect()->route('services.index')
 
                ->with('success','Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    // public function show(Service $service)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backend.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'=>'required',
                'body'=>'required',
                'image' => 'required|max:2048'
               
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploadImg/services'), $image_name);

        }
        else
        {
            $request->validate([
                'title'=>'required',
                'body'=>'required'
            ]);
        }

        $form_data = array(
            'title'          =>   $request->title, 
            'body'           =>   $request->body,
            'image'          =>   $image_name
        );
       
        $service->update($form_data);
 
     return redirect()->route('services.index')->with('success','Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
         $service->delete();
     return redirect()->route('services.index')->with('success','Service deleted successfully');
    }
}
