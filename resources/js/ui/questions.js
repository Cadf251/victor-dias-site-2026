export function initQuestions() {
  const questions = document.querySelectorAll("[data-question-active]");

  questions.forEach((q) => {    
    q.addEventListener("click", () => {
      var active = JSON.parse(q.dataset.questionActive);
      q.dataset.questionActive = !active;
    })
  })
}