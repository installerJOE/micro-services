@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron text-center col-12">
                <h1>Contact Us</h1>
                <p>
                    Git Hub
                </p>
                <p>
                    Email
                </p>
                <p>
                    Phone Number (WhatsApp)
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