document.addEventListener('DOMContentLoaded', function() {
    const logoutButton = document.getElementById('logoutButton');

    logoutButton.addEventListener('click', function() {
        // Perform logout actions here
        // For example, redirect to a login page or clear session data

        // For demonstration purposes, we'll just display an alert
        alert('You have been logged out.');
    });
});