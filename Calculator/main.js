const screen = document.getElementById("screen");
const buttons = document.querySelectorAll("button");

buttons.forEach((button) => {
  button.addEventListener("click", function () {
    if (button.textContent.includes("C")) {
      screen.value = "";
    } else if (button.textContent.includes("=")) {
      main();
    } else {
      screen.value = `${screen.value}${button.textContent}`;
    }
  });
});

function main() {
  console.log(screen.value);

  response = fetch("index.php", {
    method: "POST",
    body: new URLSearchParams({ val: screen.value }),
  })
    .then((response) => response.text())
    .then((res) => (screen.value = res));
}
