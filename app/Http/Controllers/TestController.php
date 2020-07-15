<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Video;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Validator;
use Auth;

class TestController extends Controller
{
    public function index()
    {
        $img = Image::all();/*
        $vid = Video::all();*/
        return view('main.main')->with('img',$img);
    }

    public function detail()
    {
        return view('pages.detail');
    }

    public function video()
    {
        return view('pages.video');
    }
    

    public function image()
    {
        return view('pages.image');
    }

    public function vid()
    {
        return view('pages.vid');
    }

    public function store(Request $request)
    {
        //$filename =  $request->img_link->getClientOriginalName();
        //return $request->img_link->storeAs('public/upload', $filename);
         //return "File Uploaded";   

         if($request->hasFile('img_link'))
         {
            $filename =  $request->img_link->getClientOriginalName();
            $request->img_link->storeAs('public/upload', $filename);
         }

         $image = new Image;

         $image->img_title = $request->input('img_title');
         $image->img_body = $request->input('img_body');
         $image->image = $filename;
         $image->save();

         return redirect('/show');

         //return $request->img_link->storeAs('public/upload', $filename);
         //return redirect('/')->with('success');
    }

    public function vidStore(Request $request)
    {
        $video = new Video;

        $video->vid_title = $request->input('vid_title');
        $video->vid_link = $request->input('vid_link');
        $video->vid_body = $request->input('vid_body');
        $video->save();

        return redirect('/vidshow')->with('Success','Post Created');

    }

    public function show()
    {
        $img = Image::all();
        return view('pages.show')->with('img',$img);
    }

    public function delete($id)
    {
        $del = Image::find($id);
        $del->delete();

        return redirect('/show')->with('del',$del);

    }

    public function vidshow()
    {
        $vid = Video::all();
        return view('pages.videoshow')->with('vid',$vid);
    }

    public function VideoDelete($id)
    {
        $del = Video::find($id);
        $del->delete();

        return redirect('/vidshow')->with('del',$del);

    }
}
