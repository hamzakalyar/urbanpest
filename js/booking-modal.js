/**
 * UrbanPest — Dedicated Service Booking Modal JS
 * Handles dynamic pre-filling of the selected service, modal open/close,
 * keyboard accessibility, and seamless AJAX booking dispatch.
 */

document.addEventListener('DOMContentLoaded', () => {
  const modalBackdrop  = document.getElementById('serviceBookingModalBackdrop');
  if (!modalBackdrop) return;

  const modalClose     = document.getElementById('bookingModalClose');
  const serviceForm    = document.getElementById('serviceBookingForm');
  const serviceInput   = document.getElementById('bookingModalServiceInput');
  const serviceNameEl  = document.getElementById('bookingModalServiceName');
  const serviceDispEl  = document.getElementById('bookingModalServiceDisplay');
  const submitBtn      = document.getElementById('bookingModalSubmitBtn');
  const errorEl        = document.getElementById('bookingModalError');
  const formView       = document.getElementById('bookingModalFormView');
  const successView    = document.getElementById('bookingModalSuccessView');
  const successTicket  = document.getElementById('bookingSuccessTicket');
  const successMsg     = document.getElementById('bookingSuccessMessage');
  const successCloseBtn= document.getElementById('bookingSuccessCloseBtn');

  // Service lookup map for icons
  const serviceIcons = {
    'household-pest-control': '🏠',
    'cockroach-control': '🪳',
    'ant-control': '🐜',
    'spider-control': '🕷️',
    'wasp-bee-control': '🐝',
    'silverfish-control': '📑',
    'fly-control': '🪰',
    'crawling-flying-insects': '🦟',
    'preventative-pest-treatments': '🛡️',
    'internal-external-treatments': '🏡',
    'pest-inspections-identification': '🔍',
    'targeted-pest-treatments': '🎯',
    'rodent-control': '🐀',
    'termite-control': '🪵',
    'bird-control': '🦅',
    'smart-traps': '📡',
    'general': '🛡️'
  };

  /**
   * Open modal with a specific service preloaded
   */
  window.openServiceBookingModal = function(slug, name, propertyType) {
    slug = slug || 'general';
    name = name || (slug === 'general' ? 'General Household Pest Control' : formatServiceName(slug));

    if (serviceInput) serviceInput.value = slug;
    if (serviceNameEl) serviceNameEl.textContent = name;
    if (serviceDispEl) serviceDispEl.textContent = name;

    const iconEl = document.getElementById('bookingModalServiceIcon');
    if (iconEl) {
      iconEl.textContent = serviceIcons[slug] || '🛡️';
    }

    if (submitBtn) {
      const btnText = submitBtn.querySelector('.btn-text');
      if (btnText) btnText.textContent = `Confirm Survey Request →`;
    }

    // Survey Scope handling (Residential vs Commercial)
    const scopeResRadio  = document.getElementById('modalScopeRes');
    const scopeCommRadio = document.getElementById('modalScopeComm');
    const scopeResLbl    = document.getElementById('modalScopeResLabel');
    const scopeCommLbl   = document.getElementById('modalScopeCommLabel');
    const propSelect     = document.getElementById('book-property');
    const compInput      = document.getElementById('book-company');

    function setScope(isCommercial) {
      if (isCommercial) {
        if (scopeCommRadio) scopeCommRadio.checked = true;
        if (scopeCommLbl) {
          scopeCommLbl.style.border = '2px solid var(--color-accent, #D91C24)';
          scopeCommLbl.style.background = '#FEF2F2';
          scopeCommLbl.style.color = '#991B1B';
          scopeCommLbl.style.fontWeight = '700';
        }
        if (scopeResLbl) {
          scopeResLbl.style.border = '1px solid #CBD5E1';
          scopeResLbl.style.background = '#FFFFFF';
          scopeResLbl.style.color = '#475569';
          scopeResLbl.style.fontWeight = '600';
        }
        if (propSelect && propSelect.value.startsWith('Residential')) {
          propSelect.value = 'Commercial Office';
        }
        if (compInput) compInput.placeholder = 'e.g. Business / Commercial Facility Name';
      } else {
        if (scopeResRadio) scopeResRadio.checked = true;
        if (scopeResLbl) {
          scopeResLbl.style.border = '2px solid var(--color-accent, #D91C24)';
          scopeResLbl.style.background = '#FEF2F2';
          scopeResLbl.style.color = '#991B1B';
          scopeResLbl.style.fontWeight = '700';
        }
        if (scopeCommLbl) {
          scopeCommLbl.style.border = '1px solid #CBD5E1';
          scopeCommLbl.style.background = '#FFFFFF';
          scopeCommLbl.style.color = '#475569';
          scopeCommLbl.style.fontWeight = '600';
        }
        if (propSelect && !propSelect.value.startsWith('Residential')) {
          propSelect.value = 'Residential Home / House';
        }
        if (compInput) compInput.placeholder = 'e.g. Residential Home or Suburb';
      }
    }

    if (propertyType === 'commercial') {
      setScope(true);
    } else {
      setScope(false);
    }

    if (scopeResRadio) scopeResRadio.onchange = () => setScope(false);
    if (scopeCommRadio) scopeCommRadio.onchange = () => setScope(true);

    // Reset views
    if (formView) formView.style.display = 'block';
    if (successView) successView.style.display = 'none';
    if (errorEl) {
      errorEl.style.display = 'none';
      errorEl.textContent = '';
    }

    modalBackdrop.classList.add('active');
    modalBackdrop.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';

    // Focus name field
    setTimeout(() => {
      const nameField = document.getElementById('book-name');
      if (nameField) nameField.focus();
    }, 150);
  };

  /**
   * Close modal
   */
  window.closeServiceBookingModal = function() {
    modalBackdrop.classList.remove('active');
    modalBackdrop.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  };

  // Close handlers
  if (modalClose) {
    modalClose.addEventListener('click', closeServiceBookingModal);
  }

  if (successCloseBtn) {
    successCloseBtn.addEventListener('click', closeServiceBookingModal);
  }

  modalBackdrop.addEventListener('click', (e) => {
    if (e.target === modalBackdrop) {
      closeServiceBookingModal();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modalBackdrop.classList.contains('active')) {
      closeServiceBookingModal();
    }
  });

  // Global delegation for any trigger button
  document.addEventListener('click', (e) => {
    const trigger = e.target.closest('.open-booking-modal, [data-book-service]');
    if (trigger) {
      e.preventDefault();
      const slug = trigger.getAttribute('data-book-service') || trigger.getAttribute('data-service-slug') || 'general';
      const name = trigger.getAttribute('data-service-name') || '';
      const propType = trigger.getAttribute('data-property-type') || trigger.getAttribute('data-survey-type') || '';
      openServiceBookingModal(slug, name, propType);
    }
  });

  // AJAX Form Submission
  if (serviceForm) {
    serviceForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const btnText = submitBtn.querySelector('.btn-text');
      const btnSpinner = submitBtn.querySelector('.btn-spinner');
      if (errorEl) errorEl.style.display = 'none';

      submitBtn.disabled = true;
      if (btnText) btnText.style.display = 'none';
      if (btnSpinner) btnSpinner.style.display = 'inline-block';

      try {
        const formData = new FormData(serviceForm);
        formData.append('is_ajax', '1');

        const response = await fetch('/booking-handler.php', {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest'
          }
        });

        const data = await response.json();

        if (response.ok && data.success) {
          // Success view
          if (formView) formView.style.display = 'none';
          if (successView) successView.style.display = 'block';
          if (successTicket) successTicket.textContent = data.ticket_no || 'US-' + Date.now().toString().slice(-6);
          if (successMsg) successMsg.textContent = data.message || 'Your pest survey request has been confirmed. Perth dispatch will contact you shortly.';
          serviceForm.reset();
        } else {
          throw new Error(data.message || 'Please check all required fields and try again.');
        }
      } catch (err) {
        if (errorEl) {
          errorEl.textContent = err.message || 'Unable to submit booking request. Please call +61 410 148 126 for direct dispatch.';
          errorEl.style.display = 'block';
        }
      } finally {
        submitBtn.disabled = false;
        if (btnText) btnText.style.display = 'inline-block';
        if (btnSpinner) btnSpinner.style.display = 'none';
      }
    });
  }

  // Check URL params for auto-open (e.g. ?book=termite-control)
  const urlParams = new URLSearchParams(window.location.search);
  const autoBookService = urlParams.get('book');
  if (autoBookService) {
    openServiceBookingModal(autoBookService);
  }

  function formatServiceName(slug) {
    return slug
      .split('-')
      .map(word => word.charAt(0).toUpperCase() + word.slice(1))
      .join(' ');
  }
});
