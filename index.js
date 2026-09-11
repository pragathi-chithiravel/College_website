function menuBar(){
    let nav=document.querySelector(".nav");
    console.log("clicked");
    nav.classList.add("show");
}


function alertBox(){
    let fname=document.getElementById("fname");
    let lname=document.getElementById("lname");
    let mailid=document.getElementById("mailid");
    let mobile=document.getElementById("mobile-no");
    let qualification=document.getElementById("qualification");
    let CGPA=document.getElementById("CGPA");
    let courses=document.getElementById("courses");

    document.getElementById("fnameError").innerHTML = "";
    document.getElementById("lnameError").innerHTML = "";
    document.getElementById("mailidError").innerHTML = "";
    document.getElementById("mobileError").innerHTML = "";
    document.getElementById("qualificationError").innerHTML = "";
    document.getElementById("CGPAError").innerHTML = "";
    document.getElementById("coursesError").innerHTML = "";

     if(fname.value.trim() === ""){
        document.getElementById("fnameError").innerHTML = "Please Enter Your First Name";
        return false;
     }
     if(lname.value.trim() === ""){
        document.getElementById("lnameError").innerHTML = "Please Enter Your Last Name";
        return false;
     }
     if(mailid.value.trim() === ""){
        document.getElementById("mailidError").innerHTML = "Please Enter Your Mail Id";
        return false;
     }
     if(mobile.value.trim() === ""){
        document.getElementById("mobileError").innerHTML = "Please Enter Your Mobile No";
        return false;
     }
     if(qualification.value.trim() === ""){
        document.getElementById("qualificationError").innerHTML = "Plese Enter Your Qualification";
        return false;
     }
     if(CGPA.value.trim() === ""){
        document.getElementById("CGPAError").innerHTML = "Please Enter Your CGPA";
        return false;
     }
     if(courses.value.trim() === ""){
        document.getElementById("coursesError").innerHTML = "Please Select Your Course";
        return false;
     }
     
     alert("Submited Successfully !")
    return true;
     }
    


const currentPage = window.location.pathname.split("/").pop();

const navLinks = document.querySelectorAll(".navbar-nav .nav-link")

navLinks.forEach(link =>{
    if(link.getAttribute("href") === currentPage){
        link.classList.add("active");
    }
})

