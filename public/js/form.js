// document.getElementById('submit-form').addEventListener('submit', function(event) {
//     event.preventDefault(); // Mencegah aksi default pengiriman form

//     const form = event.target;
//     const submitButton = document.getElementById('submit-button');
//     const kotaInput = document.getElementById('kota');
//     kotaInput.value = kotaInput.value.toUpperCase();
//     const formData = new FormData(form);

//     submitButton.disabled = true;
//     submitButton.textContent = 'Loading...';


//     // Kirim data ke server
//     fetch('https://script.google.com/macros/s/AKfycbzGLjFmZ70vtelYuDZwYA8qqSUkCo0TyfLiZjNkFIQvA2Yj_bx3XWlVBAoG6JLAaw0u/exec', {
//         method: 'POST',
//         body: formData,
//     })
//     .then(response => response.json())
//     .then(data => {
//         const name = document.querySelector('input[name="Nama"]').value;
//         const productName = document.querySelector('input[name="Produk"]').value;
//         const city = document.querySelector('input[name="Kota"]').value;
//         const productPrice = document.querySelector('input[name="Harga"]').value;
//         const toCity = city.toUpperCase();
//         let message = "Pembelian :\n\n";
//         message += `Nama : ${name}\n`;
//         message += `Nama Produk: ${productName}\n`;
//         message += `Kota: ${toCity}\n`;
//         message += `Harga Produk: ${productPrice}\n`;
//         message += "Konfirmasi Pembelian";

//         const encodedMessage = encodeURIComponent(message);

//         const whatsappURL = `https://wa.me/6285156371803?text=${encodedMessage}`;

//         window.location.href = whatsappURL;

//         const alertBox = document.getElementById('alert-box');
//         alertBox.style.display = 'block';

//         setTimeout(() => {
//             history.back();
//             submitButton.disabled = false;
//             submitButton.textContent = 'Submit';
//         }, 1000);
//     })
//     .catch(error => {
//         console.error('Error:', error);
//         submitButton.disabled = false;
//         submitButton.textContent = 'Submit';
//     });
// });
