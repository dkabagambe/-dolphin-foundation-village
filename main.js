const hamburger = document.getElementById("hamburger");
hamburger.addEventListener("click", function (e) {
  const ul = document.getElementById("menu");
  ul.classList.toggle("show");
  hamburger.classList.toggle("cross");
});
const accordion = document.getElementsByClassName("container");

for (i = 0; i < accordion.length; i++) {
  accordion[i].addEventListener("click", function () {
    this.classList.toggle("active");
  });
}
