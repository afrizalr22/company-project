document.addEventListener("DOMContentLoaded", () => {
    const chatBox = document.getElementById("whatsapp-chat");
    const showBtn = document.querySelector(".nexshow-chat");
    const closeBtn = document.querySelector(".close-chat");
    const infoButtons = document.querySelectorAll(".informasi");
    const startChat = document.querySelector(".start-chat");
    const homeChat = document.querySelector(".home-chat");
    const headHome = document.querySelector(".head-home");
    const getNew = document.querySelector(".get-new");
    const getNama = document.getElementById("get-nama");
    const getLabel = document.getElementById("get-label");
    const getNumber = document.createElement("div");
    const sendIt = document.getElementById("send-it");
    const chatInput = document.getElementById("chat-input");

    getNumber.id = "get-number";
    document.body.appendChild(getNumber);

    // Show Chat
    showBtn.addEventListener("click", () => {
        chatBox.classList.remove("hidden");
        chatBox.classList.add("animate-[showchat_0.5s_ease]");
    });

    // Close Chat
    closeBtn.addEventListener("click", () => {
        chatBox.classList.add("hidden");
        startChat.classList.add("hidden");
        homeChat.classList.remove("hidden");
        headHome.classList.remove("hidden");
        getNew.classList.add("hidden");
    });

    // Click on contact
    infoButtons.forEach((info) => {
        info.addEventListener("click", () => {
            const number = info.querySelector(".my-number").textContent.trim();
            const label = info.querySelector(".chat-label").textContent.trim();
            const nama = info.querySelector(".chat-nama").textContent.trim();

            getNumber.textContent = number;
            getNama.textContent = nama;
            getLabel.textContent = label;

            // Toggle view
            startChat.classList.remove("hidden");
            getNew.classList.remove("hidden");
            homeChat.classList.add("hidden");
            headHome.classList.add("hidden");
        });
    });

    // Send message
    sendIt.addEventListener("click", () => {
        const message = chatInput.value.trim();
        const number = getNumber.textContent.trim();
        if (!message || !number) return;

        const baseUrl =
            /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                navigator.userAgent
            )
                ? "whatsapp://send"
                : "https://web.whatsapp.com/send";

        const url = `${baseUrl}?phone=${number}&text=${encodeURIComponent(
            message
        )}`;
        window.open(url, "_blank");
    });
});
