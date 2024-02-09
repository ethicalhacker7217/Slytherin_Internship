$(document).ready(function () {
    data_insert();
    data_fetch();
    data_edit();

})

function data_insert() {
    $("#submitClick").click(function () {
        var name = $("#name").val();
        var cls = $("#class").val();
        var roll = $("#roll").val();
        var myData = {
            name_data: name,
            class_data: cls,
            roll_data: roll
        }
        $.ajax({
            url: "submitme.php",
            type: "POST",
            data: myData,
            success: function (respond) {
                console.log(respond);
                $("#name").val("");
                $("#class").val("");
                $("#roll").val("");
                data_fetch();
            }

        })
    })

}

function data_fetch() {
    var myCode = {
        pass_data: "passData"
    }
    $.ajax({
        url: "fetch.php",
        type: "POST",
        data: myCode,
        success: function (respond) {
            // console.log(respond);
            $("#result").html(respond);
        }
    })

}

function data_edit(myId) {
    $("#dataEdit").click(function () {
        var id = $("#id").val();
        var newData = {
            id_data: myId,
            
        }
        $.ajax({
            url: "update.php",
            type: "POST",
            data: newData,
            success: function (respond) {
                console.log(respond);
                $("#id").val();
                data_fetch();
            }

        })
    })

}