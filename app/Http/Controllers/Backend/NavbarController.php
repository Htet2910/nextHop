<?php

namespace App\Http\Controllers\Backend;

use App\Navbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $navbars = Navbar::latest()->paginate(10);
         return view('backend.navbars.index',compact('navbars'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.navbars.create');
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
        'nav_name' => 'required',
        'nav_link' => 'required',
        ]);
         Navbar::create($request->all());
 
        return redirect()->route('navbars.index')
 
                ->with('success','Navbar created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    // public function show(Navbar $navbar)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        return view('backend.navbars.edit',compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
         $request->validate([
         'nav_name' => 'required',
         'nav_link' => 'required',
        ]);
        
        $navbar->update($request->all());
 
        return redirect()->route('navbars.index')->with('success','Navbar updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
         $navbar->delete();
      return redirect()->route('navbars.index')->with('success','Navbar deleted successfully');
    }
}
