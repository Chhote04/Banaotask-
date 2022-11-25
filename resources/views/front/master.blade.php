<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Task 1 - Login System </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap')}}" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row py-1 px-xl-5" style="background-color:#f7f8fa">
            <div class="col-lg-6 d-none d-lg-block">
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        @if (Auth::check())
                        <span class="btn " style="background-color: #2a96ff; color:#ffffff;">{{ Auth::user()->name }}</span>
                    </div>
                    <div class="btn-group mx-2">

                        <li><a href="{{ url('logout') }}" class="btn" style="background-color: #2a96ff; color:#ffffff;">Logout</a></li>
                            @else
                            <li><a href="{{ url('/login') }}" class="btn" style="background-color:#2a96ff; color: #f7f8fa;">Signup/Login</a></li>
                            @endif
                    </div>
                    <div class="btn-group">

                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-blue rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-blue rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5 d-none d-lg-flex" style="background-color:#f7f8fa;">

    </div>
    <!-- Topbar End -->

@yield('content')

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{url('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('lib/easing/easing.min.js')}}"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{url('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{url('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('js/main.js')}}"></script>
    <script>
        function confirmation(){
            if($('.stripe').is(':checked') || $('.cod').is(':checked') || $('.paytm').is(':checked') || $('.Instamojo').is(':checked') || $('.razorpay').is(':checked') )
			{
				// alert('checked');
			}
        else
        {
        	alert('Please select payment method');
            return false;
        }
        }
    </script>
</body>

</html>