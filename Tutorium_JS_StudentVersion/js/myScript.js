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

var newDiv = document.createElement("div");
newDiv.className = "bg-success mt-3";
newDiv.innerHTML = "New Div Element";
newDiv.id = "newDiv";
newDiv.setAttribute("whatever", "you want");
console.log(newDiv);

// document.body.appendChild(newDiv);

// var form = document.querySelector("form");
// form.insertBefore(newDiv, form.children[2]);

var submitButton = document.querySelector("#submitButton");
submitButton.after(newDiv);
