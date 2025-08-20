
<!DOCTYPE html>
<html>
  <head> 
    <title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" style="border-radius: 30px" href="images/hotel.jpg"/>
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
<h1 style="font-size: 40px;font-weight:bolder;color:aliceblue">gallary</h1><br><br>
<div class="row">
@foreach ($gallary as $gallary)
<div class="col-md-4">

<img  style="width: 300px!important;height:200px!important" src="/gallary/{{$gallary->image}}" ><br><br>


<a  class="btn btn-danger" href="{{url('delete_gallary',$gallary->id)}}">delete image</a><br><br>

</div>
    
@endforeach
</div>
<form action="{{url('upload_gallary')}}" method="post" enctype="multipart/form-data">
    @csrf
<div style="padding: 30px;">
    <label style="color: aliceblue;font-weight:bold">Uplode Image:</label><br> 
<input type="file" name="image" required>
    

<input  class="btn btn-primary"  type="submit" name="add image">
    
</div>

</form>
</center>





















      </div>
    </div>
</div>
        @include('admin.footer')

  </body>
</html>