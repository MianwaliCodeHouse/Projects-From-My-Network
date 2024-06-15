// Sticky NavBar and top move icon
let navbar=document.querySelector("#sticky");
window.onscroll=()=>{
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 480) {   
    if(!navbar.classList.contains("sticky")){
      navbar.classList.add("sticky");
      TopIcon.style.display="block"
    }
  }else{
    navbar.classList.remove("sticky");
    TopIcon.style.display="none"
  }
}



// Responsive NavBar 
let icon=document.querySelector("nav .icon");

icon.onclick=()=>{
  let element=document.querySelector("nav .links");
  if(element.classList.contains("show")){
    element.classList.remove("show")
  }else{
    element.classList.add("show")
  }
}




