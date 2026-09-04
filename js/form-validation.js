/**
 * UrbanPest — Form Validation JS
 * Client-side validation with inline error messages and real-time feedback.
 */

document.addEventListener('DOMContentLoaded', () => {
  const contactForm = document.getElementById('contactForm');
  if (!contactForm) return;

  const validators = {
    name: {
      validate: (value) => value.trim().length >= 2,
      message: 'Please enter your full name (at least 2 characters).'
    },
    company: {
      validate: (value) => value.trim().length >= 2,
      message: 'Please enter your company name.'
    },
    email: {
      validate: (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value.trim()),
      message: 'Please enter a valid email address.'
    },
    phone: {
      validate: (value) => {
        if (!value.trim()) return true; // optional
        return /^[\+]?[\d\s\-\(\)]{7,20}$/.test(value.trim());
      },
      message: 'Please enter a valid phone number.'
    },
    service: {
      validate: (value) => value.trim() !== '',
      message: 'Please select a service of interest.'
    },
    message: {
      validate: (value) => value.trim().length >= 10,
      message: 'Please enter a message (at least 10 characters).'
    }
  };

  // Real-time validation on blur
  Object.keys(validators).forEach(fieldName => {
    const input = contactForm.querySelector(`[name="${fieldName}"]`);
    if (!input) return;

    input.addEventListener('blur', () => {
      validateField(input, validators[fieldName]);
    });

    input.addEventListener('input', () => {
      // Clear error on typing
      if (input.classList.contains('error')) {
        validateField(input, validators[fieldName]);
      }
    });
  });

  // Form submission
  contactForm.addEventListener('submit', (e) => {
    let isValid = true;

    Object.keys(validators).forEach(fieldName => {
      const input = contactForm.querySelector(`[name="${fieldName}"]`);
      if (!input) return;

      if (!validateField(input, validators[fieldName])) {
        isValid = false;
      }
    });

    if (!isValid) {
      e.preventDefault();
      // Scroll to first error
      const firstError = contactForm.querySelector('.form-input.error, .form-select.error, .form-textarea.error');
      if (firstError) {
        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        firstError.focus();
      }
    }
  });

  function validateField(input, validator) {
    const errorEl = input.parentElement.querySelector('.form-error');
    const value = input.value;
    const isValid = validator.validate(value);

    if (!isValid) {
      input.classList.add('error');
      if (errorEl) {
        errorEl.textContent = validator.message;
        errorEl.classList.add('visible');
      }
    } else {
      input.classList.remove('error');
      if (errorEl) {
        errorEl.classList.remove('visible');
      }
    }

    return isValid;
  }
});
