document.addEventListener('DOMContentLoaded', function() {
  const checkbox = document.getElementById('gridCheck');
  const button = document.getElementById('registerButton');

  checkbox.addEventListener('change', function() {
    if (this.checked) {
      button.removeAttribute('disabled');
    } else {
      button.setAttribute('disabled', 'true');
    }
  });
});
