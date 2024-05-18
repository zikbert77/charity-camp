$(document).ready(function() {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    if ($(document).find('.splide').length) {
        let splide = new Splide('.splide', {
            perPage: $(window).width() < 600 ? 1 : 3,
            perMove: 1,
            rewind : true,
        } );

        splide.mount();
    }

    $(document).on('click', '.action-copy-wallet-address', function () {
        let $this = $(this);
        let text = $this.parent().find('.link').text();

        try {
            let $temp = $("<input>");
            $("body").append($temp);
            $temp.val(text).select();
            document.execCommand("copy");
            $temp.remove();

            let $copyIcon = $this.find('i');

            $copyIcon.removeClass('icofont-duotone icofont-duplicate-alt');
            $copyIcon.addClass('icofont-tick-mark');
            setTimeout(function() {
                $copyIcon.addClass('icofont-duotone icofont-duplicate-alt');
            }, 2500);
        } catch (e) {
            console.error(e.error)
        }
    })

    $(document).on('click', '.action-change-language', function () {
        $.ajax({
            url: '/change-language',
            method: 'POST',
            data: {
                key: $(this).data('language-id')
            },
            success: function (response) {
                window.location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(jqXHR, textStatus)
                alert('Error. Please try again later');
            }
        });
    })
});