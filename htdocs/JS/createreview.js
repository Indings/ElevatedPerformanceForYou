let submitReivewButton = document.getElementById('submitReviewButton');

submitReviewButton.onclick = function(e) {
    e.preventDefault();
    
    location.href = 'http://localhost/index.php';
}