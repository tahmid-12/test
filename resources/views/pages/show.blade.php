@extends('layouts.master')

@section('content')

<h1 class="text-center">Admin Posts for Image Page</h1>
@if(count($img) > 0)
   
   <table class="table table-bordered">
      <thead>
        <tr>
          <th>Image Title</th>
          <th>Image</th>
          <th>Image Body</th>
          <th></th>
        </tr>
      </thead>
    <tbody>
        @foreach($img as $i)
        <tr>
            <td>{{ $i->img_title }}</td>
            <td>{{ $i->img_body }}</td>
            <td><img style="height: 100px; width: 100px;" src="/storage/upload/{{ $i->image }}" alt=""></td>
            <td>
               <a href="/deleteImage/{{ $i->id }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>       
        @endforeach
    </tbody>
   </table>
@else
     <p>Nothing Found</p>
@endif
<a style="margin-left: 600px;" href="/image" class="btn btn-secondary">Go Back</a>
@endsection