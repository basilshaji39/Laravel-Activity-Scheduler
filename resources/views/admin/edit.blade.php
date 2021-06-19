@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a class="btn btn-primary" href="/event">Back To Activity</a><br/><br/>
                    <form method="post" action="/event/{{$events->id}}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="container">
                            <div class="form-group">
                                <label for="title">Document Title</label>
                                <input type="text" value="{{$events->document_title}}" name="title" class="form-control">
                                @if ($errors->has("title"))
                                <p style="color: red">{{$errors->first("title")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="SD">Short Description</label>
                                <textarea name="description" class="form-control">{{$events->short_description}}</textarea>
                                @if ($errors->has("description"))
                                    <p style="color: red">{{$errors->first("description")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" value="{{$events->date}}" name="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" value="{{$events->time}}" name="time" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="done">Done Description</label>
                                <input type="text" name="done" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>Previous Image</p>
                                <img src="{{asset('storage/images/'.$events->event_pic)}}" alt="" width="150" height="150"><br/><br/>
                            </div>
                            <div class="form-group">
                                <label for="done">Image</label>
                                <input type="file"  name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
