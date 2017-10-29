/*global
alert, confirm, console, Debug, opera, prompt, WSH
*/

var errorMessage = "";
function alertMessage() {

    alert(errorMessage);
}

function validatePurchasedCost() {
    var regex = new RegExp("\d + (?:[.,]\d +)* (?:[.,]\d{2})")
    var pCost = document.getElementById("itemPurchaseCost").value;
    if (!regex.test(pCost)) {
        errorMessage += "Please fix the format of the Purchased Item Cost \n";
    }
}


function validateRetailPrice() {
    var regex = new RegExp("\d+(?:[.,]\d+)*(?:[.,]\d{2})")
    var rPrice = document.getElementById("itemRetailPrice").value;
    if (!regex.test(rPrice)) {
        errorMessage += "Please fix the format of the Item Retail Price \n";
    }
}

function validateItemID() {
    var regex = new RegExp("\d+")
    var itId = document.getElementById("itemNumber").value;
    if (!regex.test(itId)) {
        errorMessage += "Please fix the format of the Item Number \n"
    }
}

function validateItemDescription() {
    var regex = new RegExp("[A-Za-z0-9-.,] +")
    var itDes = document.getElementById("itemDescription").value;
    if (!regex.test(itDes)) {
        errorMessage += "Please fix the format of the Item Number \n"
    }
}