<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use	App\Http\Requests\ImageFormRequest;

class ImagesController extends Controller
{
    //if ($request->hasFile('image'))	
public	function store(ImageFormRequest	$request) 
 {
if ($request->hasFile('image'))	
{
$file =	$request->file('image');
$name =	$file->getClientOriginalName();
$file->move(public_path() .	'/images/',	$name);
$imagePath = public_path().'/images/'.$name;
$image = Image::make($imagePath)->resize(500, 250)->save();
$image = Image::make($imagePath)->resize(700, 700)->greyscale()->save();
return redirect('/')->with('status', 'Your image has been uploaded successfully!');				
}	
}
}