function openPopup() {
    document.getElementById('popupForm').style.display = 'block';
}

function closePopup() {
    document.getElementById('popupForm').style.display = 'none';
}

// Close the popup if the user clicks anywhere outside of it
window.onclick = function(event) {
    var popup = document.getElementById('popupForm');
    if (event.target == popup) {
        popup.style.display = 'none';
    }
}

function openLoginPopup() {
    document.getElementById('loginPopup').style.display = 'block';
}

function closeLoginPopup() {
    document.getElementById('loginPopup').style.display = 'none';
}

// Close the popup if the user clicks anywhere outside of it
window.onclick = function(event) {
    var popup = document.getElementById('loginPopup');
    if (event.target == popup) {
        popup.style.display = 'none';
    }
}
