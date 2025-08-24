<section class="inner-contact-area pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center">
            @if ($image = $shortcode->image)
                <div class="col-lg-6">
                    <div class="inner-contact-img">
                        {{ RvMedia::image($image, $shortcode->title) }}
                    </div>
                </div>
            @endif
            <div class="col-lg-6">
                <div class="inner-contact-info">
                    @if ($title = $shortcode->title)
                        <h2 class="title">{{ $title }}</h2>
                    @endif

                    @foreach ($tabs as $tab)
                        <div class="contact-info-item">
                            <h5 class="title-two">{{ $tab['title'] }}</h5>
                            <ul class="list-wrap">
                                <li>
                                    {!! BaseHelper::clean($tab['address']) !!}
                                </li>
                                <li dir="ltr">{{ $tab['phone'] }}</li>
                                <li dir="ltr">{{ $tab['email'] }}</li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
