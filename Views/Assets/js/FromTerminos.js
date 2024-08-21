document.addEventListener('DOMContentLoaded', function () {

    const checkbox = document.getElementById('acceptTerms');
    const button = document.getElementById('registerButton');

    
    if (checkbox && button) {
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                button.removeAttribute('disabled');
            } else {
                button.setAttribute('disabled', 'true');
            }
        });
    }
});

function showTerms() {
    document.getElementById('terms').style.display = 'block';
}

function closeTerms() {
    document.getElementById('terms').style.display = 'none';
}

function register() {
    window.location.href = './index.php';
}
