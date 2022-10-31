$(document).ready(function () {
    $("#check").click(function () {
        let atttype = $("#pass").attr("type");
        if (atttype == "text") {
            $("#pass").attr("type", "password");
        } else {
            $("#pass").attr("type", "text");
        }
    });
});
