// Grab the things I need in the DOM

const priceInput = document.querySelector("[name=price]");
const quantityInput = document.querySelector("[name=quantity]");
const total = document.querySelector(".total");
const quantityLabel = document.querySelector(".quantity-label");

// Write the function here
function calculatePieCost() {
    const price = priceInput.value;
    const quantity = quantityInput.value;
    const cost = price * quantity;
    console.log(cost);
    total.innerText = "kr." + cost.toFixed(2);
}

function updateQuantityLabel(argument) {
    const quantity = quantityInput.value;
    quantityLabel.innerText = quantity;
}


//on first run
calculatePieCost();

// Add Events Listeners
priceInput.addEventListener("input", calculatePieCost);
quantityInput.addEventListener("input", calculatePieCost);
quantityInput.addEventListener("input", updateQuantityLabel);