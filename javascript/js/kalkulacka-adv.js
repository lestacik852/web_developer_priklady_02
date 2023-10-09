function result() {
    const input = document.getElementById('display').value.replace(/,/g, '.');
    const result = eval(input);
    if (input != ""){
        document.getElementById('display').value = result;
    } else {
        document.getElementById('display').placeholder = "Zadaj hodnoty!";
    }
}
document.addEventListener("keyup", function(event) {
    if (event.key === 'Enter') {
        result();
    }
})
document.addEventListener("keyup", function (event) {
    if (event.key === 'Escape') {
        document.getElementById('display').value = "";
    }
})
