function menuBar(){
    let nav=document.querySelector(".nav");
    console.log("clicked");
    nav.classList.add("show");
}



const currentPage = window.location.pathname.split("/").pop();

const navLinks = document.querySelectorAll(".navbar-nav .nav-link")

navLinks.forEach(link =>{
    if(link.getAttribute("href") === currentPage){
        link.classList.add("active");
    }
})

