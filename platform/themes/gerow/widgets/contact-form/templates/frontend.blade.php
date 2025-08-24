@if(is_plugin_active('contact'))
    @php
        if (theme_option('preloader_enabled', true)) {
            Theme::asset()->usePath()->add('aos-css', 'plugins/aos/aos.css');
            Theme::asset()->container('footer')->usePath()->add('aos-js', 'plugins/aos/aos.js');
        }
    @endphp
    <section class="request-area-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="request-content-two">
                        @if ($name = Arr::get($config, 'name'))
                            <div class="section-title-two white-title mb-15 tg-heading-subheading animation-style3">
                                <h2 class="title tg-element-title">{!! BaseHelper::clean($name) !!}</h2>
                            </div>
                        @endif

                        @if ($description = Arr::get($config, 'description'))
                            <p>{!! BaseHelper::clean($description) !!}</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="request-form-wrap">
                        {!! $form->renderForm() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="request-shape-wrap">
            @if ($bgImage1 = Arr::get($config, 'background_image_1'))
                {{ RvMedia::image($bgImage1, $name) }}
            @endif

            @if ($bgImage2 = Arr::get($config, 'background_image_2'))
                {{ RvMedia::image($bgImage2, $name, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => 200]) }}
            @endif
        </div>
    </section>
@endif
