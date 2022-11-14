const hamburger = document.getElementById("hamburger");
hamburger.addEventListener("click", function (e) {
  const ul = document.getElementById("menu");
  ul.classList.toggle("show");
  hamburger.classList.toggle("cross");
});
