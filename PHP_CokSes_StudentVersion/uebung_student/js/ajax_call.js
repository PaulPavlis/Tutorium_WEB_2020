$(function () {
    // console.log(document.querySelector("#notelist"));
    noteList = document.querySelector("#notelist");
    filterInput = document.querySelector("#filter_input");

    filterInput.addEventListener("keyup", (e) => {
        // console.log(e.target.value);
        filter_Value = e.target.value;

        $.get("doc/student_notes.php", { filtervalue: filter_Value }, function (
            data
        ) {
            // console.log(data);
            noteList.innerHTML = data;
        });
    });
});
