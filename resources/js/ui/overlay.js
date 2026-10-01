import { Overlay } from "../../../vendor/cadud/helpers/resources/js/components/Overlay";

export function initOverlay() {
  // 1. Inicializa o seletor do dialog
  Overlay.init(".js--overlay");

  // 2. Botão de fechar
  const closeBtn = document.querySelector(".js--overlay-close");
  if (closeBtn) {
    closeBtn.addEventListener("click", () => Overlay.close());
  }

  // 3. Botões de Formulário
  const formBtns = document.querySelectorAll(".js--form-btn");
  formBtns.forEach(btn => {
    btn.addEventListener("click", () => Overlay.showModule(".js--overlay-module", 0));
  });

  // 4. Botões de Privacidade
  const privacyBtns = document.querySelectorAll(".js--privacy-btn");
  privacyBtns.forEach(btn => {
    btn.addEventListener("click", () => Overlay.showModule(".js--overlay-module", 1));
  });
}