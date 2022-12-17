<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NSC | News Scholarship and Competitive</title>
        <link href="/assets/css/main.css" rel="stylesheet">

        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
        <link rel="manifest" href="assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
        <link href="vendors/prism/prism.css" rel="stylesheet">
        <link href="assets/css/theme.css" rel="stylesheet" />
        <link href="assets/css/user.css" rel="stylesheet" />
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="./style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->


        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{URL::asset('/dashboard/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('/dashboard/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{URL::asset('/dashboard/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('/dashboard/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('/dashboard/aos/aos.css" rel="stylesheet')}}">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- Template Main CSS File -->

      </head>
<body>
@include('layouts.header')
@section('content')
@show
@include('layouts.footer')

<script src="{{url('/code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN')}}" crossorigin="anonymous"></script>
<script src="{{url('/cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q')}}" crossorigin="anonymous"></script>
<script src="{{url('/cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl')}}" crossorigin="anonymous"></script>
<script src="{{url('/cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js')}}"></script>

<script>
$(function(){
    $(".summernote").summernote();
});
</script>
<script>
$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
</script>

</body>
</html>
