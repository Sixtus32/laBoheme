const contactForm=document.querySelector("#contact-form"),
    contactMessage=document.querySelector("#contact-message");


const sendEmail=(e)=>{
    e.preventDefault();

    // serviceID - templateID - #form - publicKey
    emailjs
      .sendForm(
        "service_0rc7c0i",
        "template_qikeawv",
        "#contact-form",
        "iPMCzP4cxGhu2wlh4"
      )
      .then(
        () => {
          // show sent message
          contactMessage.textContent = "Mensaje Enviado ✅";

          // remove message after five seconds
          setTimeout(() => {
            contactMessage.textContent = "";
          }, 5000);

          //Clear input fields
          contactForm.reset();
        },
        () => {
          // show error message
          contactMessage.textContent = "Message No Enviado (service error) ❌";
        }
      );
}

contactForm.addEventListener('submit', sendEmail);