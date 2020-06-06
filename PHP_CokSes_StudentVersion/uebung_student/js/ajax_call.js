$(function () {
    // console.log(document.querySelector("#notelist"));
    // Get the unordered List and the filter input
    noteList = document.querySelector("#notelist");
    filterInput = document.querySelector("#filter_input");

    // Add a keyup event to the input (not keydown, because keydown fires before the value
    // is entered (try it out))
    filterInput.addEventListener("keyup", (e) => {
        // console.log(e.target.value);
        //Get the value of the input field
        filter_Value = e.target.value;
        //Make an ajax request to the php file which will give you the data.accordion
        //You could just get the data normally and do it in js; I decided to do the whole
        //work in php and just output the result of it in js
        //This will not update the list at the start. If you want to do this, you would
        //have to make this to a named function and call it one time at the start
        $.get("doc/student_notes.php", { filtervalue: filter_Value }, function (
            data
        ) {
            // console.log(data);
            //Output
            noteList.innerHTML = data;
        });
    });
});
