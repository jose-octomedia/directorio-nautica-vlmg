<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Directory;
use App\Category;

class DirectoryController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('directory/index', ['directory'=>Directory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('directory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);
        
        $directory = new Directory;
        $directory->category_id = $request['category_id'];
        $directory->name = ucwords($request['name']);
        $directory->address = $request['address'];
        $directory->phone = $request['phone'];
        $directory->phone2 = $request['phone2'];
        $directory->phone3 = $request['phone3'];
        $directory->cellphone = $request['cellphone'];
        $directory->fax = $request['fax'];
        $directory->radio_frecuency = $request['radio_frecuency'];
        $directory->contact = ucwords($request['contact']);
        $directory->email = $request['email'];
        $directory->website = $request['website'];
        $directory->confirmed = $request['confirmed'];
        

        $directory->save();

        return redirect('/directory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Directory $item)
    {
        return view('directory.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directory $item)
    {
        $this->validate($request, [
            'category' => 'required|max:255',
        ]);
        
        $item->update($request->all());
        return redirect('/directory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directory $item)
    {
        $item->delete();
        return redirect('directory');
    }
}
