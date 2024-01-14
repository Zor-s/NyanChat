const form = document.querySelector("#form");
const chats = document.querySelector(".chats");
const sendBtn = document.getElementById("send");
const message = document.getElementById("message");
const chatBox = document.querySelector(".chat-box");
const interface = document.querySelector(".interface");
let lastMessage = "";

function latestMessage() {
  lastMessage = chatBox.lastElementChild;
  lastMessage.scrollIntoView({ behavior: "smooth", block: "end" });
}


let chatIteration = 0;
const toObserve = chatBox; 
const observer = new MutationObserver((mutationsList) => {
  for (const mutation of mutationsList) {
    if (mutation.type === "childList" && mutation.addedNodes.length > chatIteration) { 
        chatIteration = mutation.addedNodes.length;
        latestMessage();
    }
  }
});

if (chatBox) {
    observer.observe(toObserve, { childList: true });
}



if (form) {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
  });
}

if (sendBtn) {
  //* send message
  sendBtn.onclick = function () {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "../backend/sendMessage.php", true);

    xhr.onload = function () {
      if (this.status == 200) {
        message.value = "";
      }
    };

    let formData = new FormData(form);
    xhr.send(formData);

    let xhr2 = new XMLHttpRequest();

    xhr2.open("POST", "../backend/loadChats.php", true);

    xhr2.onload = function () {
      if (this.status == 200) {
        let data2 = this.response;
        chatBox.innerHTML = data2;
        // latestMessage();
      }
    };

    let formData2 = new FormData(form);
    xhr2.send(formData2);
  };
}

//* load users
if (chats) {
  setInterval(() => {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "../backend/loadUsers.php", true);

    xhr.onload = function () {
      if (this.status == 200) {
        let data = this.response;
        chats.innerHTML = data;
      }
    };

    xhr.send();
  }, 2000);
}

//* load chat
if (chatBox) {
  setInterval(() => {
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "../backend/loadChats.php", true);

    xhr.onload = function () {
      if (this.status == 200) {
        let data = this.response;
        chatBox.innerHTML = data;
        lastMessage = chatBox.lastElementChild;
      }
    };

    let formData = new FormData(form);
    xhr.send(formData);
  }, 1000);
}

// DINNO METHODS
function autoExpand(element) {
  element.style.height = "auto";
  element.style.height =
    (element.scrollHeight > 60 ? 60 : element.scrollHeight) + "px";
}
