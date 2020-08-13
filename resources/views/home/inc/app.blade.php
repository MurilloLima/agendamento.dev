<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exôdo | Technology</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/home/image/icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/home/image/icon.png') }}" />
    <meta name="description"
        content="Somos referência no mercado financeiro com nosso propósito de melhorar a vida das pessoas. Encontre as melhores oportunidades para investir.">
    <link rel="stylesheet" href="{{ asset('assets/home/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/fontawesome-5.8.1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/lity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/style-2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/style-3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/style-4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/style-5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/style-6.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/style-7.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/responsive.css') }}">

</head>

<body>
    <div class="preloader"></div>
    @include('home.inc.nav')

    @yield('content')

    @include('home.inc.footer')

    <script src="{{ asset('assets/home/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/swiper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/jquery.sticky.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/scrolltotop.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/contact-form-script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/jquery.ajaxchimp.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/lity.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/smooth-scroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/slicknav-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/jquery.barChart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/jquery.barfiller.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/jquery.lineProgressbar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/jquery-jvectormap-2.0.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/maps.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/home/js/main.js') }}" type="text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="|49" defer=""></script>
    <script src="{{ asset('js/jquery.mask.js')}}"></script>
    <script>
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');

        // $('.phone_with_ddd').mask('(99) 9 9999-9999'); //(99)99999-9999
        var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

        $('.phone_with_ddd').mask(SPMaskBehavior, spOptions);
    
        $('.phone_us').mask('(000) 0000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
        $('.money2').mask("#.##0,00", {reverse: true});
        $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
            }
        });
        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {reverse: true});
        $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
        $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
        $('.fallback').mask("00r00r0000", {
            translation: {
                'r': {
                pattern: /[\/]/,
                fallback: '/'
                },
                placeholder: "__/__/____"
            }
            });
        $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
        
    </script>

</body>

</html>