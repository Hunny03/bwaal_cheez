document.addEventListener('DOMContentLoaded', () => {
  const faqButtons = document.querySelectorAll('.faq-question');

  faqButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Toggle active class on clicked FAQ question
      button.classList.toggle('active');

      // Get the corresponding answer div (next sibling)
      const answer = button.nextElementSibling;

      if (button.classList.contains('active')) {
        // Expand answer: dynamically adjust max-height
        answer.style.maxHeight = answer.scrollHeight + 'px';
        answer.style.paddingTop = '15px';
        answer.style.paddingBottom = '15px';
      } else {
        // Collapse answer
        answer.style.maxHeight = null;
        answer.style.paddingTop = '0';
        answer.style.paddingBottom = '0';
      }
    });
  });
});
