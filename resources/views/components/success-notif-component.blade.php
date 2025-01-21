
  <style>
    .success-notification {
      position: fixed;
      top: 1rem;
      right: 1rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 1rem 3rem 1rem 1rem;
      background: linear-gradient(135deg, #28a745 0%, #218838 100%);
      color: white;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      transform: translateX(100%);
      opacity: 0;
      transition: all 0.3s ease-in-out;
    }

    .success-notification.show {
      transform: translateX(0);
      opacity: 1;
    }

    .success-notification .close-button {
      position: absolute;
      top: 0.5rem;
      right: 0.5rem;
      background: none;
      border: none;
      color: rgba(255, 255, 255, 0.8);
      cursor: pointer;
      padding: 0.25rem;
    }

    .success-notification .close-button:hover {
      color: white;
    }
  </style>
  <template id="success-notification-template">
    <div class="success-notification">
      <i data-lucide="check-circle" class="h-5 w-5"></i>
      <p class="message"></p>
      <button class="close-button">
        <i data-lucide="x" class="h-4 w-4"></i>
      </button>
    </div>
  </template>

  <script>
    class SuccessNotification extends HTMLElement {
      constructor() {
        super();
        this.template = document.getElementById('success-notification-template');
      }

      show(message, duration = 4000) {
        const notification = this.template.content.cloneNode(true);
        notification.querySelector('.message').textContent = message;
        
        document.body.appendChild(notification);
        
        const notificationElement = document.querySelector('.success-notification');
        
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Show notification
        requestAnimationFrame(() => {
          notificationElement.classList.add('show');
        });

        // Setup close button
        notificationElement.querySelector('.close-button').addEventListener('click', () => {
          this.dismiss(notificationElement);
        });

        // Auto dismiss
        if (duration) {
          setTimeout(() => {
            this.dismiss(notificationElement);
          }, duration);
        }
      }

      dismiss(element) {
        element.classList.remove('show');
        setTimeout(() => {
          element.remove();
        }, 300);
      }
    }

    customElements.define('success-notification', SuccessNotification);

    // Example usage:
    // const successNotification = document.createElement('success-notification');
    // successNotification.show('Action completed successfully!');
  </script>
