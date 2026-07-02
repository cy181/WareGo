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
