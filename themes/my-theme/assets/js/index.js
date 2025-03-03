const navLinks = document.querySelectorAll(".nav-link");
let nav = document.querySelector(".active")
navLinks.forEach(link => {
    link.addEventListener("click", (e) => {
        nav.classList.remove("active");
        link.classList.add("active");
        nav = link;
    });
});

const social = document.querySelectorAll('social-icon')

social.forEach(icon=>{
    icon.classList.add('social-icon-hover')
    icon.addEventListener("mouseover",()=>{
        icon.classList.remove('social-icon-hover')
    })

    icon.addEventListener("mouseout",()=>{
        icon.classList.add('social-icon-hover')
    })
})