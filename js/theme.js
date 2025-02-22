const btn = document.getElementById("button-mode");
btn.addEventListener("click", theme);

function theme() {
  const html = document.documentElement;
  html.classList.toggle("dark-mode");
  if (html.classList.contains("dark-mode")) {
    btn.innerHTML = "Light Mode";
  } else {
    btn.innerHTML = "Dark Mode";
  }
}