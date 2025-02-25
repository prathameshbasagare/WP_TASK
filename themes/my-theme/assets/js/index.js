const navLinks = document.querySelectorAll(".nav-link");
let nav = document.querySelector(".active")
navLinks.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        nav.classList.remove("active");
        link.classList.add("active");
        nav = link;
    });
});
