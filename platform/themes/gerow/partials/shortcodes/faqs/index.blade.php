<section class="pt-50 pb-50">
    <div class="container">
        @foreach($categories as $key => $category)
            <div class="pt-30 pb-30">
                <div class="mb-30">
                    <div class="section-title-two mb-20 tg-heading-subheading animation-style2">
                        <h2 class="title tg-element-title">{{ $category->name }}</h2>
                    </div>

                    @if($category->description)
                        <div>{!! BaseHelper::clean(nl2br($category->description)) !!}</div>
                    @endif
                </div>

                <div class="accordion-wrap-three">
                    <div class="accordion" id="accordion-faqs-{{ $key }}">
                        <div class="row row-cols-1 row-cols-md-2 g-2">
                            @foreach ($category->faqs as $faq)
                                <div class="col p-0 px-2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button
                                                class="accordion-button collapsed"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse-{{ $key }}-{{ $loop->index }}"
                                                type="button"
                                                aria-expanded="false"
                                                aria-controls="collapse-{{ $key }}-{{ $loop->index }}"
                                            >
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div
                                            class="accordion-collapse collapse"
                                            id="collapse-{{ $key }}-{{ $loop->index }}"
                                            data-bs-parent="#accordion-faqs-{{ $key }}"
                                        >
                                            <div class="accordion-body">
                                                {!! BaseHelper::clean($faq->answer) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
