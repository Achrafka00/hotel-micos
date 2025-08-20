
<!DOCTYPE html>
<html>
  <head> 
    <title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" style="border-radius: 30px" href="images/hotel.jpg"/>
   @include('admin.css')

   <style>

    .table_deg
    {
     border: 2px solid rgb(45, 143, 255);
     margin: auto;
     width:90%; 
     text-align:center;
     margin-top:40px;
    }
    .th_deg
    {
        background-color:rgb(249, 33, 112);
        padding:15px;
        color: aliceblue
    }
    tr{
        border:3px solid rgb(84, 129, 255);
    }
    td{
        padding:8px;
    }
 </style>

  </head>
  <body>
   @include('admin.header')
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <table class="table_deg">
                <tr>
                    <th class="th_deg">room_id</th>
                    <th class="th_deg">customer name</th>
                    <th class="th_deg">email</th>
                    <th class="th_deg">phone</th>
                    <th class="th_deg">Arrival date</th>
                    <th class="th_deg">Leaving date</th>
                    <th class="th_deg">status</th>
                    <th class="th_deg">room title</th>
                    <th class="th_deg">price</th>
                    <th class="th_deg">image</th>
                    <th class="th_deg">delete</th>
                    <th class="th_deg">status update</th>
                </tr>
                    @foreach($data as $data)
                <tr>
                  <td>{{$data->room_id}}</td>
                  <td>{{$data->name}}</td> 
                  <td>{{$data->email}}</td> 
                  <td>{{$data->phone}}</td>
                  <td>{{$data->start_date}}</td> 
                  <td>{{$data->end_date}}</td> 
                  <td>
                    
                    @if($data->status == 'approve')
                    <span style="color: rgb(50, 198, 50)">approved</span>
                    @endif

                    @if($data->status == 'rejected')
                 <span  style="color: rgb(240, 212, 25)">rejected</span>
                @endif

                @if($data->status == 'waiting')
                <span  style="color: rgb(25, 190, 240)">waiting</span>
               @endif


            </td> 

                  <td>{{$data->room_title}}</td> 

                  <td>{{$data->price}}</td> 
                  <td>
                    <img  src="/room/{{$data->room->image}}">
                    </td>
                    <td>
                        <a onclick="return confirm('are you sure to delete');" class="btn btn-danger" href="{{url('delete_booking',$data->id)}}">delete</a>
                        </td> 
                        <td>
                            <span style="padding-bottom: 5px;">
                       <a " class="btn btn-success" href="{{url('aprove_book',$data->id)}}">approve</a>
                    </span>
                       <a " class="btn btn-warning" href="{{url('rejected_book',$data->id)}}">rejected</a>
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