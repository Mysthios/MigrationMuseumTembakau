document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const popup = document.getElementById('popup');
    const popupName = document.getElementById('popup-name');
    const popupEmail = document.getElementById('popup-email');
    const popupAmount = document.getElementById('popup-amount');
    const popupQris = document.getElementById('popup-qris');
    const customAmountInput = document.getElementById('custom-amount');
    const customAmountContainer = document.getElementById('custom-amount-container');

    // Tangani ketika form disubmit
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Mencegah form dari refresh halaman

        // Ambil nilai dari input form
        const donorName = document.getElementById('donor-name').value;
        const email = document.getElementById('email').value;
        const donationAmount = document.getElementById('donation-amount').value;

        // Jika memilih "Lainnya" untuk nominal, ambil nilai custom
        let donationAmountValue = donationAmount === 'custom' ? customAmountInput.value : donationAmount;

        // Masukkan data ke dalam popup
        popupName.textContent = donorName;
        popupEmail.textContent = email;
        popupAmount.textContent = `Rp${parseInt(donationAmountValue).toLocaleString()}`;

        // Tampilkan QRIS (Ganti gambar dengan gambar asli sesuai QRIS dari Dana)
        popupQris.src = 'qris-placeholder.png'; // Ganti dengan gambar QRIS yang valid

        // Tampilkan popup
        popup.classList.remove('hidden');
        popup.classList.add('animate-fade-in');

        // Reset form setelah popup muncul (optional)
        form.reset();
    });

    // Fungsi untuk menutup pop-up
    window.closePopup = function () {
        popup.classList.add('hidden');
    };

    // Menampilkan input custom amount jika "Lainnya" dipilih
    document.getElementById('donation-amount').addEventListener('change', function () {
        if (this.value === 'custom') {
            customAmountContainer.classList.remove('hidden');
        } else {
            customAmountContainer.classList.add('hidden');
        }
    });
});
