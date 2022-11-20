<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAGOPS</title>
    {{-- {% block stylesfirst %}{% endblock %} --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/templates/dist/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/templates/dist/assets/vendors/iconly/bold.css">
    {{-- {% block styles %}{% endblock %} --}}
    <link rel="stylesheet" href="/templates/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/templates/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/templates/dist/assets/css/app.css">
    <link rel="shortcut icon" href="/templates/dist/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            {{-- {% include "layouts/sidebar.html" %} --}}
            @include('layout.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @yield('content')
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/templates/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/templates/dist/assets/js/bootstrap.bundle.min.js"></script>
    {{-- {% block js %}{% endblock %} --}}
    <script src="/templates/dist/assets/js/main.js"></script>
    <script src="/templates/dist/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/templates/dist/assets/js/pages/dashboard.js"></script>
</body>

</html>
