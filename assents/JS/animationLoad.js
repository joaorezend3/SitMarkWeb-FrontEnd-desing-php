document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
      document.querySelector(".loading").style.display = "none";
      const elements = document.querySelectorAll(".hidden");
      elements.forEach((element, index) => {
        setTimeout(function () {
          element.classList.add("visible");
        }, 100 * (index + 1));
      });
    }, 500); // Ajuste o tempo de carregamento conforme desejado
  });