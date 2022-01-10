

function mySubmitFunction(e, obj) {
    e.preventDefault();
    var frmName = 'frm'+obj;

    var frm = $('#' + frmName);
    console.log(frmName);
    console.log(frm.serialize());

    $.ajax({
        type: "GET",
        url: 'http://son.local/verify',
        data: frm.serialize(), // serializes the form's elements.
        success: function(data)
        {
            var info = '.info' + obj;
            $(info).find('.status').html('');
            $(info).find('.group').html('');
            $(info).find('.username').html('');


           console.log(data);
           console.log(!data.hasOwnProperty('error'));
            if (!jQuery.isEmptyObject(data) && data.hasOwnProperty('id')) {
                $(info).find('.status').html('Signature Verified');
                var userName = data.user_profile.first_name + ' ' + data.user_profile.last_name;
                $(info).find('.username').html(userName);

                var category_id = data.user_profile.category_id;

                var categoryName = data.department[category_id];
                console.log(data.department[category_id]);
                $(info).find('.group').html(categoryName);

            } else {

                $(info).find('.status').html('Invalid Signature');
                $(info).find('.group').html('');
                $(info).find('.username').html('');
            }
        }
    });

    return false;
}



