const body = document.querySelector(".js--body");

export function frozeBody() {
  if(!body) return;

  if (!body.classList.contains("is-frozen"))
    body.classList.add("is-frozen");
}

export function unfrozeBody() {
  if(!body) return;

  body.classList.remove("is-frozen");
}