@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a class="btn btn-primary" href="/event">Back To Activity</a><br/><br/>
                    <form method="post" action="/event" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="form-group">
                                <label for="title">Document Title</label>
                                <input type="text" value="{{old('title')}}" name="title" class="form-control">
                                @if ($errors->has("title"))
                                <p style="color: red">{{$errors->first("title")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="SD">Short Description</label>
                                <textarea name="description" class="form-control">{{old('description')}}</textarea>
                                @if ($errors->has("description"))
                                    <p style="color: red">{{$errors->first("description")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" value="{{old('date')}}" name="date" class="form-control">
                                @if ($errors->has("date"))
                                    <p style="color: red">{{$errors->first("date")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" value="{{old('time')}}" name="time" class="form-control">
                                @if ($errors->has("time"))
                                <p style="color: red">{{$errors->first("time")}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="time">Image</label>
                                <input type="file" value="{{old('image')}}" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
