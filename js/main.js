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
            $('#showImg').append(e);
            //console.log(e);
        }

    })
};
$(document).ready(sendAndGet);
$('#sendImg').click(sendAndGet);
