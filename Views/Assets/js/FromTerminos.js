document.addEventListener('DOMContentLoaded', function () {
  const checkbox = document.getElementById('gridCheck');
  const button = document.getElementById('registerButton');

  checkbox.addEventListener('change', function () {
    if (this.checked) {
      button.removeAttribute('disabled');
    } else {
      button.setAttribute('disabled', 'true');
    }
  });
});


function showTerms() {
  document.getElementById('terms').style.display = 'block';
}

function closeTerms() {
  document.getElementById('terms').style.display = 'none';
}

document.getElementById('acceptTerms').addEventListener('change', function() {
  document.getElementById('registerButton').disabled = !this.checked;
});

function register() {
  window.location.href = './index.php';
}



