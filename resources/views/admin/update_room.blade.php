
<!DOCTYPE html>
<html>
  <head> 
    <title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" style="border-radius: 30px" href="images/hotel.jpg"/>

  <base href="/public">

   @include('admin.css')
   <style type="text/css">
    label{
      display: inline-block;
      width:200px;
    }
    .div_deg{
      padding-top:30px;
    }
    .div_center
    {
      text-align:center;
      padding-top:40px;
    }
   </style>
  </head>
  <body>
   @include('admin.header')
   @include('admin.sidebar')



   <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


      <div class="div_center">

      <h1 style="font-size:30px; font-weight:blod;">update room</h1>

        <form action="{{url('edit_room',$data->id)}}" method="post" enctype="multipart/form-data" >
          @csrf
      <div class="div_deg">
        <label>room Title</label>
        <input type=text name="title" value="{{$data->room_title}}">
      </div>
      <div class="div_deg" >
        <label>description</label>

       <textarea name="description">
       {{$data->description}}
       </textarea>
      </div>
      <divclass="div_deg">
        <label>price</label>
        <input type="number" name="price"value="{{$data->price}}">
      
      <div class="div_deg">
        <label>room Type</label>
        <select name="type">
            <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>
  
          <option value="premium"> premium</option>
          <option value="Deluxe">Deluxe</option>
          </select>
      </div>
    
      <div class="div_deg">
        <label>free wifi</label>
        <select name="wifi">
        <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>
          <option value="yes">yes</option>
          <option value="no">no</option>
      
          </select>
      </div>
     
      <div class="div_deg">
        <label>Current Image</label>
        <img style="margin:auto" width="100" src="/room/{{$data->image}}">
        
</div>





      <div class="div_deg">
        <label>Upload Image</label>
        <input type="file"  name="image">
</div>
<div>
<input class="btn btn-primary" type="submit" value="update room">

</div>

</form>









</div>
</div>
</div>


        @include('admin.footer')

  </body>
</html>