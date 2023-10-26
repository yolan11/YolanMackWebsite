<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slider</title>
    @vite('resources/css/slider.css')
</head>
<body class="">
<div class="slider">
    <div class="slide-track">
        <!-- 7 first slides -->
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/behringerLogo.svg') }}" alt="" class="w-32">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/dbtechnologiesLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/electroVoiceLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/pioneerdjLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/Prodipe.png') }}" alt="" class="w-56">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/sonoventeLogo.svg') }}" alt="" class="w-40">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/thomannLogo.svg') }}" alt="">
        </div>


        <!-- 7 first slides (doubled)-->

        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/behringerLogo.svg') }}" alt="" class="w-32">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/dbtechnologiesLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/electroVoiceLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/pioneerdjLogo.svg') }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/Prodipe.png') }}" alt="" class="w-56">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/sonoventeLogo.svg') }}" alt="" class="w-40">
        </div>
        <div class="slide">
            <img src="{{ URL('images/logoStuffbrand/thomannLogo.svg') }}" alt="">
        </div>
    </div>
</div>


</body>
</html>

