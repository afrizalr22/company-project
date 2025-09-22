document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("layanan-menu");
    const toggle = document.getElementById("layanan-toggle");
    const dropdown = document.getElementById("layanan-dropdown");

    if (!menu || !dropdown) {
        console.error("#layanan-menu atau #layanan-dropdown tidak ditemukan", {
            menu,
            dropdown,
        });
        return;
    }

    // tampilkan (hilangkan hidden lalu jalankan transition)
    function showDropdown() {
        dropdown.classList.remove("hidden");
        // next frame supaya transition bisa berjalan
        requestAnimationFrame(() => {
            dropdown.classList.remove("opacity-0", "scale-95");
            dropdown.classList.add("opacity-100", "scale-100");
            toggle.setAttribute("aria-expanded", "true");
        });
    }

    // sembunyikan (play reverse transition lalu tambah hidden setelah selesai)
    function hideDropdown() {
        dropdown.classList.add("opacity-0", "scale-95");
        dropdown.classList.remove("opacity-100", "scale-100");
        toggle.setAttribute("aria-expanded", "false");

        // ketika transition selesai, masukkan hidden agar tidak mengambil ruang/tab
        const onEnd = (e) => {
            // pastikan event mengenai opacity atau transform
            if (
                e.propertyName === "opacity" ||
                e.propertyName === "transform"
            ) {
                dropdown.classList.add("hidden");
                dropdown.removeEventListener("transitionend", onEnd);
            }
        };
        dropdown.addEventListener("transitionend", onEnd);
    }

    // events mouse
    menu.addEventListener("mouseenter", showDropdown);
    menu.addEventListener("mouseleave", hideDropdown);

    // fallback untuk touch: toggle dengan click
    toggle.addEventListener("click", (e) => {
        e.preventDefault();
        if (dropdown.classList.contains("hidden")) showDropdown();
        else hideDropdown();
    });

    // debugging quick-check: uncomment kalau mau cek cepat
    // console.log('Dropdown ready', { menu, dropdown });
});
