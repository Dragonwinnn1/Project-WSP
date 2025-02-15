document.getElementById('loginForm').addEventListener('submit', function(event) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const captcha = document.getElementById('captcha').value;

    if (!username || !password || !captcha) {
        alert('Semua kolom harus diisi!');
        event.preventDefault(); // Mencegah form untuk dikirim
    }
});
