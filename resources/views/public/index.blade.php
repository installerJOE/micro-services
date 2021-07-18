@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron text-center">
                <h1>Welcome to our Micro-Services Home Page</h1>
                <p>
                    This project has to do with the combination of various smaller Projects
                    that are continuously developed and implemented to form all the services 
                    that we render, hence the name Micro-Services. Please Click on the button 
                    below to get started with our services or learn more.
                </p>
                <p>
                    <a class="btn btn-primary" href="{{route('login')}}"> Get Started </a> &nbsp;
                    <a class="btn btn-success" href="/about-us"> Learn More </a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            </div>
        </div>
@endsection