function scitat() {
    let numberOne = Number(document.getElementById("number-one").value);
    let numberTwo = Number(document.getElementById("number-two").value);
    let results = document.getElementById("result");
    let vysledok = numberOne + numberTwo;

    if (!numberOne || !numberTwo) {
        results.value = "Vyplň hodnoty";
        results.style.color = "red";
    }
    else {
        results.value = vysledok.toFixed(2);
        results.style.color = "blue";
    }}
function odcitat() {
    let numberOne = Number(document.getElementById("number-one").value);
    let numberTwo = Number(document.getElementById("number-two").value);
    let results = document.getElementById("result");
    let vysledok = numberOne - numberTwo;
    if (!numberOne || !numberTwo) {
        results.value = "Vyplň hodnoty";
        results.style.color = "red";
    }
    else {
        results.value = vysledok.toFixed(2);
        results.style.color = "blue";
    }}
function nasobit() {
    let numberOne = Number(document.getElementById("number-one").value);
    let numberTwo = Number(document.getElementById("number-two").value);
    let results = document.getElementById("result");
    let vysledok = numberOne * numberTwo;
    if (!numberOne || !numberTwo) {
        results.value = "Vyplň hodnoty";
        results.style.color = "red";
    }
    else {
        results.value = vysledok.toFixed(2);
        results.style.color = "blue";
    }}
function delit() {
    let numberOne = Number(document.getElementById("number-one").value);
    let numberTwo = Number(document.getElementById("number-two").value);
    let results = document.getElementById("result");
    let vysledok = numberOne / numberTwo;
    if (!numberOne || !numberTwo) {
        results.value = "Vyplň hodnoty";
        results.style.color = "red";
    }
    else {
        results.value = vysledok.toFixed(2);
        results.style.color = "blue";
    }}