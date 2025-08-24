<div class="accordion-wrap-three">
    <div
        class="accordion"
        id="accordionExample"
    >
        @for ($i = 0; $i < count($tabs); $i++)
            @if ($tab = $tabs[$i])
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $i }}"
                            type="button"
                            aria-expanded="false"
                            aria-controls="collapse{{ $i }}"
                        >
                            {{ $tab['title'] }}
                        </button>
                    </h2>
                    <div
                        class="accordion-collapse collapse"
                        id="collapse{{ $i }}"
                        data-bs-parent="#accordionExample"
                        style=""
                    >
                        <div class="accordion-body">
                            <p>{!! BaseHelper::clean($tab['description']) !!}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endfor
    </div>
</div>
