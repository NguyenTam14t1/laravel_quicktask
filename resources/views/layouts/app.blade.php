<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ Session::get('websiteLanguage', config('app.locale')) }}">
    <head>
        <title>@lang('lang.title')</title>
        {{ Html::style('/css/app.css')}}
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <h4>@lang('lang.language')</h4>
            <a href="/switchlanguage/en">{{ trans('lang.eng') }}</a>
            <br/>
            <a href="/switchlanguage/vi">{{ trans('lang.vi') }}</a>
            <nav class="navbar navbar-default">
            </nav>
        </div>
        @yield('content')
    </body>
</html>
