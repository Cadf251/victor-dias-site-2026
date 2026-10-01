export function initFormValidator() {
  const forms = document.querySelectorAll(".js--form");

  if (!forms) return;

  forms.forEach((form) => {
    const button = form.querySelector(".js--button");

    animateInputs(form);

    button.addEventListener("click", () => {
      validateForm(button.closest(".js--form"));
    })
  });

  // Lógica de inputs
  function animateInputs(form) {
    const inputs = form.querySelectorAll("input, textarea, select");

    inputs.forEach(input => {
      input.addEventListener("input", () => validateField(input.closest(".form-field")));
    });
  }

  function validateForm(form) {
    const fields = form.querySelectorAll(".form-field");

    var ok = true;

    fields.forEach((field) => {
      if (!validateField(field))
      ok = false;
    })

    if (ok) {
      // Logica para o submit
      form.submit();
    }
  }

  function validateField(field) {
    label = field.querySelector("label");
    input = field.querySelector("input, textarea, select");

    if (!validadeInput(input.dataset.validation, input.value, input.required)) {
      if (!input.classList.contains("is-not-valid"))
        input.classList.add("is-not-valid");

      input.classList.remove("is-valid");
    } else {
      if (!input.classList.contains("is-valid"))
        input.classList.add("is-valid");

      input.classList.remove("is-not-valid");
    }

    return true;
  }

  function validadeInput(type, value, required) {
    /* Se não for obrigatório e estiver vazio, devolver true */
    if ((!required) && value == "") return true;
    
    switch(type) {
      case "text":
        return value != "";
      case "email":
        return value.includes("@") && value.includes(".");
      case "phone":
        return value.length == 14;
      default:
        return false;
    }
  }
}