const notificationMessage = document.querySelectorAll(".notification__item");
const notificationState = document.querySelectorAll(".message__state");
const notificationLinks=document.querySelectorAll(".message");

notificationMessage.forEach((element, index) => {
  element.addEventListener("mouseenter", () => {
    notificationState[index].classList.remove("ri-mail-line");
    notificationState[index].classList.add("ri-mail-open-line");
  });

  element.addEventListener("mouseleave", () => {
    notificationState[index].classList.remove("ri-mail-open-line");
    notificationState[index].classList.add("ri-mail-line");
  });
});

notificationMessage.forEach((element, index) => {
  element.addEventListener("click", () => {
    window.location.href = notificationLinks[index].href;
  })
})


const servicesCards=document.querySelectorAll(".views__image");
const servicesFav=document.querySelectorAll(".services__fav");

servicesCards.forEach((element,index) => {
  element.addEventListener("click", () =>{

    if(servicesFav[index].classList.contains("ri-heart-line")){
      servicesFav[index].classList.remove("ri-heart-line");
      servicesFav[index].classList.add("ri-heart-fill");
      servicesFav[index].classList.add("active");
    }else{
      servicesFav[index].classList.remove("ri-heart-fill");
      servicesFav[index].classList.add("ri-heart-line");
      servicesFav[index].classList.remove("active");
    }

  })
})

