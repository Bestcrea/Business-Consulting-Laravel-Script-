'use strict'
$(document).ready(() => {
    const $shortcodeModal = $('.shortcode-admin-config');

    document.addEventListener('core-shortcode-config-loaded', function() {
        if ($shortcodeModal.find('.shortcode-field-select-style').length > 0) {
            const style = $shortcodeModal.find('.shortcode-field-select-style').val().slice(-1)

            changeStyleShortcode(style)
        }
    })

    $($shortcodeModal).on('change', '.shortcode-field-select-style', (event) => {
        const style = $(event.currentTarget).val().slice(-1)

        changeStyleShortcode(style)
    })

    function changeStyleShortcode(style) {
        $shortcodeModal.find('.shortcode-field-style-item').each(function(index, element) {
            const styles = String($(element).data('styles'))

            if (styles.includes(style)) {
                $(element).removeClass('d-none')
            } else {
                $(element).addClass('d-none')
            }
        })
    }
})
