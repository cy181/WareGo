let selectedCategory = null;
let previousLi = null;

function selectCategory(index, element) {
    if (previousLi) {
        previousLi.classList.remove("selected");
    }

    element.classList.add("selected");
    previousLi = element;
    selectedCategory = index;
}

///// Counter for increment/decrement ////

function getPrice(button) {
    let item = button.closest(".item");
    let price = parseFloat(item.dataset.price);
    return price;
}

function showTotalPrice(button, count) {
    let totalValueElement =
        button.parentElement.parentElement.querySelector("p .total-value");
    let total = getPrice(button) * count;
    totalValueElement.innerText = total;
}

function increment(button) {
    let countElement = button.parentElement.querySelector("span");
    let count = parseInt(countElement.innerText);
    count++;
    countElement.innerText = count;

    showTotalPrice(button, count);
}

function decrement(button) {
    let countElement = button.parentElement.querySelector("span");
    let count = parseInt(countElement.innerText);
    if (count > 0) {
        count--;
        countElement.innerText = count;
    }

    showTotalPrice(button, count);
}

function incrementx5(button) {
    let countElement = button.parentElement.querySelector("span");
    let count = parseInt(countElement.innerText);
    count += 5;
    countElement.innerText = count;

    showTotalPrice(button, count);
}

function decrementx5(button) {
    let countElement = button.parentElement.querySelector("span");
    let count = parseInt(countElement.innerText);
    count -= 5;
    if (count < 0) count = 0;
    countElement.innerText = count;

    showTotalPrice(button, count);
}

function addToCart(button) {}
