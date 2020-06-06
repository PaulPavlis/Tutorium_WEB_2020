//Test to see if it works - Always test
// console.log("Hi");

//Wait until the document is ready and loaded
$(function () {
    // Show the difference between ajax and vanilla js
    // console.log($("#loadAjax")[0]);
    // console.log(document.querySelector("#loadAjax"));
    // console.log(document.getElementById("loadAjax"));
    //
    // // Get the button and add an click event. Also it uses an anonymous function (and lambda)
    // $("#loadAjax").click(() => {
    //     // $.get is an Ajax call to the path specified. Puts the data into the variable data
    //     $.get("doc/lorem.txt", (data) => {
    //         text = data;
    //         //Output it to the screen
    //         $("#inputAjax").html(data);
    //     });
    // });
    // $("#loadAjax").click(() => {
    //     //Also json is possible
    //     $.get("doc/LVs.json", function (data) {
    //         console.log(data);
    //         //Traverse the json object
    //         console.log(data["Bachelor-Informatik"]);
    //         console.log(data["Bachelor-Informatik"]["Betriebssysteme"]);
    //     });
    // });
    // Work for Students - Give out the average of the notes
    // $("#loadAjax").click(() => {
    //     $.get("doc/student_example.json", function (data) {
    //         // console.log(data);
    //         var note = 0;
    //         var i = 0;
    //         data.forEach((element) => {
    //             // console.log(element);
    //             note += element.Note;
    //             i++;
    //         });
    //         console.log(note / i);
    //         $("#inputAjax").html(
    //             "<h5 class='mt-5 bg-success'>Durchschnittsnote: " +
    //                 note / i +
    //                 "</h5>"
    //         );
    //     });
    // });

    $("#loadAjax").click(() => {
        // Make a post request to a php file. It has to echo or output data which will
        // be received here. Also adds a parameter to the request (done in json format -
        // but it is a normal request)
        $.post("ajax_receiver4.php", { name: "Jakob", form: "sendme" }).done(
            function (data) {
                console.log(data);
                $("#inputAjax").html(data);
            }
        );
    });
});
