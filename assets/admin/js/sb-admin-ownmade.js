$(document).ready(function(){

    $('#btnAdd').click(function(){
        var url = $('#openAddModal').data('url');
        var data = $('#addBlotterForm').serialize();
        $.ajax({
            url: url,
            data: data,
            method: 'post',
            dataType:'json',
            success: function(response)
            {
                if(response.success)
                {
                    alert('Successfully added new blotter report');
                    location.reload();
                }
                else
                {
                    alert('error');
                    location.reload();
                }
            }, 
            error: function ()
            {
                alert('Error adding data');
                location.reload();
            }
        });
    });

    $('#dataTable').on('click', '.confirm-delete', function(e) {
        e.preventDefault();

        var id = $(this).data('id');
        var url = $(this).data('url');
        
        $('#deleteModal').data('id', id).modal('show');
        $('#deleteModal').data('url', url);
    });

    $('#btnDelete').click(function(){
        var url = $('#deleteModal').data('url');
        var id = $('#deleteModal').data('id');
        $.ajax({
            url: url+id,
            type:'ajax',
            method: 'post',
            dataType:'json',
            success: function(response)
            {
                if(response.success)
                {
                    alert('Successfully deleted blotter report');
                    location.reload();
                }
                else
                {
                    alert('error');
                    location.reload();
                }
            }, 
            error: function ()
            {
                alert('Error deleting data');
                location.reload();
            }
        });
    });

    $('#dataTable').on('click', '.view-profile', function(e) {
        e.preventDefault();

        var id = $(this).data('id');

        var complainant = $(this).data('complainant');
        var defendant = $(this).data('defendant');
        var blotter_case = $(this).data('blottercase');
        var blotter_details = $(this).data('blotterdetails')
        var created_at = $(this).data('created');
        var officer = $(this).data('officer');
        var status = $(this).data('status');

        $('#viewModal').find('.modal-title').text('Case I.D. ').append(id);

        console.log($('#complainantNameTxt').val());

        $('#complainantNameTxt').val(complainant);
        $('#defendantNameTxt').val(defendant);
        $('#caseTypeTxt').val(blotter_case);
        $('#detailsTxt').val(blotter_details);
        $('#dateTimeTxt').val(created_at);
        $('#officerTxt').val(officer);
        $('#statusTxt').val(status);

        $('#viewModal').data('id', id).modal('show');
    });

    $('#btnEdit').click(function(){
        if($('#complainantNameTxt').prop("readonly") == false)
        {
            var id = $('#viewModal').data('id');
            var url = $('#openEditModal').data('url');
            var data = $('#viewBlotterForm').serializeArray();

            $.ajax({
                url: url+id,
                data: data,
                method: 'post',
                dataType:'json',
                success: function(response)
                {
                    if(response.success)
                    {
                        alert('Successfully edited blotter report');
                        location.reload();
                    }
                    else
                    {
                        alert('error');
                        location.reload();
                    }
                }, 
                error: function ()
                {
                    alert('Error adding data');
                    location.reload();
                }
            });
        }
        else
        {
            alert('Press the edit button again to save changes');
            $('#complainantNameTxt').prop("readonly", false);
            $('#defendantNameTxt').prop("readonly", false);
            $('#caseTypeTxt').prop("readonly", false);
            $('#detailsTxt').prop("readonly", false);
            $('#statusTxt').prop("readonly", false);
        }
    });

    $('#btnEditCancel').click(function(){
        $('#complainantNameTxt').prop("readonly", true);
        $('#defendantNameTxt').prop("readonly", true);
        $('#caseTypeTxt').prop("readonly", true);
        $('#detailsTxt').prop("readonly", true);
        $('#statusTxt').prop("readonly", true);
    });

    $('#btnCreate').click(function(){
        var url = $('#openCreateClearance').data('url');
        var url2 = $('#openCreateClearance').data('url2');
        var data = $('#createClearanceForm').serialize();
        $.ajax({
            url: url2,
            data: data,
            method: 'post',
            dataType:'json',
            success: function(response)
            {
                if(response.success)
                {
                    $('#clearanceContinue').modal('show');
                }
                else
                {
                    $.ajax({
                        url: url,
                        data: data,
                        method: 'post',
                        dataType: 'json',
                        success: function()
                        {
                            if(response.success)
                            {
                                alert('Successfully created barangay clearance record');
                                location.reload();
                            }
                            else
                            {
                                alert('An error has occurred');
                                location.reload();
                            }
                        },
                        error: function()
                        {
                            alert('Error creating barangay clearance');
                            location.reload();
                        }
                    });
                }
            }, 
            error: function ()
            {
                alert('Error creating barangay clearance');
                location.reload();
            }
        });
    });

    $('#btnContinue').click(function(){
        var url = $('#openCreateClearance').data('url');
        var data = $('#createClearanceForm').serialize();
        $.ajax({
            url: url,
            data: data,
            method: 'post',
            dataType:'json',
            success: function(response)
            {
                if(response.success)
                {
                    alert('Successfully created barangay clearance record');
                    location.reload();
                }
                else
                {
                    alert('An error has occurred');
                    location.reload();
                }
            }, 
            error: function ()
            {
                alert('Error creating barangay clearance');
                location.reload();
            }
        });
    });

})