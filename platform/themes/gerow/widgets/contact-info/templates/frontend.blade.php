<div class="col-lg-7">
    <div class="header-top-left">
        <ul class="list-wrap">
            @if ($address = Arr::get($config, 'address'))
                <li><i class="flaticon-location"></i>{!! BaseHelper::clean($address) !!}</li>
            @endif

            @if ($email = Arr::get($config, 'email'))
                <li><i class="flaticon-mail"></i><a href="mailto:{{ $email }}">{!! BaseHelper::clean($email) !!}</a></li>
            @endif
        </ul>
    </div>
</div>
