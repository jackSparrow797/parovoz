$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $(document).on('click', '.link-file-to-delete', function (e) {
       e.preventDefault();
       let input = $(this);
       let id = $(this).attr('data-id');
       // let sort = $(this).val();
           $.ajax({
               type: 'post',
               url: '/admin/landing/files/' + id,
               data: {_method: 'DELETE'},
               dataType: "json",
               success: function (data) {
                   if (!!(data.response)) {
                       $('.myTabfile_block' + id).remove();

                   }
               },
               error: function (xhr, str) {
                   // $.each(xhr.responseJSON.errors, function (index, value) {
                   //     form.find('[name=' + index + ']').addClass('error');
                   //     form.find('[name=' + index + ']').parent().append('<span class="form-error"> ' + value + ' </span>');
                   // });
               }
           });

   })
});