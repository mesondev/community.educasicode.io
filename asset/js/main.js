// HAMBURGER MENU
function toggleMenu(){
  document.getElementById("navMenu").classList.toggle("show");
}

// THEME TOGGLE
function toggleTheme(){
  const body = document.body;
  const current = body.getAttribute("data-theme");
  body.setAttribute("data-theme", current === "dark" ? "light" : "dark");
}

// NAVBAR SHADOW ON SCROLL
window.addEventListener("scroll",()=>{
  const nav=document.querySelector(".navbar");
  nav.style.boxShadow = window.scrollY > 50 
    ? "0 10px 30px rgba(0,0,0,0.2)" 
    : "none";
});