<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

use Illuminate\support\facades\Auth;

use App\Models\room;

use App\Models\booking;

use App\Models\gallary;

use App\Models\contact;


use Illuminate\Support\Facades\Notification;

use App\Notifications\sendemailnotification;


class AdminController extends Controller
{
  public function index()
  {

   if(Auth::id())
   
  {
    $usertype = Auth()->user()->usertype;

      if($usertype == 'user')
      {
        
        $gallary= gallary::all();

        $room = room::all();

        return view('home.index',compact('room','gallary'));
      }
     else if($usertype == 'admin')
      {
        return view('admin.index');
      }

      else {
        return redirect()->back();
      }
  }
  }

  public function home()
  {
    $room = room::all();

    $gallary= gallary::all();
    
 return view('home.index',compact('room','gallary'));

  }

public function create_room()
{
  return view('admin.create_room');
}
public function add_room(request $request)
{
  $data = new room ;

  $data->room_title=$request->title;

  $data->description=$request->description;

  $data->price=$request->price;

  $image=$request->image;

  if($image)
  {
    $imagename=time().".".$image->getClientOriginalextension();
    $request->image->move('room',$imagename);

    $data->image=$imagename;
  }

  $data->wifi=$request->wifi;

  
  $data->room_type=$request->type;
 

  $data->save();

  return redirect()->back();

}
public function view_room()
{
  

  $data = room::all();

  return view ('admin.view_room',compact('data'));
}
public function room_delete($id)
{
 $data = room::find($id);
 $data -> delete();
 return Redirect()->back();
}
public function room_update($id)
{
  $data = room::find($id);

 return view('admin.update_room',compact('data'));
}

public function edit_room (Request $request,$id)
{
$data = room::find($id);

$data->room_title = $request->title;
$data->description = $request->description;
$data->price = $request->price;
$data->wifi = $request->wifi;
$data->room_type = $request->type;
  $image=$request->image;
  if ($image){
    $imagename=time().".".$image->getClientOriginalextension();
    $request->image->move('room',$imagename);

    $data->image=$imagename;
  }

$data->save();

return redirect()->back();

}

public function bookings()
{

if( Auth::user()->usertype =="admin")
   {
    $data=Booking::join("rooms","rooms.id","=","bookings.room_id")
    ->select("room_id","name","email","phone","start_date","end_date","status","room_title","price","bookings.id")
    ->get();


  return view('admin.booking',[
      'data'=>$data
    ]);
   }
  
 
  return redirect('/dashboard'); 
  
}

public function delete_booking($id)
{
  $data = booking::find($id);
  $data -> delete();
  return Redirect()->back();
}
public function aprove_book($id)
{
  $booking = booking::find($id);

  $booking->status='approve';
  $booking->save();
  return redirect()->back();
}
public function rejected_book($id)
{
  $booking=booking::find($id);

  $booking->status="rejected";
  $booking->save();
  return redirect()->back();  
}

public function view_gallary()
{
  
  $gallary = gallary::all();

  return view('admin.gallary',compact('gallary'));

}
public function upload_gallary(Request  $request)
{
   $data = new gallary;
   $image = $request->image;
   if($image)
   {
    $imagename=time().'.'.$image->getClientOriginalextension();

    $request->image->move('gallary',$imagename);

    $data->image = $imagename;

    $data->save();

    return redirect()->back();

   }
}

public function delete_gallary($id)
{
  $data = gallary::find($id);

  $data->delete();

  return redirect()->back();
}

public function all_messages()
{
  $data = contact::all();

  return view('admin.all_messages',compact('data'));
}

public function send_mail($id)
{
 $data = contact::find($id);

  return view('admin.send_mail',compact('data'));

}
public function mail(request $request,$id)
{
  $data = contact::find($id);

  $details = [

'greeting' => $request->greeting,

'body' => $request->body,

'action_text' => $request->action_text,

'action_url' => $request->action_url,

'endline' => $request->endline,

  ];

  Notification::send($data,new SendEmailNotification($details));

  return redirect()->back();

}
public function see_more()
{
  return view('home.see_more');
}
}


