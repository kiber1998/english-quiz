$(document).ready(function () {
    $('.time-error').hide();

    var old_time = 30;
    var timerId = setInterval(function() {
        var total_time=old_time--;
        if (total_time<=10 && total_time > 5){
            $('#my_timer').addClass('text-warning');
        }
        if (total_time<=5){
            $('#my_timer').addClass('text-danger');
        }

        $('#my_timer').text(total_time);
        if (total_time==0){
            $('#my_timer').hide();
            $('.time-error').show();
        }
        // var result_t;
        // if (total_time<=0){
        //     // var request = $.ajax({
        //     //     url:"http://english-quiz/index.php",
        //     //     method: "GET",
        //     //     dateType:"json",
        //     //     data: {
        //     //         result: result_t
        //     //     }
        // }
        // else{
        //     result_t = false;
        // }disabled
    }, 1000);
    setTimeout(function() {
        clearInterval(timerId);

        $('#btn-one').hide();
        $("#disabledTextInput").attr("disabled");
        $('#my-input').hide();
        result_t = 1;
    }, 1000*32);
// });



});
