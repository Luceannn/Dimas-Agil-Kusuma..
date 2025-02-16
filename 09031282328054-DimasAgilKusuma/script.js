function greetUser() {
    alert("Halo! Selamat datang di Project pembuatan website saya.");
}

document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    let name = document.getElementById("name").value;
    let message = document.getElementById("message").value;

    if (name && message) {
        alert(`Terima kasih, ${name}! Pesan Anda telah dikirim.`);
        document.getElementById("contactForm").reset();
    } else {
        alert("Harap isi semua kolom!");
    }
});