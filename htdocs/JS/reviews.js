let button = document.getElementById('createreviewbutton');

button.onclick = function(e) {
    e.preventDefault();
    // Replace localhost and the folder name
    // based on your setup
    location.href = 'http://localhost/createreview.php';
}