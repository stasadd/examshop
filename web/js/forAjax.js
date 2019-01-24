$(document).ready(function () {
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


    //залишити відгук
    $('.send-review').on("click", function (event) {
        event.preventDefault();
        $.ajax({
            url: '/products/makereview',
            type: 'POST',
            data: $('form').serialize(),
            success: function (result) {
                //console.log(result);
                let data = JSON.parse(result);
                let review = '<div class="panel panel-success"><div class="panel-heading">' +
                    data.name +
                    '</div><div class="panel-body"><p>' +
                    data.text +
                    '</p></div></div>';
                $(".review-container").append(review);
            }
        });
    });

    //добавити в корзину prodCart
    $('.prodCart').on("click", function (event) {
        event.preventDefault();
        let prodId = $(this).attr('prodId');
        console.log('cart prod ' + prodId);
        $.ajax({
            url: '/products/putintocart',
            type: 'POST',
            data: {id : prodId},
            success: function (result) {
                //console.log(result);
                //let data = JSON.parse(result);
                alert('товар додано в корзину');
            }
        });
    });

});