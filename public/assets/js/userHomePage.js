const body = document.querySelector("body");
const darkLight = document.querySelector("#darkLight");
const sidebar = document.querySelector("#sidebar");
const submenuItems = document.querySelectorAll("#submenu");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector("#collapse-sidebar");
const sidebarExpand = document.querySelector("#expand-sidebar");
sidebarOpen.addEventListener("click", () => sidebar.classList.toggle("close"));

sidebarClose.addEventListener("click", () => {
  sidebar.classList.add("close", "hoverable");
});
sidebarExpand.addEventListener("click", () => {
  sidebar.classList.remove("close", "hoverable");
});

sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
});
sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
});

darkLight.addEventListener("click", () => {
  body.classList.toggle("dark");
  if (body.classList.contains("dark")) {
    document.setI;
    darkLight.classList.replace("ri-sun-line", "ri-moon-line");
  } else {
    darkLight.classList.replace("ri-moon-line", "ri-sun-line");
  }
});

submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});


if (window.innerWidth < 768) {
  sidebar.classList.add("close");
} else {
  sidebar.classList.remove("close");
}

// DROPDOWN MENU DEL PERFIL DE USUARIO.


const profileDropdown = document.querySelector("#profile-list");
let profileBtn = document.querySelector("#dropdown-btn");
let profileIcon = document.querySelector("#profile-arrow-icon");
let showProfileMenu = true;

profileBtn.addEventListener("click", () => {
  if (showProfileMenu) {
    profileDropdown.classList.add("active");
    profileIcon.classList.remove("ri-arrow-down-s-line");
    profileIcon.classList.add("ri-arrow-up-s-line");
    showProfileMenu = false;
  } else {
    profileDropdown.classList.remove("active");
    profileIcon.classList.remove("ri-arrow-up-s-line");
    profileIcon.classList.add("ri-arrow-down-s-line");
    showProfileMenu = true;
  }
});

const notifDropdown = document.querySelector("#notification-dropdown");
let notifBtn=document.querySelector("#bell-btn");
let showNotifInfo = true;

notifBtn.addEventListener("click", ()=>{
  if(showNotifInfo){
    notifDropdown.classList.add("active");
    showNotifInfo=false;
  }else{
    notifDropdown.classList.remove("active");
    showNotifInfo=true;
  }
})



// profileBtn.addEventListener("click", () => {

// })

// let classList = profileDropdown.classList;

// const toggleProfileDropdown = () => classList.toggle("active");

// window.addEventListener("click", function (e) {
//   if (!profileBtn.contains(e.target)) classList.remove("active");
// });

/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/


