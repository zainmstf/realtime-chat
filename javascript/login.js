const form = document.querySelector('.login form'),
    continueBtn = form.querySelector('.button input'),
    errorText = form.querySelector('.error-txt');

form.onsubmit = (e) => {
    e.preventDefault(); // Mencegah reload page
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest(); //Membuat XML object
    xhr.open("POST", 'php/login.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == "Success") {
                    location.href = "users.php";
                }
                else {
                    errorText.style.display = 'block';
                    errorText.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(form); // Membuat formdata object
    xhr.send(formData); // Mengirim data form kedalam php
}