
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                flashMessage.style.transition = 'opacity 0.3s ease-out';
                flashMessage.style.opacity = '0';
                setTimeout(function() {
                    flashMessage.remove();
                }, 300); // Temps pour finir la transition
            }
        }, 3000); // 5 secondes
    });

