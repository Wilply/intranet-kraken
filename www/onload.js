function alert_safari() {
    if (navigator.userAgent.includes('Safari') && !navigator.userAgent.includes('Chrome')) {
        alert('Le site marche pas bien sur safari, utilse plutot un autrenavigateur (genre chome ou firefox)');
    }
}
window.onload = alert_safari;