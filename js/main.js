/**
 * Created by dneprEC-71 on 13.07.2016.
 */
var sendAndGet = function () {
    var form = new FormData(document.forms.imgForm);
    $.ajax({
        method: 'POST',
        url: 'upload.php',
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (e) {
            $('#showImg').html(e);
            $('#file').val('');
            var btn = $('.imgRem');
            btn.click(function(e){
                console.log(e.currentTarget.previousElementSibling.src);
                $.ajax({
                    url: 'upload.php',
                    type:'POST',
                    data:{remove: e.currentTarget.previousElementSibling.src, getImg: true},
                    success: function(){
                        sendAndGet();
                    }
                })
            })
        }

    })
};
$(document).ready(sendAndGet);
$('#sendImg').click(sendAndGet);


