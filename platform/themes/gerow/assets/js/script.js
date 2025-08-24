$(() => {
    'use strict'

    window.Theme = window.Theme || {}

    window.Theme.isRtl = () => {
        return document.body.getAttribute('dir') === 'rtl'
    }

    $(document).on('submit', '.newsletter-form', function (event) {
        event.preventDefault()
        event.stopPropagation()

        let _self = $(event.target)
        let _btn = _self.find('button[type="submit"]')
        $.ajax({
            type: 'POST',
            cache: false,
            url: _self.closest('form').prop('action'),
            data: new FormData(_self.closest('form')[0]),
            contentType: false,
            processData: false,
            beforeSend: () => {
                _btn.addClass('button-loading')
                _btn.attr('disable')
            },
            success: (res) => {
                if (!res.error) {
                    _self.closest('form').find('input[type=email]').val('')
                    Theme.showSuccess(res.message)
                } else {
                    Theme.handleError(res.message)
                }
            },
            error: (res) => {
                Theme.handleError(res)
            },
            complete: () => {
                if (typeof refreshRecaptcha !== 'undefined') {
                    refreshRecaptcha()
                }
                _btn.removeClass('button-loading')
                _btn.removeAttr('disable')
            },
        })
    })

    $(document).on('submit', '.cons-contact-form', function (event) {
        event.preventDefault()
        event.stopPropagation()

        const $button = $(this).find('button[type="submit"]')

        $.ajax({
            type: 'POST',
            cache: false,
            url: $(this).closest('form').prop('action'),
            data: new FormData($(this).closest('form')[0]),
            contentType: false,
            processData: false,
            beforeSend: () => {
                $button.addClass('button-loading')
                $button.prop('disabled', true)
            },
            success: ({ error, message }) => {
                if (!error) {
                    $(this).closest('form').find('input[type=text]').val('')
                    $(this).closest('form').find('input[type=email]').val('')
                    $(this).closest('form').find('textarea').val('')
                    Theme.showSuccess(message)
                } else {
                    Theme.showError(message)
                }
            },
            error: (error) => {
                Theme.handleError(error)
            },
            complete: () => {
                if (typeof refreshRecaptcha !== 'undefined') {
                    refreshRecaptcha()
                }

                $button.removeClass('button-loading')
                $button.prop('disabled', false)
            },
        })
    })

    $(document).on('submit', '#request-quote-form', function (event) {
        event.preventDefault()

        const $form = $(this)
        const $button = $(this).find('button[type="submit"]')

        $.ajax({
            url: $form.prop('action'),
            method: 'POST',
            data: $form.serialize(),
            beforeSend: () => {
                $button.addClass('button-loading')
            },
            success: ({ error, message }) => {
                if (error) {
                    Theme.showError(message)

                    return
                }

                Theme.showSuccess(message)

                $form.find('input[type="text"], input[type="number"], input[type="email"], select, textarea').val('')
            },
            error: (error) => {
                Theme.handleError(error)
            },
            complete: () => {
                $button.removeClass('button-loading')
            },
        })
    })
})
