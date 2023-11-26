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

