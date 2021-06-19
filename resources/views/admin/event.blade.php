@extends('layouts.app')
@section('content')
               <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Dashboard') }}</div>
                            <div class="card-body">
                                <a class="btn btn-warning" href="/event/create">Add New Activity</a><br/><br/>
                                    <ul class="style"> 
                                        @foreach ($events as $event)
                                                <li class="first">
                                                    <h3><a href="/event/{{$event->id}}">{{$event->document_title}}</a></h3>
                                                    <p>{{$event->short_description}}</p>
                                                    <p>{{$event->date_and_time}}</p>
                                                    <a class="btn btn-info" href="/event/{{$event->id}}/edit">Edit</a><br/><br/>
                                                </li> 
                                        @endforeach
                                     </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection