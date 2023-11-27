var mixerServices = mixitup("#user-services-content", {
  selectors: {
    target: ".views__card",
  },
  animation: {
    duration: 300,
  },
});


const linkServices = document.querySelectorAll(".userServices__item");

function activeService () {
    linkServices.forEach(l => l.classList.remove("active-service"));
    this.classList.add("active-service");
}

linkServices.forEach(l => l.addEventListener('click', activeService));