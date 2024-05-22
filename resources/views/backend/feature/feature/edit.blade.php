<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset("lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">
    <link href="{{ asset("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css") }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ route('all.feature') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class=""></i>Admin panel</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
<img class="rounded-circle" src="{{ asset('img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                                   <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Qodirov Abrorbek</h6>
                        <span>Admin</span>
                    </div>
                </div>
          <div class="navbar-nav w-100">
                    <a href="{{ route('admin') }}" class="nav-item nav-link "><i class="fa fa-home"></i>Home</a>
                                 <a href="{{ route('all.main') }}" class="nav-item nav-link "><i class="fa fa-cog" aria-hidden="true"></i>Main</a>
                    <a href="{{ route('all.pricing') }}" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Pricing</a>
                    <a href="{{ route('all.feature') }}" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Features</a>
                    <a href="{{ route('message') }}" class="nav-item nav-link"><i class="fas fa-comments"></i>Message</a>
                    <a href="{{ route('adminview.page') }}" class="nav-item nav-link"><i class="fa fa-user-alt"></i>Client</a>

                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>

                </div>
                 </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                {{-- <a href="{{ route('admin') }}" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a><br> --}}

                <form action="{{ route('feature.update' , $features->id) }}" method="POST" class="col-12 mt-5">
                       @csrf

               <div class="container">
                 <center>
                 <h1>Feature update</h1>
                 </center><br><br>

         <div class="row">
    <div class="col-10">
     <input type="text" class="form-control" name="name" placeholder="Your pricing name" value="{{ $features->name }}"><br>
     @error('name')
     <span class="text-danger">{{ $message }}</span>
      @enderror
    <input type="text" class="form-control" name="about" placeholder="Your pricing title" value="{{ $features->about }}"><br>
  @error('about')
     <span class="text-danger">{{ $message }}</span>
      @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>

</form>


            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->








        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset("lib/chart/chart.min.js") }}"></script>
    <script src="{{ asset("lib/easing/easing.min.js") }}"></script>
    <script src="{{ asset("lib/waypoints/waypoints.min.js") }}"></script>
    <script src="{{ asset("lib/owlcarousel/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("lib/tempusdominus/js/moment.min.js") }}"></script>
    <script src="{{ asset("lib/tempusdominus/js/moment-timezone.min.js") }}"></script>
    <script src="{{ asset("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js") }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset("js/main.js") }}"></script>
</body>

</html>
