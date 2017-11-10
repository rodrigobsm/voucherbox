(function ($) {

    "use strict"; // Start of use strict

    // Configure tooltips for collapsed side navigation
    $('.navbar-sidenav [data-toggle="tooltip"]').tooltip({
        template: '<div class="tooltip navbar-sidenav-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })

    // Toggle the side navigation
    $("#sidenavToggler").click(function (e) {
        e.preventDefault();
        $("body").toggleClass("sidenav-toggled");
        $(".navbar-sidenav .nav-link-collapse").addClass("collapsed");
        $(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
    });

    // Force the toggled class to be removed when a collapsible nav link is clicked
    $(".navbar-sidenav .nav-link-collapse").click(function (e) {
        e.preventDefault();
        $("body").removeClass("sidenav-toggled");
    });

    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function (e) {
        var e0 = e.originalEvent,
            delta = e0.wheelDelta || -e0.detail;
        this.scrollTop += (delta < 0 ? 1 : -1) * 30;
        e.preventDefault();
    });

    // Scroll to top button appear
    $(document).scroll(function () {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });

    // Configure tooltips globally
    $('[data-toggle="tooltip"]').tooltip()

    // Smooth scrolling using jQuery easing
    $(document).on('click', 'a.scroll-to-top', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });

    // Recipients Edit Button
    $(".recipient-edit-btn").on('click', function () {
        var id = $(this).data('id');
        $("#loader").fadeIn('fast');
        $.getJSON("recipients/get/"+id, {}).done(function (data) {
            $("#id_recipient").val(data.id_recipient);
            $("#name").val(data.name);
            $("#email").val(data.email);
            $("#loader").fadeOut('fast');
            $('#formRecipientsModal').modal('show');
        });
    });

    // Recipients New button
    $("#btnRecipientsNew").on('click', function(){
        $("#formRecipients")[0].reset();
    });

    // Recipients form OK button
    $("#formRecipientsModalOk").on('click', function () {
        $("#loader").fadeIn('fast');
        $.ajax({
            type: "POST",
            url: "recipients/set",
            data: $("#formRecipients").serialize(),
            dataType: "json",
            success: function(data) {
                if (data!="1") alert("Error updating/creating record!");
                $("#loader").fadeOut('fast');
                $('#formRecipientsModal').modal('hide');
                window.location.reload();
            },
            error: function() {
                alert('Error updating record.');
                $("#loader").fadeOut('fast');
                $('#formRecipientsModal').modal('hide');
            }
        });
    });

    // Recipients Delete button
    $(".recipient-delete-btn").on('click', function(e) {
        var id = $(this).data('id');
        $('#confirm').modal({}).one('click', '#yes', function(e) {
            $("#loader").fadeIn('fast');
            $.ajax({
                type: "GET",
                url: "recipients/del/"+id,
                success: function(data) {
                    if (data!="1") alert("Error deleting record!");
                    $("#loader").fadeOut('fast');
                    $('#formRecipientsModal').modal('hide');
                    window.location.reload();
                },
                error: function() {
                    alert('Error deleting record.');
                    $("#loader").fadeOut('fast');
                    $('#formRecipientsModal').modal('hide');
                }
            });
        });
    });

})(jQuery); // End of use strict
