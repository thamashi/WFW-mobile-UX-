$(window).on("orientationchange", function (event) {
    $("#orientation").text("This device is in " + event.orientation + " mode!");
});

// You can also manually force this event to fire.
$(window).orientationchange();


$(document).on("pageinit", "#news", function (event) {
    showMap("news");
});
$(document).on("pageinit", "#events", function (event) {
    showMap("events");
});
$(document).on("pageinit", "#eventSingle", function (event) {
    showMap("event-single");
});
$(document).on("pageinit", "#aboutus", function (event) {
    showMap("aboutus");
});
$(document).on("pageinit", "#explore", function (event) {
    showMap("explore");
});

function showMap(page) {
    var defaultLatLng = new google.maps.LatLng(34.0983425, -118.3267434);  // Default to Hollywood, CA when no geolocation support
    if (navigator.geolocation) {
        function success(pos) {
            // Location found, show map with these coordinates
            drawMap(new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude));
        }

        function fail(error) {
            drawMap(defaultLatLng);  // Failed to find location, show default map
        }

        // Find the users current position.  Cache the location for 5 minutes, timeout after 6 seconds
        navigator.geolocation.getCurrentPosition(success, fail, {
            maximumAge: 500000,
            enableHighAccuracy: true,
            timeout: 6000
        });
    } else {
        drawMap(defaultLatLng);  // No geolocation support, show default map
    }
    console.log("map");

    function drawMap(latlng) {
        var myOptions = {
            zoom: 10,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas-" + page), myOptions);
        // Add an overlay to the map of current lat/lng
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: "Greetings!"
        });
    }
}

$(document).on("pageinit", "#payment", function (event) {

    // Step show event
    $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        //alert("You are on step "+stepNumber+" now");
        if (stepPosition === 'first') {
            $("#prev-btn").addClass('disabled');
        } else if (stepPosition === 'final') {
            $("#next-btn").addClass('disabled');
        } else {
            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
        }
    });

    // Toolbar extra buttons
    var btnFinish = $('<button></button>').text('Finish')
        .addClass('btn btn-info')
        .on('click', function () {
            alert('Finish Clicked');
        });
    var btnCancel = $('<button></button>').text('Cancel')
        .addClass('btn btn-danger')
        .on('click', function () {
            $('#smartwizard').smartWizard("reset");
        });


    // Smart Wizard
    $('#smartwizard').smartWizard({
        selected: 0,
        theme: 'dots',
        transitionEffect: 'fade',
        showStepURLhash: true,
        toolbarSettings: {
            toolbarPosition: 'both',
            toolbarButtonPosition: 'end',
            toolbarExtraButtons: [btnFinish, btnCancel]
        }
    });

});

$(document).ready(function () {

    $(function () {
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


// External Button Events
$("#reset-btn").on("click", function () {
    // Reset wizard
    $('#smartwizard').smartWizard("reset");
    return true;
});

$("#prev-btn").on("click", function () {
    // Navigate previous
    $('#smartwizard').smartWizard("prev");
    return true;
});

$("#next-btn").on("click", function () {
    // Navigate next
    $('#smartwizard').smartWizard("next");
    return true;
});

$(document).ready(function () {

    $("#loginButtn").click(function () {
        window.location.href = "iphone.php";
    })
});

$(document).ready(function () {

    $("#signUpButtn").click(function () {
        window.location.href = "iphone.php";
    })
});

