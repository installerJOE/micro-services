@extends('layouts.app')

@section('content')

    <div class="container jumbotron">
        <form action="/upload-image" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Upload Image</h1> <hr> 
            {{-- <div class="row">
                <label>Name of Image</label><br>
                    <input type="text" class="form-control" name="image_name" required="required" placeholder="Enter the name of the image"/><br>
            </div><br><br> --}}
               
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                    <img id="output_img" src="{{asset('storage/images/no_image_male.jpg')}}" style="width:100%"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                    <label>Select Image</label>
                    <input type="file" name="image" accept="image/*" onchange="previewImage()" required="required"/><br><br>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
    </div>    
    <script>
        function previewImage(){
            var reader = new FileReader();
            reader.onload = ()=>{
                var output = document.getElementById('output_img');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

@endsection