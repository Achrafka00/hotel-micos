
<!DOCTYPE html>
<html>
  <head>
    <title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" style="border-radius: 30px" href="images/hotel.jpg"/> 
   @include('admin.css')
 <style>

    .table_deg
    {
     border: 2px solid rgb(242, 242, 242);
     margin: auto;
     width:80%; 
     text-align:center;
     margin-top:40px;
    }
    .th_deg
    {
        background-color:rgb(255, 37, 102);
        padding:15px;
        color: #f1f1f1;
    }
    tr{
        border:3px solid rgb(52, 136, 255);
    }
    td{
        padding:10px;
    }
 </style>

  </head>
  <body>
   @include('admin.header')

   @include('admin.sidebar')
     


   <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


          <table class="table_deg">
<tr>
    <th class="th_deg">room title</th>
    <th class="th_deg">description</th>
    <th class="th_deg">price</th>
    <th class="th_deg">wifi</th>
    <th class="th_deg">room type</th>
    <th class="th_deg">image</th>
    <th class="th_deg">delete</th>
    <th class="th_deg">update</th>
</tr>
    @foreach($data as $data)
<tr>
  <td>{{$data->room_title}}</td>
  <td>{!!Str::limit($data->description,150)!!} </td> 
  <td>{{$data->price}} MAD</td> 
  <td>{{$data->wifi}} </td> 
  <td>{{$data->room_type}}</td> 
   
  <td>
    <img width="60" src="room/{{$data->image}}">
  </td>
  <td>
    <a onclick="return confirm('are you sure to delete');" class="btn btn-danger" href="{{url('room_delete',$data->id)}}">Delete</a>
  </td>
  <td>
    <a " class="btn btn-danger" href="{{url('room_update',$data->id)}}">update</a>
  </td>
</tr>


@endforeach
</table>
















</div>
</div>
</div>










        @include('admin.footer')

  </body>
</html>