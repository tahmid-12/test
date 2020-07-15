@extends('layouts.app')

@section('content')

<h5 class="text-center">Video Section</h5>

<div class="wrapper section1">

     <form action="{{ route('vidstore') }}" method="POST" enctype="multipart/form-data">
            @csrf
           <label for="vid-title">Video Title</label> <br>
           <input type="text" id="vid-title" name="vid_title" required> <br>

           <label for="vid-link">Video Link</label> <br>
           <input type="text" id="vid-link" name="vid_link" required> <br>

           <label for="vid-body">Body</label> <br>
           <textarea name="vid_body" id="" cols="30" rows="10" required></textarea> <br>

           <!--
           <a href="">Submit</a>
           -->
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
     </form>
</div>

@endsection