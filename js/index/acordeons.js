$(document).ready(function () {
const trigger = document.querySelectorAll(".triggerRules");
const content = document.querySelectorAll(".contentRules");

window.addEventListener("load", (event) => {
  content.forEach((el, index) => {
    const height = el.scrollHeight;
    el.style.setProperty("--max-height", height + "px");
  });
});

trigger.forEach((el, index) => {
  el.addEventListener("click", (event) => {
    event.target.classList.toggle("is-open");
    event.target.nextElementSibling.classList.toggle("is-open");
  });
});
});
