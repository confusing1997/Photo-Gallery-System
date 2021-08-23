$(document).ready(function() { // make sure all HTML has been loaded before access Summernote element

    var user_href;
    var user_href_splitted;
    var user_id;

    var image_src;
    var image_href_splitted;
    var image_name;

    var photo_id;
    
    $(".modal_thumbnails").click(function(){ //class with dot & id with hash

        $("#set_user_image").prop('disabled', false);

        user_href = $("#user-id").prop('href');

        user_href_splitted = user_href.split("="); // return array: includes anything before equal, anything after equal

        user_id = user_href_splitted[user_href_splitted.length - 1];

        //alert(user_id);

        image_src = $(this).prop("src");

        image_href_splitted = image_src.split("/");

        image_name = image_href_splitted[image_href_splitted.length - 1];

        //alert(image_name);

        photo_id = $(this).attr("data");

        $.ajax({

            url: "includes/ajax_code.php",
            data: {photo_id: photo_id},
            type: "POST",
            success: function (data) {

                if (!data.error) {

                    $("#modal_sidebar").html(data);

                }

            }

        });

    });

    $("#set_user_image").click(function() {

        $.ajax({

            url: "includes/ajax_code.php",
            data: {

                image_name:image_name,
                user_id:user_id,

            },
            
            type: "POST",
            success: function(data) {

                if (!data.error) {

                    $(".user_image_box a img").prop('src', data);

                    //alert(data);

                }

            }

        });

    });
    
    $('#summernote').summernote({
    
        height:100
    });

    /***Edit photo side bar */
    $(".info-box-header").click(function(){

        $(".inside").slideToggle("slow");

        $("#toggle").toggleClass("glyphicon-menu-down glyphicon , glyphicon-menu-up glyphicon ");

    });

    /**Delete notification */
    $(".delete_link").click(function(){

        return confirm("Are you sure you want to delete this item?");

    });

});
    