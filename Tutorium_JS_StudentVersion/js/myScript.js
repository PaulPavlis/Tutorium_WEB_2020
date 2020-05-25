// console.log(document);

// console.log(document.baseURI);

// document.title = "Changed with JS";

// console.log(document.body);

// ------- Selectors

// var h3 = document.getElementById("helloWorld");
// console.log(h3);
// console.log(h3.textContent);
// console.log(h3.innerHTML);
// console.log(h3.outerHTML);

// h3.innerHTML = "Hello Students";

// var formGroups = document.getElementsByClassName("form-group");
// console.log(formGroups);
// console.log(formGroups[1]);

// formGroups[1].style.padding = "100px";
// formGroups[1].style.backgroundColor = "grey";

// h3.style.borderBottom = "solid 3px black";

// QuerySelector

// var submitButton = document.querySelector("button");
// var submitButton = document.querySelector(".btn");
// var submitButton = document.querySelector("#submitButton");

// console.log(submitButton);

// var submitButtonList = document.querySelectorAll(".btn");

// console.log(submitButtonList);

// for (var i = 0; i < submitButtonList.length; i++) {
//     submitButtonList[i].style.backgroundColor = "green";
// }

// submitButtonList.forEach((button) => {
//     // console.log(button);
//     button.style.backgroundColor = "black";
// });

var checkbox = document.querySelector("#exampleCheck1");
// var checkbox2 = $("#exampleCheck1");
// var checkbox3 = $("#exampleCheck1")[0];

// console.log(checkbox);
// console.log(checkbox2);
// console.log(checkbox3);

// ----- Parents / Siblings / Childs

// console.log(checkbox.parentElement.parentElement.parentElement);
// checkbox.parentElement.parentElement.style.borderTop = "dotted 3px grey";

// var form = checkbox.parentElement.parentElement;

// // console.log(form.childNodes);
// // console.log(form.children);
// // console.log(form.children[2]);

// // console.log(form.childElementCount);

// // console.log(form.firstChild);
// console.log(form.firstElementChild);
// console.log(form.lastElementChild);

// form.lastElementChild.innerHTML = "Click me";

// console.log(checkbox.nextElementSibling);
// console.log(checkbox.previousElementSibling);

// ------ Create new Elements

// var newDiv = document.createElement("div");
// newDiv.className = "bg-success mt-3";
// newDiv.innerHTML = "New Div Element";
// newDiv.id = "newDiv";
// newDiv.setAttribute("whatever", "you want");
// console.log(newDiv);

// // document.body.appendChild(newDiv);

// // var form = document.querySelector("form");
// // form.insertBefore(newDiv, form.children[2]);

// var submitButton = document.querySelector("#submitButton");
// submitButton.after(newDiv);

// Aufgabe: Füge ein weiteres Field im Form
// mittels Javascript ein. Z.b. Username.
// Es soll zwischen Email und Password sein
// Anmerkung: Design ist nicht wichtig, da es
// nur eine Übung ist

// // create form group div
// var newDivForm = document.createElement("div");
// newDivForm.className = "form-group";

// // create the label and the input
// var newUsernameLabel = document.createElement("label");
// newUsernameLabel.innerHTML = "Username";

// var newUsernameInput = document.createElement("input");
// newUsernameInput.className = "form-control";
// newUsernameInput.placeholder = "Your Username";

// // append the label and the input to the div
// newDivForm.appendChild(newUsernameLabel);
// newDivForm.appendChild(newUsernameInput);

// // // append the div to the form
// var form = document.querySelector("form");

// // console.log(form);

// form.children[0].after(newDivForm);

// ----- Events

var testButton = document.querySelector("#TestButton");

testButton.addEventListener("click", buttonClicked);

function buttonClicked(e) {
    e.preventDefault();
    // console.log("Button clicked");
    // console.log(e);
    // console.log(e.type);
    // console.log(e.target);
    // console.log(e.target.id);
    // console.log(e.target.className);

    // console.log(e.clientX);
    // console.log(e.clientY);

    // console.log(e.offsetX);
    // console.log(e.offsetY);
    // console.log(e.altKey);
    // console.log(e.ctrlKey);
    // console.log(e.shiftKey);
}

// var emailAdressInput = document.querySelector("#exampleInputEmail1");

// emailAdressInput.addEventListener("focus", (e) => {
//     console.log("On Focus: " + e.target.value);
// });

// emailAdressInput.addEventListener("blur", (e) => {
//     console.log("On Blur: " + e.target.value);
// });

// emailAdressInput.addEventListener("keydown", (e) => {
//     console.log("On Keydown: " + e.target.value);
// });

// document.body.addEventListener("mousemove", mouseMove);
// function mouseMove(e) {
//     // console.log(e.clientX);
//     // console.log(e.clientY);

//     var red = e.clientX % 256;
//     var green = e.clientY % 256;
//     var blue = (e.clientX + e.clientY) % 256;

//     document.body.style.backgroundColor = `rgb(${red}, ${green}, ${blue})`;
// }

var form = document.querySelector("form");
var userList = document.querySelector("#userList");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    var email = document.querySelector("#exampleInputEmail1");
    var password = document.querySelector("#exampleInputPassword1");
    // console.log(password);

    var newEntry = document.createElement("li");
    newEntry.className = "list-group-item";
    newEntry.innerHTML = `${email.value} -> ${password.value}`;

    var newBtn = document.createElement("button");
    newBtn.className = "btn btn-danger btn-sm float-right";
    newBtn.innerHTML = "X";

    //Add Event to btn
    newBtn.addEventListener("click", deleteListEntry);

    newEntry.appendChild(newBtn);
    userList.appendChild(newEntry);

    email.value = "";
    password.value = "";
});

function deleteListEntry(e) {
    // console.log(e.target.parentElement);
    userList.removeChild(e.target.parentElement);
}
