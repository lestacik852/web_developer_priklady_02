function myFunction() {
    const text = document.getElementById("demo-3");
    text.innerHTML = "Ahojky";
}
function myFunctionToggle() {
    const text = document.getElementById("demo-6");
    const button = document.getElementById("button-toogle");

    if (text.style.display === "none") {
        button.className = "off";
        text.style.display = "block";
        button.innerText = "Skryť text!";
    } else {
        button.className = "on";
        text.style.display = "none";
        button.innerText = "Ukázať text!";
    }
}

function formatDate() {
    const date = new Date();
    const day = date.getDate();
    const month = (date.getMonth() + 1);
    const year = date.getFullYear();
    const hour = date.getHours();
    const minute = date.getMinutes();
    const dateDisplay = document.getElementById("demo");

    dateDisplay.innerHTML = hour + ":" + minute + "<br>" + day + "." + month + "." + year;
}

