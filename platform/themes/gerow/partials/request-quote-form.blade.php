<form method="post" action="{{ route('portfolio.request-quote') }}" id="request-quote-form" class="mb-4">
    @csrf
    <div class="row align-items-center">
        <div class="col-lg-12">
            <div class="form-grp">
                <input type="text" name="name" class="form-control" placeholder="{{ __('Your name') }}">
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-grp">
                <input type="email" name="email" class="form-control" placeholder="{{ __('Your email address') }}">
            </div>
        </div>

        @foreach($customFields as $customField)
            @if($customField->type == Botble\Portfolio\Enums\CustomFieldType::TEXT)
                <div class="col-md-12">
                    <div class="form-grp">
                        <input type="text" class="form-control" name="custom_fields[{{ $customField->getKey() }}]" placeholder="{{ $customField->name }}">
                    </div>
                </div>
            @elseif($customField->type == Botble\Portfolio\Enums\CustomFieldType::NUMBER)
                <div class="col-md-12">
                    <div class="form-grp">
                        <input type="number" class="form-control" name="custom_fields[{{ $customField->getKey() }}]" placeholder="{{ $customField->name }}">
                    </div>
                </div>
            @elseif($customField->type == Botble\Portfolio\Enums\CustomFieldType::TEXTAREA)
                <div class="col-md-12">
                    <div class="form-grp">
                        <textarea class="form-control" name="custom_fields[{{ $customField->getKey() }}]" rows="5" placeholder="{{ $customField->name }}"></textarea>
                    </div>
                </div>
            @elseif($customField->type == Botble\Portfolio\Enums\CustomFieldType::DROPDOWN)
                @continue(! $customField->options->filter(fn ($option) => ! empty($option->label)))
                <div class="col-md-12">
                    <div class="form-grp">
                        <select class="form-select" name="custom_fields[{{ $customField->getKey() }}]" aria-label="{{ $customField->name }}">
                            <option value="">{{ $customField->name }}</option>
                            @foreach($customField->options as $option)
                                <option value="{{ $option->getKey() }}">{{ $option->label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @elseif($customField->type == Botble\Portfolio\Enums\CustomFieldType::CHECKBOX)
                @continue(! $customField->options->filter(fn ($option) => ! empty($option->label)))
                <div class="col-md-12 mb-10">
                    <div class="mb-3">
                        <strong class="font-sm-bold color-grey-900">{{ $customField->name }}</strong>
                        <div class="row mt-10 box-cb-form">
                            @foreach($customField->options as $option)
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-check">
                                        @php($id = Str::kebab("{$customField->name}-{$loop->index}"))
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="custom_fields[{{ $customField->getKey() }}][]"
                                            value="{{ $option->value }}"
                                            id="cb-{{ $id }}"
                                        />
                                        <label for="cb-{{ $id }}">
                                            {{ $option->label }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        <div class="col-lg-12">
            <div class="form-grp">
                <textarea class="form-control" name="message" rows="4" placeholder="{{ __('Message / Note') }}"></textarea>
            </div>
        </div>

        @if (is_plugin_active('captcha') && Captcha::isEnabled())
            <div class="col-lg-12">
                <div class="mb-3">
                    {!! Captcha::display() !!}
                </div>
            </div>
        @endif

        <div class="col-lg-12">
            <button type="submit" class="btn btn-brand-1-big mr-25">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z"></path>
                </svg>
                {{ __('Get a quote') }}
            </button>
            @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                <a class="btn btn-link-medium" href="{{ $buttonUrl }}">
                    {{ $buttonLabel }}
                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            @endif
        </div>
    </div>
</form>
