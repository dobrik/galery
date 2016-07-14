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
                var fileArr = e.currentTarget.previousElementSibling.src.split('/');
                var fileName = fileArr[fileArr.length-1];
                $.ajax({
                    url: 'upload.php',
                    type:'POST',
                    data:{remove: fileName, getImg: true},
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


