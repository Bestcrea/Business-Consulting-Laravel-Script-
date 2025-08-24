@if(is_plugin_active('portfolio'))
    <div class="services-widget">
        @if ($title = Arr::get($config, 'title'))
            <h4 class="sw-title">{{ $title }}</h4>
        @endif
        <div class="services-widget-form">
            <form id="request-quote-form" method="post" action="{{ route('portfolio.request-quote') }}" >
                @csrf
                <div class="form-grp">
                    <input type="text" name="name" placeholder="{{ __('Your Name') }}">
                </div>
                <div class="form-grp">
                    <input type="email" name="email" placeholder="{{ __('E-mail Address') }}">
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
                                <select class="form-select" name="custom_fields[{{ $customField->getKey() }}]">
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
                <div class="form-grp">
                    <textarea name="message" placeholder="{{ __('Type Your Message') }}"></textarea>
                </div>
                @if (is_plugin_active('captcha') && Captcha::isEnabled())
                    <div class="form-grp">
                        {!! Captcha::display() !!}
                    </div>
                @endif
                <button type="submit" class="submit-btn">{{ __('Send Message') }}</button>
            </form>
        </div>
    </div>
@endif
