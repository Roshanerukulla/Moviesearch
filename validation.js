// validation.js

document.addEventListener('DOMContentLoaded', function () {
    // Getting the form element
    var form = document.querySelector('form');

    // Attaching a submit event listener to the form
    form.addEventListener('submit', function (event) {
        // Getting all input elements within the form
        var inputs = form.querySelectorAll('input[type="text"]');

        // Flag to check if at least one field is filled
        var isFilled = false;

        // Loop through each input field
        inputs.forEach(function (input) {
            // Checking if the input field is not empty
            if (input.value.trim() !== '') {
                isFilled = true;
            }
        });

        // If no field is filled, we show an alert
        if (!isFilled) {
            event.preventDefault();
            alert('Please fill at least one field before submitting.');
        }
    });
});
