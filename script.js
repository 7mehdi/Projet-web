document.addEventListener('DOMContentLoaded', function() {
// Get the trigger button and popup container
const signinBtn = document.getElementById('signin-btn');
const signinPopup = document.getElementById('signin-popup');

// Get the close button and form submit button
const closeBtn = document.getElementById('close-btn');
const submitBtn = document.querySelector('button[type="submit"]');

// Show the popup when the trigger button is clicked
signinBtn.addEventListener('click', () => {
  signinPopup.classList.add('show');
});

// Hide the popup when the close button is clicked
closeBtn.addEventListener('click', () => {
  signinPopup.classList.remove('show');
});

// Submit the form when the submit button is clicked
submitBtn.addEventListener('click', (event) => {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Perform form validation and submission
  // ...
});
});