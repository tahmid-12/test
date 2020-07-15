@extends('layouts.master')

@section('content')

<h1 class="text-center">Admin Posts for Video Page</h1>

@if(count($vid) > 0)

<table class="table table-bordered">
      <thead>
        <tr>
          <th>Video Title</th>
          <th>Video Body</th>
          <th>Video Link</th>
          <th></th>
        </tr>
      </thead>
    <tbody>
        @foreach($vid as $v)
        <tr>
            <td>{{ $v->vid_title }}</td>
            <td>{{ $v->vid_body }}</td>
            <td>{{ $v->vid_link }}</td>
            <td>
               <a href="/deleteVideo/{{ $v->id }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>       
        @endforeach
    </tbody>
   </table>

@else
     <p>Nothing Found</p>
@endif
<a style="margin-left: 600px;" href="/vid" class="btn btn-secondary">Go Back</a>
@endsection