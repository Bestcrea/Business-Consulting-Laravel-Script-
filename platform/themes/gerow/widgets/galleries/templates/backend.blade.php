<div class="mb-3">
    <label class="form-label" for="galleries-name">{{ __('Name') }}</label>
    <input type="text" id="galleries-name" class="form-control" name="name" value="{{ Arr::get($config, 'name') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="galleries-gallery-id">{{ __('Select gallery') }}</label>
    {!! Form::customSelect('gallery_id', $galleries, Arr::get($config, 'gallery_id'), ['class' => 'form-control select-full', 'id' => 'galleries-gallery-id']) !!}
</div>
