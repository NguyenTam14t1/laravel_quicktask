<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ Session::get('websiteLanguage', config('app.locale')) }}">
    <head>
        <title>@lang('lang.title_task')</title>
        {{ Html::style('/css/app.css')}}
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <h4>@lang('lang.lbl_language')</h4>
            <a href="{{ route('switchlanguage', ['en']) }}">{{ trans('lang.eng') }}</a>
            <br/>
            <a href="{{ route('switchlanguage', ['vi']) }}">{{ trans('lang.vi') }}</a>
            <nav class="navbar navbar-default">
            </nav>
        </div>
        @yield('content')
    </body>
</html>
