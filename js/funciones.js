const elementClicked = document.querySelector(".menu-toggle");
const elementYouWantToShow = document.querySelector(".main-navigation");

elementClicked.addEventListener("click", ()=>{
  elementYouWantToShow.classList.toggle("active");
});