/**
 * Created by Jesus Liz Alles on 04/08/2017.
 */
$(document).ready(function () {
    $('.collapsible').collapsible();
});
$(document).ready(function () {
    $('.materialboxed').materialbox();
});

// Add smooth scrolling to all links
$(document).ready(function () {
    $('#editarInfoBtn').on('click', function () {
        $('#mostrarInfo').css('display', 'none');
        $('#editarInfo').css('display', 'block');
    });

    $('#cancelar').on('click', function () {
        $('#mostrarInfo').css('display', 'block');
        $('#editarInfo').css('display', 'none');
    });

    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    $('.likeObra').click(function () {
        addLike($(this));
    });

    $('.dislikeObra').click(function () {
        removeLike($(this));
    });

});//end Document ready


function addLike(formulario) {
    var form = $(formulario).closest('.formObra')[0];
    var button = $(formulario);
    var formData = new FormData(form);

    $.ajax({
        url: "{{url('/like/add')}}",
        type: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            if (data == 1) {
                console.log(data);
                button.addClass('green');
                button.removeClass('likeObra');
                button.removeClass('red');
                button.addClass('dislikeObra');

                $( ".dislikeObra").unbind( "click" );
                $('.dislikeObra').click(function () {
                    removeLike(formulario);
                });

                button.find('i').html('thumb_down');
                var likes = parseInt(button.closest('.col').find('.numLikes').html());
                button.closest('.col').find('.numLikes').html(likes + 1);
            } else {

            }
        }, error: function (data) {
            var error = data.responseJSON;
            console.log(error);
            $.each(error, function (key, value) {
                Materialize.toast(value[0], 4000);
            });
        }
    });
};

function removeLike(formulario) {
    var form = $(formulario).closest('.formObra')[0];
    var button = $(formulario);
    var formData = new FormData(form);

    $.ajax({
        url: "{{url('/like/remove')}}",
        type: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            console.log(data)
            if (data == 1) {

                button.addClass('red');
                button.removeClass('dislikeObra');
                button.removeClass('green');
                button.addClass('likeObra');

                $( ".likeObra").unbind( "click" );
                $('.likeObra').click(function () {
                    addLike(formulario);
                });

                button.find('i').html('thumb_up');
                var likes = parseInt(button.closest('.col').find('.numLikes').html());
                button.closest('.col').find('.numLikes').html(likes - 1);

            } else {

            }
        }, error: function (data) {
            var error = data.responseJSON;
            console.log(error);
            $.each(error, function (key, value) {
                Materialize.toast(value[0], 4000);
            });
        }
    });
}


$(document).ready(function () {
    $('.tooltipped').tooltip({delay: 50});
});


$(document).ready(function () {
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});

/*Form IMG*/

$('.noLogin').click(function () {
    Materialize.toast("Debes registrarte para dar like", 2000);
});