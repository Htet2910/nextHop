<?php

namespace App\Http\Controllers\Backend;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $partners = Partner::latest()->paginate(10);
         return view('backend.partners.index',compact('partners'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partners.create');
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
        'image' => 'required|max:2048',
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploadImg/partners'), $new_name);
        $form_data = array( 
            'image'          =>   $new_name
        );
         Partner::create($form_data);
 
        return redirect()->route('partners.index')
 
                ->with('success','Partner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    // public function show(Partner $partner)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('backend.partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
       $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'image' => 'required|max:2048'
               
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploadImg/partners'), $image_name);

        }
        // else
        // {
        //     $request->validate([
        //         'title'=>'required',
        //         'body'=>'required'
        //     ]);
        // }

        $form_data = array(
            'image'          =>   $image_name
        );
       
        $partner->update($form_data);
 
     return redirect()->route('partners.index')->with('success','Partner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
     return redirect()->route('partners.index')->with('success','Partner deleted successfully');
    }
}
