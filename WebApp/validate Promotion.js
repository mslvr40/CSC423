
/*global
alert, confirm, console, Debug, opera, prompt, WSH
*/

var errorMessage = "";

function valPromoName() {

    var promoName = document.getElementById("promoName"),
        regex = (/^[A-Z][a-z]*[\-]?(\-[A-Z][a-z]*)?$/);

    if (!(promoName.match(regex) || promoName === "")) {
        errorMessage += "Please enter a valid Promotion Name\n";
    }
}

function valPromoAmount() {

    var promoAmount = document.getElementById("promoAmount"),
        regex = (/\d+/);

    if (!(promoAmount.match(regex) || promoAmount === "")) {
        errorMessage += "Please enter a valid Promotion Amount\n";
    }
}

function valPromoDescription() {

    var promoDescription = document.getElementById("promoDescription"),
        regex = (/[A-Za-z0-9-.,]+/);

    if (!(promoDescription.matches(regex) || promoDescription === "")) {
        errorMessage += "Please enter a valid Promotion Description\n";
    }

}

function alertMessage() {
    alert(errorMessage);
}