// auth.js
document.querySelectorAll('.form-control').forEach(input => {
    input.addEventListener('focus', function () {
        this.style.borderColor = '#5a67d8';
    });

    input.addEventListener('blur', function () {
        this.style.borderColor = '#ccc';
    });
});
