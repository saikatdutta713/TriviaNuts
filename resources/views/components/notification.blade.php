<!-- resources/views/components/notification.blade.php -->
<div class="notification {{ $type }}">

    {{ $message }}
    <span class="close" onclick="closeNotification(this)">&times;</span>
</div>

<script>
    // JavaScript code for closing the notification
    function closeNotification(button) {
        var notification = button.parentElement; // Get the parent element (the notification)
        notification.style.display = 'none'; // Hide the notification
    }

    // Automatically close the notification after 20 seconds
    setTimeout(function() {
        var notification = document.querySelector('.notification');
        if (notification) {
            notification.remove();
        }
    }, 20000);
</script>