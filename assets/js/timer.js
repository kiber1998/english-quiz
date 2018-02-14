$(document).ready(function () {
    var old_time = 60;
    var timerId = setInterval(function() {
        var total_time=old_time--;
        $('#my_timer').text(total_time);
    }, 1000);

    setTimeout(function() {
        clearInterval(timerId);
        // alert('voxtingiz tugadi');
        var result_t = 0
        var request = $.ajax({
            url:"http://english-quiz/index.php",
            method: "GET",
            dateType:"json",
            data: {
                result: result_t
            }
        });
    }, 1000*62);
})