window.onload = init;

function init() {
    console.log("Init");
    element = document.getElementById("terminal");
    element.scrollTop = element.scrollHeight;
}