$(document).ready(function () {

    $(function() {
        function prevent_default(e) {
            e.preventDefault();
        }


        function disable_scroll() {
            $(document).on('touchmove', prevent_default);
        }

        function enable_scroll() {
            $(document).unbind('touchmove', prevent_default)
        }

        var x;
        $('.swipe-delete li > a')
            .on('touchstart', function (e) {

                $('.swipe-delete li > a.open').css('left', '0px').removeClass('open') // close em all
                $(e.currentTarget).addClass('open')
                x = e.originalEvent.targetTouches[0].pageX // anchor point
            })
            .on('touchmove', function (e) {
                var change = e.originalEvent.targetTouches[0].pageX - x
                change = Math.min(Math.max(-100, change), 100) // restrict to -100px left, 0px right
                e.currentTarget.style.left = change + 'px'
                if (change < -10) disable_scroll() // disable scroll once we hit 10px horizontal slide
            })
            .on('touchend', function (e) {
                var left = parseInt(e.currentTarget.style.left)
                var new_left;
                if (left < -35) {
                    new_left = '-100px'
                } else if (left > 35) {
                    new_left = '100px'
                } else {
                    new_left = '0px'
                }
                // e.currentTarget.style.left = new_left
                $(e.currentTarget).animate({left: new_left}, 200)
                enable_scroll()
            });
        $('li .delete-btn').on('touchend', function (e) {
            e.preventDefault()
            $(this).parents('li').slideUp('fast', function () {
                $(this).remove()
            })
        })



    })


});



$(document).ready(function () {

    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("login-close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    }

});


$(document).ready(function(){

    $("#login").click(function(){
        window.location.href = "ipad.php";
    })
});















