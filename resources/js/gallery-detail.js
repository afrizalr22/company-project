document.addEventListener("DOMContentLoaded", () => {
    window.openModal = function (src) {
        let modal = document.getElementById("imageModal");
        let modalImage = document.getElementById("modalImage");

        if (modal && modalImage) {
            modal.classList.remove("hidden");
            modalImage.src = src;
        }
    };

    window.closeModal = function () {
        let modal = document.getElementById("imageModal");
        if (modal) {
            modal.classList.add("hidden");
        }
    };
});
