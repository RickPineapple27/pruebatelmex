<!DOCTYPE html>
<html lang="en">
<head>
@include('sitio.includes.head')
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
@include('sitio.includes.menu')
</nav>
<br><br><br>
<br><br><br>
<br><br><br>
<!-- Masthead-->
<header class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <img src="assets/img/portfolio/infinitum.png" width="500" height="90"/>
            <br><br>

            <p  class="lead text-muted"> Infinitum Cosamaloapan cuenta con servicio de atencion al cliente
                en linea para atender las necesidades a nivel local de nuetros usuarios.</p>
            <p>
                <br>

                <a href="{{ route('sitio.contactanos')}}" class="btn btn-info my-4">Contratar</a>
            </p>
        </div>
    </div>
</header>
<br><br><br>
<br><br><br>
<br><br><br>

@yield('content')
<!-- Portfolio Section-->

<!-- About Section-->

<!-- Contact Section-->

<!-- Footer-->
<footer class="py-5 my-6 bg-secondary">

@include('sitio.includes.footer')

</footer>
<!-- Copyright Section-->



@include('sitio.includes.scripts')
</body>
</html>
