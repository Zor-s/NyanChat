const form = document.querySelector('#form');
const chats = document.querySelector('.chats');
const sendBtn = document.getElementById('send');
const message = document.getElementById('message');
const chatBox = document.querySelector('.chat-box');

if(form) {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
    });
}

if(sendBtn) {
    //* send message
    sendBtn.onclick = function() {
        let xhr = new XMLHttpRequest();

        xhr.open('POST', '../backend/sendMessage.php', true);

        xhr.onload = function() {
            if(this.status == 200) {
                message.value = '';
            }
        }

        let formData = new FormData(form);
        xhr.send(formData);
    }
}

//* load users
if(chats) {
    setInterval(() => {
        let xhr = new XMLHttpRequest();
    
        xhr.open('POST', '../backend/loadUsers.php', true);
    
        xhr.onload = function() {
            if(this.status == 200) {
                let data = this.response;
                chats.innerHTML = data;
            }
        }
    
        xhr.send();
    }, 500);
}

//* load chat
if(chatBox) {
    setInterval(() => {
        let xhr = new XMLHttpRequest();
    
        xhr.open('POST', '../backend/loadChats.php', true);
    
        xhr.onload = function() {
            if(this.status == 200) {
                let data = this.response;
                chatBox.innerHTML = data;
            }
        }
    
        let formData = new FormData(form);
        xhr.send(formData);
    }, 500);    
}




// DINNO METHODS
function autoExpand(element) {
    element.style.height = "auto";
    element.style.height = (element.scrollHeight > 60 ? 60: element.scrollHeight) + "px";
}