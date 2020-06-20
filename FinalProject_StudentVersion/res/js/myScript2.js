// console.log("hi");

$(function () {
    console.log("clicked");

    //implizierter click

    $.get("ajax/produkte.php", function (data) {
        // console.log(data);

        dataParsed = JSON.parse(data);
        console.log(dataParsed);

        outputString = "<div class='row'>";

        dataParsed.forEach((element) => {
            // console.log(element);
            // console.log(element.Name);

            outputString += "<div class='col-md-3 text-center mb-3'>";

            outputString += "<h3>" + element.Name + "</h3>";

            outputString +=
                "<img src='res/pics/00" +
                element.ID +
                ".jpg' alt='picture of product'/>";

            outputString += "<p>" + element.Beschreibung + "</p>";
            outputString += "<p>" + element.Preis + "</p>";

            // outputString += "<p>" + element.Bewertung + "</p>";
            outputString += "<p>";
            for (i = 0; i < element.Bewertung; i++) {
                outputString += "*";
            }
            outputString += "</p>";

            outputString +=
                "<a class='btn btn-success' href='index2.php?price=" +
                element.Preis +
                "'>In den Warenkorb</a>";

            outputString += "</div>";
        });

        outputString += "</div>";
        document.querySelector("#inputProdukte").innerHTML = outputString;
    });
});
