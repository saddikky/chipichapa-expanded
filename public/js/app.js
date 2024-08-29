document.addEventListener('DOMContentLoaded', () => {
    const statusMessages = document.querySelectorAll('.status-message');

    statusMessages.forEach(span => {
        const status = span.getAttribute('data-status');
        let tooltipText = '';

        if (status === 'Denied') {
            tooltipText = 'Please make a new appointment.';
        } else if (status === 'Accepted') {
            tooltipText = 'Check your inbox for detailed information.';
        } else {
            tooltipText = 'Waiting for response';
        }

        span.setAttribute('data-tooltip', tooltipText);
    });
});