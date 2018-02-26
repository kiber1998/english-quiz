$(document).ready(function() {
    $('.modal').show(800);
    $('#next-btn').hide();
    $('#btn').hide();
    $('#top-usr').hide();
    $('#top_usr').click(function () {
        $('#top-usr').show();
    })
    $('.custom-file-input').on('change',function(){
        $(this).next('.form-control-file').addClass("selected").html($(this).val());
    })
    // var timerId = setInterval(function() {
    //     remaining_time =  remaining_time - step
    //     $('#timer').text(remaining_time)
    //     clearInterval(timerId)
    // }, 1000);
    //
    // $('#mytimer').html(timer)
    // var request = $.ajax({
    //         url:"http://english-quiz/index.php",
    //         method: "GET",
    //         dateType:"json",
    //         data: {
    //             result:result_t
    //         }
    // });
    //     request.done(function (url) {
    //         var myresult = JSON.parse(url);
    //
    //     })
    //
    // if (remain_time){
    //
    // }
    $('#delete').submit();
});
