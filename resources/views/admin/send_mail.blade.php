<!DOCTYPE html>
<html>
  <head>
    <title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" style="border-radius: 30px" href="images/hotel.jpg"/>
    
     <base href="/public">

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
   @include('admin.css')
  </head>
  <body>
   @include('admin.header')
   
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


        <center>

        <h1 style="font-size: 30px">mail send to {{$data->name}}</h1>

        
        <form action="{{url('mail',$data->id)}}" method="post">
            @csrf
        <div class="div_deg">
          <label>greeting</label>
          <input type=text name="greeting">
        </div>
        <div class="div_deg" >
          <label>mail body</label>
  
         <textarea name="body"></textarea>
        </div>
        <div class="div_deg">
            <label>action text</label>
            <input type="text" name="action_text">
        </div>
        <div class="div_deg">
            <label>action url</label>
            <input type="text" name="action_url">
        </div>
        <div class="div_deg">
            <label>end line</label>
            <input type="text" name="endline">
        </div>
            
  <div class="div_deg">
  <input class="btn btn-primary" type="submit" value="send email">
  
  </div>
  
  </form>
  
        </center>


          </div>
        </div>
      </div>

        @include('admin.footer')

  </body>
</html>