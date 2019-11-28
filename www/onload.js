function alert_safari() {
    if (navigator.userAgent.includes('Safari') && !navigator.userAgent.includes('Chrome')) {
        alert('Le site marche pas tres bien sur safari, utilise plutot un autre navigateur (genre chome ou firefox)');
    }
}
window.onload = alert_safari;