<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>NaijaMarket - Multi Vendor &amp; Marketplace</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front_assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front_assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front_assets/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front_assets/img/site.webmanifest') }}">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front_assets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/fonts/Linearicons/Linearicons/Font/demo-files/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/plugins/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/plugins/owl-carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/plugins/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/plugins/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/plugins/lightGallery-master/dist/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/plugins/select2/dist/css/select2.min.css') }}">
    <livewire:styles/>
    <link rel="stylesheet" href="{{ asset('front_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/market-place-1.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @stack('css')
</head>

<body>

    @include('layouts.front.inc.header')


    @yield('content')

    @include('layouts.front.inc.footer')

    <script src="{{ asset('front_assets/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/slick/slick/slick.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/slick-animation.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/lightGallery-master/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/sticky-sidebar/dist/sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('front_assets/plugins/gmap3.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options.closeButton = true;
    </script>
    @if(Session::has('message'))
        <script>
          var type = "{{ Session::get('alert-type', 'info') }}";
          switch(type){
              case 'info':
                  toastr.info("{{ Session::get('message') }}");
                  break;

              case 'warning':
                  toastr.warning("{{ Session::get('message') }}");
                  break;

              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;

              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
      </script>
    @endif
    <livewire:scripts/>
    @stack('js')
    <!-- custom scripts-->
    <script src="{{ asset('front_assets/js/main.js') }}"></script>
    <script>
        window.livewire.on('Unauthorized', (postId) => {
            window.location = "/login";
        })

        window.livewire.on('AddedToCart',(product) => {
            toastr.info(product+" Added To Cart")
        })
        
        window.livewire.on('UpdatedCartNow', (product) => {
            toastr.success(product+ " Quantity Updated")
        })

        window.livewire.on('ItemRemoved', (product) => {
            toastr.info(product+" Removed From Cart")
        })
    </script>


</body>

</html>















