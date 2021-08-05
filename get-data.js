jQuery(document).ready(function($) {       
    php_data.child_categories.map(item => {
        $(".child-categories").append(
            `
                <p class="category-child category-${item.category_nicename}" data="${item.cat_ID}">
                    ${item.cat_name}
                </p>
            `
        );
    });

    php_data.child_categories.map(item => {
        $(`.category-${item.category_nicename}`).on("click", function() {
            let cat_id = $(`.category-${item.category_nicename}`).attr('data');
            $.ajax({
                type: "post",
                dataType: "json",
                url : "wp-admin/admin-ajax.php",
                data: {
                    action: "getpost",
                    cat_id: cat_id
                },
                beforeSend: function() {

                },
                success: function(res) {
                    $(".posts-category-id").empty();
                    console.log(res);
                    res.map(item => {
                        $(".posts-category-id").append(
                            `
                                <a href="${item.guid}" class="post-category">
                                    ${item.post_title}
                                </a>  
                            `
                        );
                    });
                },
                error: function( jqXHR, textStatus, errorThrown ){
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
                }
            });
            return false;    
        });
    });
    

    // php_data.categories.map(item => {
    //     $(`.course-${item.category_nicename}`).click(function() {
    //         let cat_id = $(`.course-${item.category_nicename}`).attr('data');
    //         $.ajax({
    //             type: "post",
    //             dataType: "json",
    //             url : "wp-admin/admin-ajax.php",
    //             data: {
    //                 action: "getpost",
    //                 cat_id: cat_id
    //             },
    //             beforeSend: function() {

    //             },
    //             success: function(res) {
    //                 $(".course-item").empty();
    //                 res.map(item => {
    //                     $(".course-item").append(
    //                         `
    //                             <div class="item">
    //                                 ${item.post_content}
    //                                 <a href="${item.guid}">Chi tiết</a>
    //                             </div>
    //                         `
    //                     );
    //                 })
    //             },
    //             error: function( jqXHR, textStatus, errorThrown ){
    //                 console.log( 'The following error occured: ' + textStatus, errorThrown );
    //             }
    //         });
    //         return false;   
    //     });
    // });
});