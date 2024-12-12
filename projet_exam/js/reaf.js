function whiteUsername() {
    const params = new URLSearchParams(window.location.search);
    const email = params.get('username');
    if (email) {
        document.getElementById('username').value = email;
        var alert = document.getElementById('alert');
        alert.style.display = 'flex';
    } else {
        alert.style.display = 'none';
    }
}