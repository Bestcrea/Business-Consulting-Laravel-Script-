<div class="mb-3">
    <label class="form-label" for="site-information-hotline">{{ __('Title') }}</label>
    <input type="text" id="site-information-title" class="form-control" name="title" value="{{ Arr::get($config, 'title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Logo') }}</label>
    {!! Form::mediaImage('logo', Arr::get($config, 'logo')) !!}

    <x-core::alert type="info" class="small mt-2">
        {{ __("If you don't set it, it will be inherited from Theme options -> Logo.") }}
    </x-core::alert>
</div>

<div class="mb-3">
    <label class="form-label" for="site-information-description">{{ __('Description') }}</label>
    <textarea rows="3" id="site-information-description" class="form-control" name="description">{{ Arr::get($config, 'description') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="site-information-hotline">{{ __('Hotline') }}</label>
    <input type="text" id="site-information-hotline" class="form-control" name="hotline" value="{{ Arr::get($config, 'hotline') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="site-information-description">{{ __('Address') }}</label>
    <textarea rows="3" id="site-information-address" class="form-control" name="address">{{ Arr::get($config, 'address') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="site-information-opening_hours">{{ __('Opening hours') }}</label>
    <textarea rows="3" id="site-information-opening_hours" class="form-control" name="opening_hours">{{ Arr::get($config, 'opening_hours') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label" for="newsletter-with-social-links">{{ __('With social links') }}</label>
    <x-core::form.select id="newsletter-with-social-links" name="with_social_links">
        <option value="yes" {{ Arr::get($config, 'with_social_links', 'no') == 'yes' ? 'selected' : '' }}>{{ __('Yes') }}</option>
        <option value="no" {{ Arr::get($config, 'with_social_links', 'no') == 'no' ? 'selected' : '' }}>{{ __('No') }}</option>
    </x-core::form.select>

    <x-core::alert type="info" class="small">
        {{ __('Please go to Theme options -> Social links to setup social links.') }}
    </x-core::alert>
</div>
