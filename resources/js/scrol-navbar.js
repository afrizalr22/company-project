const navbar = document.getElementById("navbar");
const navbarSpacer = document.createElement("div");
navbarSpacer.style.height = navbar.offsetHeight + "px";
navbarSpacer.style.display = "none";
navbar.parentNode.insertBefore(navbarSpacer, navbar.nextSibling);

window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.add(
            "fixed",
            "top-0",
            "left-0",
            "w-full",
            "rounded-none",
            "shadow-lg"
        );
        navbarSpacer.style.display = "block"; // tambahin ruang dummy
    } else {
        navbar.classList.remove(
            "fixed",
            "top-0",
            "left-0",
            "w-full",
            "rounded-none",
            "shadow-lg"
        );
        navbarSpacer.style.display = "none"; // hapus dummy lagi
    }
});
