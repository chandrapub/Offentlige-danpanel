//arrow collapse for read more
$(document).ready(function () {
    $('.collapse-arrow').on('shown.bs.collapse', function () {
        $(this).parent().find('.fa-angle-down')
            .removeClass('fa-angle-down')
            .addClass('fa-angle-up');
    }).on('hidden.bs.collapse', function () {
        $(this).parent().find(".fa-angle-up")
            .removeClass("fa-angle-up")
            .addClass("fa-angle-down");
    });
});