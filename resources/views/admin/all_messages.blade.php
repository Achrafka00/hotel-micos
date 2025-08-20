
<!DOCTYPE html>
<html>
  <head> 
    <title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" style="border-radius: 30px" href="images/hotel.jpg"/>
    <style>
      

        .table_deg
        {
         border: 2px solid white;
         margin: auto;
         width:80%; 
         text-align:center;
         margin-top:40px;
        }
        .th_deg
        {
            background-color:rgb(251, 35, 154);
            padding:15px;
            color: aliceblue
        }
        tr{
            border:3px solid rgb(80, 147, 255);
        }
        td{
            padding:10px;
        }
     </style>



   @include('admin.css')
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
                    <th class="th_deg">name</th>
                    <th class="th_deg">email</th>
                    <th class="th_deg">phone</th>
                    <th class="th_deg">message</th>
                    <th class="th_deg">send email</th>
                   
                </tr>
                @foreach($data as $data)
                <tr>
                   
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td> 
                  <td>{{$data->phone}}</td> 
                  <td>{{$data->message}}</td> 
                    <td> 
                    <a class="btn btn-success" href="{{url('send_mail',$data->id)}}">send email  </a>
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