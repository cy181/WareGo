// NAVBAR SCRIPT //
const btn = document.getElementById("categories-btn");
const dropdown = document.getElementById("categories-dropdown");

btn.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdown.classList.toggle("open");
});

document.addEventListener("click", () => {
    dropdown.classList.remove("open");
});

// SCROLL TO TOP BUTTON SCRIPT //
let topBtn = document.getElementById("top-btn");

window.onscroll = function () {
    displayBackToTop();
};

function displayBackToTop() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        topBtn.style.display = "block";
    } else {
        topBtn.style.display = "none";
    }
}

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
