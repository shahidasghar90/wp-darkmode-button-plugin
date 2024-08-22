jQuery(document).ready(function($) {
    // Check if dark mode was previously enabled
    if (localStorage.getItem('darkmode') === 'enabled') {
        $('body').addClass('dark-mode');
        $('#darkmode-toggle').prop('checked', true);
    }

    // Toggle dark mode
    $('#darkmode-toggle').on('change', function() {
        if ($(this).is(':checked')) {
            $('body').addClass('dark-mode');
            localStorage.setItem('darkmode', 'enabled');
        } else {
            $('body').removeClass('dark-mode');
            localStorage.setItem('darkmode', 'disabled');
        }
    });
});
