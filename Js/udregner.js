// Grab the things I need in the DOM

const priceInput = document.getElementById('price')
const quantityInput = document.querySelector("[name=quantity]");
const total = document.querySelector(".total");
const quantityLabel = document.querySelector(".quantity-label");

// Write the function here
function calculatePieCost() {
    const price = priceInput.value;
    const quantity = quantityInput.value;
    const cost = price * quantity;
    total.innerText = "kr." + cost.toFixed(2);
}

function updateQuantityLabel(argument) {
    quantityLabel.innerText = quantityInput.value;
}


//on first run
calculatePieCost();

// Add Events Listeners
priceInput.addEventListener("input", calculatePieCost);
quantityInput.addEventListener("input", calculatePieCost);
quantityInput.addEventListener("input", updateQuantityLabel);

