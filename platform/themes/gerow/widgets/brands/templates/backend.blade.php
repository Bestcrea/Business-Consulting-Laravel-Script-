@for($i = 1; $i < 10; $i++)
    <div class="border p-2 mb-2">
        <h6>{{ __('Brand :number', ['number' => $i]) }}</h6>
        <div class="mb-3">
            <label class="form-label">{{ __('Name :number', ['number' => $i]) }}</label>
            <input type="text" class="form-control" name="name_{{ $i }}" value="{{ Arr::get($config, "name_$i") }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Link :number', ['number' => $i]) }}</label>
            <input type="text" class="form-control" name="link_{{ $i }}" value="{{ Arr::get($config, "link_$i") }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Logo :number', ['number' => $i]) }}</label>
            {!! Form::mediaImage("logo_$i", Arr::get($config, "logo_$i")) !!}
        </div>
    </div>
@endfor
