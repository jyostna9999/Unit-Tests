@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="card mb-5 pl-2 pr-2">
        <div class="card-title"><h1>Contact Page</h1>
            <p class="lead">Please use this form to contact Site owner</p></div>

        <form action="{{route('contact.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Enter the name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input name="subject" type="text" class="form-control" placeholder="Enter subject here">
            </div>
            <div class="form-group">
                <label for="body">Message</label>
                <textarea name="body" class="form-control" id="body" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
    </div>
    </div>
@endsection