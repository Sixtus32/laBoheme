/*=============== SEARCH ===============*/
// const searchBtn=document.querySelector('#search-button'),
//       searchClose=document.querySelector('#search-close'),
//       searchContent=document.querySelector('#search-content'),
//       searchInput=document.querySelector('#search-input');

// if(searchInput.value.length > 0){
//   searchClose.style['display']='none';
// }

// // menu show
// if(searchBtn) {
//   searchBtn.addEventListener('click', () => {
//     searchContent.classList.add('show-search');
//   });
// }

// // menu hidden
//   if(searchClose){
//     searchClose.addEventListener('click', () => {
//       searchContent.classList.remove('show-search');
//     });
//   }
/*=============== LOGIN ===============*/
// const loginBtn=document.querySelector("#login-button"),
//       loginClose=document.querySelector("#login-close"),
//       loginContent=document.querySelector("#login-content");

// if(loginBtn){
//   loginBtn.addEventListener('click', () => {
//     loginContent.classList.add('show-login');
//   })
// }
// if(loginClose){
//   loginClose.addEventListener('click', () => {
//     loginContent.classList.remove('show-login');
//   })
// }
console.log("Hola Mundo.");
/*=============== SHOW HIDDEN - PASSWORD ===============*/
const showHiddenPass = (inputPass, inputIcon) =>{
   const input = document.querySelector(inputPass),
         iconEye = document.querySelector(inputIcon)
    
   iconEye.addEventListener('click', () =>{
       // Change password to text
       if(input.type == 'password'){
           // Switch to text
           input.type = 'text'

           // Add icon
           iconEye.classList.add('ri-eye-line')
           // Remove icon
           iconEye.classList.remove('ri-eye-off-line')
       }else{
           // Change to password
           input.type = 'password'

           // Remove icon
           iconEye.classList.remove('ri-eye-line')
           // Add icon
           iconEye.classList.add('ri-eye-off-line')
       }
   })
}



document.addEventListener('DOMContentLoaded', () => {
  showHiddenPass('#login-password','#input-icon');
});
/*=============== ADD SHADOW HEADER ===============*/


/*=============== HOME SWIPER ===============*/

/*=============== FEATURED SWIPER ===============*/


/*=============== NEW SWIPER ===============*/


/*=============== TESTIMONIAL SWIPER ===============*/


/*=============== SHOW SCROLL UP ===============*/ 


/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/


/*=============== DARK LIGHT THEME ===============*/ 


/*=============== SCROLL REVEAL ANIMATION ===============*/
