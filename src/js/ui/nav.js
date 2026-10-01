export function initNav() {
  const navMenu = document.querySelector(".js--nav-menu");

  navMenu.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", e => {
      e.preventDefault();
      const target = document.querySelector(link.getAttribute("href"));
      target.scrollIntoView({ behavior: "smooth" });
    });
  });

  const controll = document.querySelector(".js--nav-controll");
  
  controll.addEventListener("click", () => {
    navMenu.classList.toggle("is-opened");
  })
}