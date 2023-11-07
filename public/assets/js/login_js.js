const showLogin = (logBtn, logClose, logContent, logClose2, signBtn) => {
  const loginBtn = document.querySelector(logBtn),
    signInBtn = document.querySelector(signBtn),
    loginClose = document.querySelector(logClose),
    loginClose2 = document.querySelector(logClose2),
    loginContent = document.querySelector(logContent);

    let btn=document.querySelector("#sign-up-btn");
    let btn2=document.querySelector("#sign-in-btn");

  if (loginBtn) {
    loginBtn.addEventListener("click", () => {
      loginContent.classList.add("show-login");
      btn2.click();
    });
  }

  if (signInBtn) {
    signInBtn.addEventListener("click", () => {
      loginContent.classList.add("show-login");
      btn.click();
    });
  }

  if (loginClose) {
    loginClose.addEventListener("click", () => {
      loginContent.classList.remove("show-login");
    });
  }

  if (loginClose2) {
    loginClose2.addEventListener("click", () => {
      loginContent.classList.remove("show-login");
    });
  }
};
showLogin(
  "#login-button",
  "#login-close",
  "#login-content",
  "#login-close-2",
  "#sigin-button"
);

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".login");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
