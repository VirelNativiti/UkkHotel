<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- JavaScript Bundle with Popper  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My style -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="/img/logo.jpg">

    <title>Great Hotel | {{ $title }}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Great Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/kontak">Contact us</a>
                    </li>
                    @if (Route::has('Register'))
                    
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/tamu">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Facility") ? 'active' : '' }}" href="/fasilitas">Facility</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Room") ? 'active' : '' }}" href="/kamarr">Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Print") ? 'active' : '' }}" href="/cetak">Print</a>
                    </li>
                    @endguest
                </ul>
                <ul class="navbar-nav ms-auto">
                    @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link active btn btn-primary"><i class="bi bi-box-arrow-in-right"></i>&nbsp;Login</a>
                    </li>
                    @if (Route::has('Register'))
                    @endif

                    @else
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-left"></i>&nbsp;Logout</button>
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('konten')
    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container px-5">
            <p class="m-0 text-center text-white small">Copyright &copy; Great Hotel 2022</p>
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
