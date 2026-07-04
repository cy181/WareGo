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

/*Modal */
function openModal(id) {
    document.getElementById(id).classList.add("open");
}

function closeModal(id) {
    document.getElementById(id).classList.remove("open");
}

///// Counter for increment/decrement ////
let count = 0;
let infoElement = document.getElementById("info");
let countElement = document.getElementById("count");

function updateCount() {
    countElement.innerText = count;
}
function increment() {
    updateCount();
    count++;
}
function decrement() {
    if (count > 0) {
        count--;
        updateCount();
    }
}
function incrementx5() {
    count += 5;
    updateCount();
}
function decrementx5() {
    count -= 5;
    if (count < 0) count = 0;
    updateCount();
}

let saveCounter = 0;
function save() {
    if (saveCounter == 0) {
        infoElement.innerText += "" + count;
        saveCounter++;
    } else {
        count = 0;
        updateCount();
    }
}
