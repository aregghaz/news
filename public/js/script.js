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

            data = JSON.parse(data).news;
            console.log(data.news.images)
            $('#news_id').text(data.id);
            $('#news_title').text(data.title);
            $('#news_slug').text(data.news.slug);
            $('#news_category').text(data.news.categories.name);
            $('#news_description').text(data.description);
            var images  = data.news.images;
            for (var j = 0; j < images.length; j++) {
                if (j == 0) {
                    $('.tab-content').append('<div id=\"metro-related' + j + '\" class="tab-pane fade active in"><a href="#"> <img class="img-responsive images_product_show1 " src=\"/images/news/' + images[j]['name'] + '\" alt="single"></a></div> ');
                    $('.demo_img').append('<li class="col-sm-2 active"><a aria-expanded="false" data-toggle="tab" href=\"#metro-related' + j + '\"><img class="img-responsive " src=\"/images/news/' + images[j]['name'] + '\" alt="related3" width="200px" height="150px"></a></li>');
                } else {
                    $('.tab-content').append('<div id=\"metro-related' + j + '\" class="tab-pane fade"><a href="#"> <img class="img-responsive images_product_show1 " src=\"/images/news/' + images[j]['name'] + '\" alt="single"></a></div> ');
                    $('.demo_img').append('<li class="col-sm-2"><a aria-expanded="false" data-toggle="tab" href=\"#metro-related' + j + '\"><img class="img-responsive " src=\"/images/news/' + images[j]['name'] + '\" alt="related3" width="200px" height="150px"></a></li>');
                }

            }

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
            var images  = data.news.images;
            $('#forImages').empty()
            for (var i = 0; i < images.length; i++) {
                $('#forImages').append('<div class="form-group col-sm-12 col-xs-12">' +
                    '<label for="icon " style=\'float: left\'>' +
                    '<img src="/images/news/' + images[i]['name'] + '" alt=""  width="70px" height="50px">' +
                    '</label>' +
                    '<input type="button" class="form-control imagesRemove"  value="x"  data-id="' + images[i]['id'] + '" style=\'width: 10%;margin: 0 0 0 100px;\' title="Remove image"/>' +
                    '</div>');
            }
            $('.imagesRemove').on("click", function (event) {
                id = $(this).attr('data-id');
                $.ajax({
                    type: "GET",
                    url: "/admin/deleteImage",
                    data: {id : id},
                    success: function (data) {
                        data = JSON.parse(data);
                        console.log(data.status)
                        if(data.status == 200){

                            $(event.target).parent().empty()
                        }
                    }
                });
            })

        }
    });

});



function fileFunctionedit() {
    $('.myimg_edit').append(" <div class='form-group col-sm-12 col-xs-12 '><label  for=\"icon\">Images:</label>" +
        " <input type=\"file\" class=\"form-control\" name=\"upload_file[]\"  placeholder=\"Images\"  required/></div>");
}