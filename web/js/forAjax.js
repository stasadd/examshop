$(document).ready(function(){
    $('.forAjax').on("click", function (event) {
        event.preventDefault();
        $.ajax({
            url: '/site/ajax',
            type: 'POST',
            data: {id: 0},
            success: function (result) {
                console.log(result);
            }
        });

    });


});