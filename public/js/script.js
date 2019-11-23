// For show  session message //

window.setTimeout(function () {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function () {
        $(this).remove();
    });
}, 5000);

// For show  session message close //



$('.show_modal').click(function () {

    var id = $(this).data('id');

    $.ajax({
        type: "GET",
        url: "/admin/news/show",
        data: {id : id},
        success: function (data) {
            console.log(JSON.parse(data))
            data = JSON.parse(data).news;
            $('#news_id').text(data.id);
            $('#news_title').text(data.title);
            $('#news_slug').text(data.news.slug);
            $('#news_category').text(data.news.categories.name);
            $('#news_description').text(data.description);
        }
    });



});


// end show modal product information

//edit product module
$('.edit_modal').click(function () {
    var id = $(this).data('id');
    $.ajax({
        type: "GET",
        url: "/admin/news/show",
        data: {id : id},
        success: function (data) {
            data = JSON.parse(data).news;
    $('#news_id').val(data.id);
    $('#editeModal').attr('action','/admin/news/'+data.news.id+'');
    $('#title').val(data.title);
    $('#slug').val(data.news.slug);
    $('#description').val(data.description);
    $("#categories option[value="+data.news.categories.id+"]").prop("selected", "selected")
        }
    });

});


