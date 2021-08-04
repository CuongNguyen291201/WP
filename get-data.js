jQuery(document).ready(function($) {       
    php_data.message.map(item => {
        $(".test-aa").append(`<p class="name-user">${item.name}</p>`)
    })

});