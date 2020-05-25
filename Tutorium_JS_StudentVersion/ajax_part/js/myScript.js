console.log(document.querySelector("h1"));

$(function () {
    console.log(document.querySelector("h1"));

    $("#loadAjax").click(() => {
        $.get("lorem.txt", function (data) {
            $("#inputAjax").html(data);
        });
    });
});
