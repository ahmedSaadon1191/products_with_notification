<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @include('website.layouts.head')
</head>

<body>

    @if (App::getLocale() == 'ar')
    <div class="page-wrapper rtl">
        @else
        <div class="page-wrapper">
            @endif

            @include('website.layouts.main-header')

            @yield('content')

            @include('website.layouts.footer')

        </div>

        @include('website.layouts.footer-scripts')

</body>
</html>