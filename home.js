//  let slideindex=0
// slideShow();

// function slideShow(){
//     let i;
//     // let slide=document.getElementsByClassName("slide-img");
//     let slide=document.getElementsByClassName("d-block");
//     let dash=document.getElementsByClassName("dash");
//     for(i = 0;i < slide.length; i++){
//         slide[i].style.display="none";
//     }
//     slideindex++;
//     if(slideindex > slide.length){slideindex = 1};
//     for(i = 0; i < dash.length; i++){
//         dash[i].className=dash[i].className.replace("active","");
//     }
//     slide[slideindex - 1].style.display="block";
//     dash[slideindex - 1].className += " active";
//     setTimeout(slideShow,2000);
// }