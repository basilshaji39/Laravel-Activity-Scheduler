<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\event;
use PDF;

class EventController extends Controller
{
    public function index(){
        $events = event::latest()->where('user_id',Auth::id())->get();
        return view('admin.event',['events'=>$events]);
    }
    public function create(){
        return view('admin.create');
    }
    
    public function store(Request $request){
        //echo request('title');
       // die;
            request()->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);

       
        $event = new event();
        
        $event->document_title = request('title');
        $event->user_id = Auth::id();
        $event->short_description = request('description');
        $event->date = request('date');
        $event->time = request('time');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();// getting Image Extension
            $filename = time() . '.' . $extension;
            $file->move('storage/images/',$filename);
            $event->event_pic = $filename;
        }
        else{
            return $request;
            $event->event_pic = '';
        }
        $event->save();
       return redirect("/event");

    }
    public function show($id){
        $events = event::find($id);
        return view('admin.show',['events'=>$events]);
    }
    public function edit($id){
        $events = event::find($id);
        return view('admin.edit',['events'=>$events]);
    }
    public function update(Request $request, $id){
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $events = event::find($id);
        $events->document_title = request('title');
        $events->user_id = Auth::id();
        $events->short_description = request('description');
        $events->date = request('date');
        $events->time = request('time');
        $events->done_description = request('done');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();// getting Image Extension
            $filename = time() . '.' . $extension;
            $file->move('storage/images/',$filename);
            $events->event_pic = $filename;
        }
        else{
            return $request;
            $event->event_pic = '';
        }

        $events->save();
        return redirect("/event");
    }
    public function destroy($id){
        $events = event::find($id);
        $events->delete();
        return redirect('/event');
    }
    // function generate_pdf() {
    //     $data = [
    //         'foo' => 'bar'
    //     ];
    //     $pdf = PDF::loadView('pdf.document', $data);
    //     return $pdf->stream('document.pdf');
    // }
     public function getpdf($id){
        $events = event::find($id);
        return view('admin.pdfview',['events'=>$events]);
     }
    
}
