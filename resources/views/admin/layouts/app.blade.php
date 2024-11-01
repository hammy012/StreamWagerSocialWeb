<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Custom fonts for this template-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet" />

        {{--  <!-- ALERTIFY JS -->  --}}
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

        {{--  <!-- Fonts -->  --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        {{--  <!-- Styles -->  --}}
        {{--  <link rel="stylesheet" href="{{ asset('css/app.css') }}">  --}}
        <link rel="stylesheet" href="{{ asset('css/styleadmin.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
        {{--  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">

          <!-- side bar include -->
          @include('admin.layouts.sidebar')

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">

                    @include('admin.layouts.navigation')

                    @yield('content')

                </div>

                @include('admin.layouts.footer')

            </div>
        </div>


    <!-- ALERTIFY JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Main jQuery -->
    <script src="https://demo.themefisher.com/adrian-bootstrap/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="https://demo.themefisher.com/adrian-bootstrap/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Count Down Js -->
    <script src="https://demo.themefisher.com/adrian-bootstrap/plugins/SyoTimer/jquery.syotimer.min.js"></script>
    <script src="https://demo.themefisher.com/adrian-bootstrap/plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
    <!-- Slick Slider -->
    <script src="./assets/js/slick.min.js"></script>
    <!-- rating star -->
    <script src="https://demo.themefisher.com/adrian-bootstrap/plugins/rating/rating.js"></script>
    <!-- Instagram Feed Js -->
    <script src="https://demo.themefisher.com/adrian-bootstrap/plugins/instafeed-js/instafeed.min.js"></script>
    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="https://demo.themefisher.com/adrian-bootstrap/plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="https://demo.themefisher.com/adrian-bootstrap/js/script.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <!-- Bootstrap JS and Popper.js (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Select2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#options').select2();
            });
        </script>


        {{--  Bootstrap  --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

        {{--  <!-- ALERTIFY JS -->  --}}
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        {{--  <!-- Bootstrap core JavaScript-->  --}}
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        {{--  <!-- Core plugin JavaScript-->  --}}
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
        @php($imagePath = asset('assets/img/img2.jpg'))
        <script>
            $(document).ready(function() {
                // Listen for change event on file input
                $('#customFileEg1').change(function() {
                    // Get the selected file
                    var file = this.files[0];

                    // Check if a file is selected
                    if (file) {
                        // Create a FileReader to read the file content
                        var reader = new FileReader();

                        // Set the callback function when the file is loaded
                        reader.onload = function(e) {
                            // Update the src attribute of the image with the data URL
                            $('#viewer').attr('src', e.target.result);
                        };

                        // Read the file as a data URL
                        reader.readAsDataURL(file);
                    } else {
                        // No file selected, reset the image
                        $('#viewer').attr('src', '{{ $imagePath }}');
                    }
                });
            });
        </script>

        <script>
            <?php
            if (isset($_SESSION['message'])) {
                echo "alertify.set('notifier', 'position', 'top-right');";
                echo "alertify.success('{$_SESSION['message']}');";
                unset($_SESSION['message']); // Unset the session message here
            }
            ?>
        </script>
    </body>
</html>
