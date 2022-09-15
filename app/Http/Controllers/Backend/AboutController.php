<?php

namespace App\Http\Controllers\Backend;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::latest()->paginate(10);
         return view('backend.abouts.index',compact('abouts'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
         'title' => 'required',
         'body'=>'required',
         'image' => 'required|max:2048',
        ]);
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploadImg/abouts'), $new_name);

        $form_data = array(
            'title'          =>   $request->title,
            'body'           =>   $request->body, 
            'image'          =>   $new_name
        );
         About::create($form_data);
 
        return redirect()->route('abouts.index')
 
                ->with('success','About created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    // public function show(About $about)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('backend.abouts.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {$image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title'=>'required',
                'body'=>'required',
                'image' => 'required|max:2048'
               
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploadImg/abouts'), $image_name);

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

        // $request->validate([
        //  'title' => 'required',
        //  'body'=>'required',
        // ]);
        
        $about->update($form_data);
 
        return redirect()->route('abouts.index')->with('success','About updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
     return redirect()->route('abouts.index')->with('success','About deleted successfully');
    }
}
