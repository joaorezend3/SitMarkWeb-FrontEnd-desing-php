document.addEventListener("DOMContentLoaded", function () {
    const marks = document.querySelectorAll("h2 mark");
    let delay = 0.2;

    marks.forEach(mark => {
        mark.style.animationDelay = `${delay}s`;
        delay += 0.4;
    });
});
