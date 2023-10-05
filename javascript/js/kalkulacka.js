function scitat() {
    var numberOne = Number(document.getElementById("number-one").value);
    var numberTwo = Number(document.getElementById("number-two").value);
    var results = document.getElementById("result");
    var vysledok = numberOne + numberTwo;

    if (!numberOne || !numberTwo) {
        results.value = "Vyplň hodnoty";
        results.style.color = "red";
    }
    else {
        results.value = vysledok.toFixed(2);
        results.style.color = "blue";
    }}
function odcitat() {
    var numberOne = Number(document.getElementById("number-one").value);
    var numberTwo = Number(document.getElementById("number-two").value);
    var results = document.getElementById("result");
    var vysledok = numberOne - numberTwo;
    if (!numberOne || !numberTwo) {
        results.value = "Vyplň hodnoty";
        results.style.color = "red";
    }
    else {
        results.value = vysledok.toFixed(2);
        results.style.color = "blue";
    }}
function nasobit() {
    var numberOne = Number(document.getElementById("number-one").value);
    var numberTwo = Number(document.getElementById("number-two").value);
    var results = document.getElementById("result");
    var vysledok = numberOne * numberTwo;
    if (!numberOne || !numberTwo) {
        results.value = "Vyplň hodnoty";
        results.style.color = "red";
    }
    else {
        results.value = vysledok.toFixed(2);
        results.style.color = "blue";
    }}
function delit() {
    var numberOne = Number(document.getElementById("number-one").value);
    var numberTwo = Number(document.getElementById("number-two").value);
    var results = document.getElementById("result");
    var vysledok = numberOne / numberTwo;
    if (!numberOne || !numberTwo) {
        results.value = "Vyplň hodnoty";
        results.style.color = "red";
    }
    else {
        results.value = vysledok.toFixed(2);
        results.style.color = "blue";
    }}