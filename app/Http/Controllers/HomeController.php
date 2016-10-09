<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
    	$data['say'] 	= 'hello';
    	$data['name'] 	= 'dika';
    	$data['age'] 	= 26;

    	return view('backend.home.index' , compact('data'));

    }
    public function create()
    {
    	//
    }
    public function store()
    {
    	//
    }
    public function edit($id)
    {
    	// code...
    }
    public function update(Request $request, $id)
    {
    	//
    }
    public function destroy($id)
    {
    	//
    }


}
