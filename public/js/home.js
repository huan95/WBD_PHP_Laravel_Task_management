//khai bao ajax
$(document).ready(function () {
    //bat hanh dong click vao phan tu co class la delete-task
    $('.delete-task').click(function () {
        //lay value cua id cua phan tu co class la delete-task
        var id = $(this).attr('id');
        //thuc hien xoa
        $.ajax({
            type: 'GET',
            url: '/tasks/' + id + '/delete',
            success: function () {
                window.location = '/tasks/list';
            }
        });
    });
});