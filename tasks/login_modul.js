// Get the modul
var modul = document.getElementById('login');

// When the user clicks anywhere outside of the modul, close it
window.onclick = function(event) {
    if (event.target == modul) {
        modul.style.display = "none";
    }
}
