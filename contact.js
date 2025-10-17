document.addEventListener('DOMContentLoaded', function () {
  const contactForm = document.getElementById('contactForm');
  const formMessage = document.getElementById('formMessage');

  contactForm.addEventListener('submit', function (e) {
    e.preventDefault();

    // Clear previous messages
    formMessage.textContent = '';
    formMessage.style.color = '';
    
    // Collect inputs
    const name = contactForm.elements['name'].value.trim();
    const email = contactForm.elements['email'].value.trim();
    const message = contactForm.elements['message'].value.trim();

    // Validate inputs
    if (!name || !email || !message) {
      showMessage('Please fill in all the fields.', false);
      return;
    }

    if (!validateEmail(email)) {
      showMessage('Please enter a valid email address.', false);
      return;
    }

    // Success message
    showMessage(`Thank you, ${name}! Your message has been sent.`, true);

    // Reset form after a short delay
    setTimeout(() => {
      contactForm.reset();
      formMessage.textContent = '';
    }, 3000);
  });

  function showMessage(msg, isSuccess) {
    formMessage.textContent = msg;
    formMessage.style.color = isSuccess ? '#2e5c42' : '#cc0000';
    formMessage.style.fontWeight = '600';
  }

  function validateEmail(email) {
    // Simple email pattern check
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email.toLowerCase());
  }
});
