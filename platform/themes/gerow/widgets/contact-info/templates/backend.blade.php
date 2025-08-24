<div class="mb-3">
    <label>{{ __('Address') }}</label>
    <input type="text" class="form-control" name="address" value="{{ $config['address'] ?: theme_option('address') }}">
</div>

<div class="mb-3">
    <label>{{ __('Email') }}</label>
    <input type="text" class="form-control" name="email" value="{{ $config['email'] ?: theme_option('email') }}">
</div>
