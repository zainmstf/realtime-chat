const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button"),
    chatBox = document.querySelector('.chat-box');

form.onsubmit = (e) => {
    e.preventDefault(); // Mencegah reload page
}


sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest(); //Membuat XML object
    xhr.open("POST", 'php/insert-chat.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                inputField.value = "";
            }
        }
    }
    let formData = new FormData(form); // Membuat formdata object
    xhr.send(formData); // Mengirim data form kedalam php
}

setInterval(() => {
    let xhr = new XMLHttpRequest(); //Membuat XML object
    xhr.open("POST", 'php/get-chat.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
            }
        }
    }
    let formData = new FormData(form); // Membuat formdata object
    xhr.send(formData); // Mengirim data form kedalam php
}, 500); //function ini akan berjalan setelah 500ms