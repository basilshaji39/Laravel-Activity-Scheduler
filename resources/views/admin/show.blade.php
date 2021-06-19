@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a class="btn btn-primary" href="/event">Back to Events</a><br/><br/>
                        <h3>{{$events->document_title}}</h3>
                        <p style="text-align: justify;">{{$events->short_description}}</p>
                        <h5>Date:{{$events->date}}</h5>
                        <h5>Time:{{$events->time}}</h5>
                        <img src="{{asset('storage/images/'.$events->event_pic)}}" alt="" width="150" height="150"><br/><br/>
                        <form method="post" action="/event/{{$events->id}}">
                            @csrf
                            @method("DELETE")
                            <button onclick="return confirm('Are You Sure ?');" class="btn btn-danger">Delete Event</button>
                        </form>
                </div>
                <a class="btn btn-success" target="_blank" href="/getpdf/{{$events->id}}">Download As Pdf</a>
            </div>
        </div>
    </div>
</div>
@endsection