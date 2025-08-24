<div class="mb-3">
    <label class="form-label" for="sidebar-information-address">{{ __('Address') }}</label>
    <textarea id="sidebar-information-address" class="form-control" name="address">{{ Arr::get($config, 'address') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="sidebar-information-phone-number">{{ __('Phone number') }}</label>
    <textarea id="sidebar-information-phone-number" class="form-control" name="phone_number">{{ Arr::get($config, 'phone_number') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="sidebar-information-phone-email">{{ __('Email') }}</label>
    <textarea id="sidebar-information-phone-email" class="form-control" name="email">{{ Arr::get($config, 'email') }}</textarea>
</div>
