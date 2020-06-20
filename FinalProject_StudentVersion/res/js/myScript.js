// console.log("hi");

$(function () {
    // console.log("hi2");

    $("#menuShop").click((e) => {
        e.preventDefault();

        $("#menuShop").addClass("active");
        $("#menuHome").removeClass("active");

        console.log("clicked");
    });
});
