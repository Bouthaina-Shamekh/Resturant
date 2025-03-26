


import Pusher from 'pusher-js';

// Make Pusher available globally
window.Pusher = Pusher;


// Initialize Pusher instance
window.pusher = new Pusher('781f8f90926b7f8f25f4', {
    cluster: 'ap2',
    authEndpoint: '/broadcasting/auth',
    auth: {
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    },
});
