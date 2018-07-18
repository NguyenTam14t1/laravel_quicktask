<!-- resources/views/common/errors.blade.php -->

@if (count($errors))
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>@lang('lang.error')</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('alertError'))
    <div class="alert alert-danger">
        <strong>{{ session('alertError') }}</strong>
    </div>
@endif
