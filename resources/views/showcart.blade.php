<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logopic.jpg" type="image/jpg" sizes="20x16">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    <title>MJ Eats</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
       
        #table1{
            display: flex;
            overflow: hidden;
        }
        .carticon
        {
            height: 25px;
            width:30px;
            margin-right:3px;
            
        }
        </style>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img class="logo" src="assets/images/eatspic.jpg" >
                            <a href="" class="menu-trigger">
                                <span>Menu</span>
                            </a>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}" class="active">Home</a></li>
                            {{-- <li class="scroll-to-section"><a href="{{url('/redirects')}}">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">Menu</a></li>
                            <li class="scroll-to-section"><a href="{{url('/redirects')}}">Chefs</a></li> 
                            {{-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> --}}
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 

                            <li class="scroll-to-section">
                                @auth

                                <a href="{{url('/showcart', Auth::user()->id)}}">
                                    <ion-icon class="carticon"name="cart-outline"></ion-icon>Cart[{{$count}}]
                                </a>
                                @endauth
                            
                                {{-- @guest
                                <li class="text-sm text-gray-700 dark:text-gray-500 underline">Cart[]</li>    
                                @endguest </a> --}}
                            
                            </li> 
                            <li>

                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <li><x-app-layout>

                                        </x-app-layout>
                                        </li>
                                    @else
                                      <li>  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif

                            </li>

                        </ul>        
                        {{-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> --}}
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

 
<div id="top">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
    </div>
    @endif
    <div id="table1">
     
        <table align="center" bgcolor="white" height="40 !important" width="200">
            
           
        </table>
     <table align="center"  bgcolor="skyblue"  height="40 !important" width="1200"  style="padding:30px;border:3px solid white">
        <tr align="center"  bgcolor="#2E86C1" >
            <th style="padding:30px;">Food Name</th>
            <th style="padding:30px">Price</th>
            <th style="padding:30px">quantity</th>
            
          
        </tr>

<form  action="{{url('/orderconfirm')}}" method="POST">
            @csrf
            
        @foreach($data as $data)
        <tr align="center"  style="padding:30px;border:3px solid white">
            <td style="padding:30px" ><input type="text" name="foodname[]" value="{{$data->Title}}" hidden="">{{$data->Title}}</td>
            <td style="padding:30px" ><input type="text" name="price[]" value="{{$data->Price}}" hidden="">{{$data->Price}}</td>
            <td style="padding:30px" ><input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">{{$data->quantity}}</td>
        </tr>
        @endforeach
    </table>
    <table align="center" bgcolor="skyblue" height="40 !important" width="100">
        <tr align="center" bgcolor="#2E86C1" style="padding:30px;border:3px solid white">
            <th style="padding:30px;">Action</th>
        </tr>
        @foreach($data2 as $data2)
        <tr align="center"  style="padding:30px;border:3px solid white" style="padding:30px;border:3px solid white">
        <td  style="padding:23px;margin-bottom:43px"><a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a></td>
        </tr>
        @endforeach
    </table>
    <table align="center" bgcolor="white" height="40 !important" width="150">      
    </table>
    </div>

    <div align="center" style="padding:10px;">
        <button class="btn btn-primary" style="background-color: blue" type="button" id="order">Order Now</button>
    </div>

    <div id="appear" align="center" style="padding:10px;display:none">
        <div align="center" style="padding:10px;">
        <label>Name</label>
        <input type="text" name="name" placeholder="Name">    
    </div>
    <div align="center" style="padding:10px;">
        <label>Phone</label>
        <input type="number" name="phone" placeholder="Phone Number">    
    </div>
    <div align="center" style="padding:10px;">
        <label>Address</label>
        <input type="text" name="address" placeholder="Address">    
    </div>
    <div align="center" style="padding:10px;">
       
        <input class="btn btn-success" style="background-color: green" type="submit" value="Confirm Order">    
        <button id="close" type="button" style="background-color: red" class="btn btn-danger">Close</button>
    </div>
    
    
    </div>

</form>

</div>

       <script type="text/javascript">
       $("#order").click(
           function()
           {
                $("#appear").show();
           }
       );

       $("#close").click(
           function()
           {
                $("#appear").hide();
           }
       );

           </script>


        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

        <!-- Bootstrap -->
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    
        <!-- Plugins -->
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/accordions.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/imgfix.min.js"></script> 
        <script src="assets/js/slick.js"></script> 
        <script src="assets/js/lightbox.js"></script> 
        <script src="assets/js/isotope.js"></script> 
        
        <!-- Global Init -->
        <script src="assets/js/custom.js"></script>
        <script>
    
            $(function() {
                var selectedClass = "";
                $("p").click(function(){
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                    $("#portfolio div").not("."+selectedClass).fadeOut();
                setTimeout(function() {
                  $("."+selectedClass).fadeIn();
                  $("#portfolio").fadeTo(50, 1);
                }, 500);
                    
                });
            });
    
        </script>
      </body>
    </html>