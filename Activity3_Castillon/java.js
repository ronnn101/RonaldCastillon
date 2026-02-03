// Button that shows an alert when clicked
document.getElementById("alertBtn").onclick = function () {
    alert("Ako Paba?");
};

//  Show input value when button is clicked
document.getElementById("showBtn").onclick = function () {
    let text = document.getElementById("userInput").value;
    document.getElementById("output").innerText = text;
};

// Change paragraph color on hover
document.getElementById("hoverText").onmouseover = function () {
    this.style.color = "blue";
};
document.getElementById("hoverText").onmouseout = function () {
    this.style.color = "green"; // resets back when mouse leaves
};
