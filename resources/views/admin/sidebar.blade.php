<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" style="border-radius: 30px" href="images/hotel.jpg"/>
<div class="d-flex align-items-stretch">

      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">admin Achraf</h1>
        
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('/')}}"> <i class="icon-home"></i>Home </a></li>
              
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-bed">></i>hotel rooms </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_room')}}">Add room</a></li>
                    <li><a href="{{url('view_room')}}">view rooms</a></li>
                   
                  </ul>
                </li>
                <li>
                  <a href="{{url('/bookings')}}"> <i class="fas fa-calendar-check"></i>bookings </a>
                </li>
                <li>
                  <a href="{{url('view_gallary')}}"> <i class="fas fa-camera"></i>gallary </a>
                </li>
                <li>
                  <a href="{{url('all_messages')}}"> <i class="fas fa-envelope">></i>message </a>
                </li>
              
        </ul>
      </nav>