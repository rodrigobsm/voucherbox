// Call the dataTables jQuery plugin

$(document).ready(function () {

    /************
     * RECIPIENTS PAGE Handlers
     */

    $('#RecipientsTable').DataTable({
        "ajax": 'recipients/table',
        "fnDrawCallback": function (oSettings, json) {
            // Every ajax update on this table, refresh DOM handlers

            // Form OK button handler
            $("#formRecipientsModalOk").off('click');
            $("#formRecipientsModalOk").on('click', function () {
                if ($("#formRecipients")[0].checkValidity()) {
                    $("#loader").fadeIn('fast');
                    $.ajax({
                        type: "POST",
                        url: "recipients/set",
                        data: $("#formRecipients").serialize(),
                        dataType: "json",
                        success: function (data) {
                            if (data != "1") alert("Error updating/creating record!");
                            $("#loader").fadeOut('fast');
                            $('#formRecipientsModal').modal('hide');
                            $('#RecipientsTable').DataTable().ajax.reload();
                        },
                        error: function () {
                            alert('Error sending request.');
                            $("#loader").fadeOut('fast');
                            $('#formRecipientsModal').modal('hide');
                        }
                    });
                } else {
                    $("#formRecipients")[0].reportValidity();
                }
            });

            // Edit Button Handler
            $(".recipient-edit-btn").off('click');
            $(".recipient-edit-btn").on('click', function () {
                var id = $(this).data('id');
                $("#loader").fadeIn('fast');
                $.getJSON("recipients/get/" + id, {}).done(function (data) {
                    $("#id_recipient").val(data.id_recipient);
                    $("#name").val(data.name);
                    $("#email").val(data.email);
                    $("#loader").fadeOut('fast');
                    $('#formRecipientsModal').modal('show');
                });
            });

            // Delete button Handler
            $(".recipient-delete-btn").off('click');
            $(".recipient-delete-btn").on('click', function (e) {
                var id = $(this).data('id');
                $('#confirm').modal({}).one('click', '#yes', function (e) {
                    $("#loader").fadeIn('fast');
                    $.ajax({
                        type: "GET",
                        url: "recipients/del/" + id,
                        success: function (data) {
                            if (data != "1") alert("Error deleting record!");
                            $("#loader").fadeOut('fast');
                            $('#formRecipientsModal').modal('hide');
                            $('#RecipientsTable').DataTable().ajax.reload();
                        },
                        error: function () {
                            alert('Error sending request.');
                            $("#loader").fadeOut('fast');
                            $('#formRecipientsModal').modal('hide');
                        }
                    });
                });
            });

        }
    });





    /************
     * VOUCHERS PAGE Handlers
     */

    $('#VouchersTable').DataTable({
        "ajax": 'recipients/table',
        "fnDrawCallback": function (oSettings, json) {
            // Every ajax update on this table, refresh DOM handlers

            // Form OK button handler
            $("#formVouchersModalOk").off('click');
            $("#formVouchersModalOk").on('click', function () {
                if ($("#formRecipients")[0].checkValidity()) {
                    $("#loader").fadeIn('fast');
                    $.ajax({
                        type: "POST",
                        url: "vouchers/set",
                        data: $("#formRecipients").serialize(),
                        dataType: "json",
                        success: function (data) {
                            if (data != "1") alert("Error updating/creating record!");
                            $("#loader").fadeOut('fast');
                            $('#formVouchersModal').modal('hide');
                            $('#VouchersTable').DataTable().ajax.reload();
                        },
                        error: function () {
                            alert('Error sending request.');
                            $("#loader").fadeOut('fast');
                            $('#formVouchersModal').modal('hide');
                        }
                    });
                } else {
                    $("#formRecipients")[0].reportValidity();
                }
            });

            // Edit Button Handler
            $(".recipient-edit-btn").off('click');
            $(".recipient-edit-btn").on('click', function () {
                var id = $(this).data('id');
                $("#loader").fadeIn('fast');
                $.getJSON("vouchers/get/" + id, {}).done(function (data) {
                    $("#id_recipient").val(data.id_recipient);
                    $("#name").val(data.name);
                    $("#email").val(data.email);
                    $("#loader").fadeOut('fast');
                    $('#formVouchersModal').modal('show');
                });
            });

            // Delete button Handler
            $(".recipient-delete-btn").off('click');
            $(".recipient-delete-btn").on('click', function (e) {
                var id = $(this).data('id');
                $('#confirm').modal({}).one('click', '#yes', function (e) {
                    $("#loader").fadeIn('fast');
                    $.ajax({
                        type: "GET",
                        url: "vouchers/del/" + id,
                        success: function (data) {
                            if (data != "1") alert("Error deleting record!");
                            $("#loader").fadeOut('fast');
                            $('#formVouchersModal').modal('hide');
                            $('#VouchersTable').DataTable().ajax.reload();
                        },
                        error: function () {
                            alert('Error sending request.');
                            $("#loader").fadeOut('fast');
                            $('#formVouchersModal').modal('hide');
                        }
                    });
                });
            });

        }
    });


});
