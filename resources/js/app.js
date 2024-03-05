// session_cleanup.js

window.addEventListener('beforeunload', function() {
    document.cookie = "laravel_session=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
});

