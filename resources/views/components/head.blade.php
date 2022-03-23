<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ setting('site.title') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ Voyager::image(setting('site.logo')) }}" rel="icon">
  <link href="{{ asset('Regna/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Regna/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Regna/assets/css/style.css') }}" rel="stylesheet">

  <style>
    #carouselExampleCaptions {
      height: 200px;
    }
    body {
      font-family: "Poppins", sans-serif;
      font-weight: 500; 
    }

  </style>

  @if (App::getLocale() == 'ar')
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap');

      body {
        direction: rtl;
        font-family: 'Almarai', sans-serif !important;
        font-weight: 600 !important;
      }

    </style>
  @endif
  {{ $slot }}
</head>

<body>
