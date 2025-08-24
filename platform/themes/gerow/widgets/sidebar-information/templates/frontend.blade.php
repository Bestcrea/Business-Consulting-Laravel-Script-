<div class="side-info mb-30">
    @if ($address)
        <div class="contact-list mb-30">
            <h4>{{ __('Office Address') }}</h4>
            <p>{!! BaseHelper::clean($address) !!}</p>
        </div>
    @endif

    @if ($phoneNumber)
        <div class="contact-list mb-30">
            <h4>{{ __('Phone Number') }}</h4>
            <p><span dir="ltr">{!! BaseHelper::clean($phoneNumber) !!}</span></p>
        </div>
    @endif

    @if ($email)
        <div class="contact-list mb-30">
            <h4>{{ __('Email Address') }}</h4>
            <p><span dir="ltr">{!! BaseHelper::clean($email) !!}</span></p>
        </div>
    @endif
</div>
