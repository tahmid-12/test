@extends('layouts.app')

@section('content')

<h5 class="text-center">Image Section</h5>

<div class="wrapper section1">

            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <label for="img_title">Title</label> <br>
                  <input type="text" id="img_title" name="img_title" required> <br>

                  <label for="img_link">Image Link</label> <br>
                  <input type="file" id="image" name="img_link" required> <br>

                  <label for="img_body">Body</label> <br>
                  <textarea name="img_body" id="" cols="30" rows="10" required></textarea> <br>

                  <!--
                  <a href="">Submit</a>
                  <button class="submit" class="sub"> Submit</button>
                  
                  <input type="submit" name="img-upload">
                  -->

                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

</div>

@endsection