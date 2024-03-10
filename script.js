function addFields() {
    const fieldsContainer = document.getElementById("fieldsContainer");
    const initialFields = document.querySelector('.orderFields'); // Assuming the initial set has the 'orderFields' class

    const orderFields = initialFields.cloneNode(true);
    fieldsContainer.appendChild(orderFields);
}


function calculateProfit() {
    const orderDistances = document.getElementsByName("orderDistance[]");
    const totalCashEarneds = document.getElementsByName("totalCashEarned[]");

    const fuelConsumptionRate = 7.8; // Change fuel consumption rate to 7.8 liters per 100 kilometers

    // Change fuel cost to 1.27 cents per liter
    const fuelCostPerLiter = 1.27;

    let totalFuelConsumed = 0;
    let totalCashEarned = 0;

    for (let i = 0; i < orderDistances.length; i++) {
        const orderDistance = parseFloat(orderDistances[i].value) || 0;
        const totalCashEarnedValue = parseFloat(totalCashEarneds[i].value) || 0;

        // Calculate the fuel consumed for the given distance
        const fuelConsumed = (orderDistance / 100) * fuelConsumptionRate;
        totalFuelConsumed += fuelConsumed;

        // Accumulate the total cash earned
        totalCashEarned += totalCashEarnedValue;
    }

    // Calculate the total fuel cost
    const totalFuelCost = totalFuelConsumed * fuelCostPerLiter;

    // Calculate the profit
    const profit = totalCashEarned - totalFuelCost;

    // Display the results
    document.getElementById("fuelConsumed").textContent = `Total fuel consumed: ${totalFuelConsumed.toFixed(2)} liters`;
    document.getElementById("totalFuelCost").textContent = `Total fuel cost: $${totalFuelCost.toFixed(2)}`;
    document.getElementById("profit").textContent = `Profit: $${profit.toFixed(2)}`;

    // Show the results section
    document.getElementById("results").classList.remove("hidden");
}

function resetForm() {
    // Clear form fields
    const orderDistances = document.getElementsByName("orderDistance[]");
    const totalCashEarneds = document.getElementsByName("totalCashEarned[]");

    for (let i = 0; i < orderDistances.length; i++) {
        orderDistances[i].value = '';
        totalCashEarneds[i].value = '';
    }

    // Replace the container's content with the initial set of fields
    const fieldsContainer = document.getElementById("fieldsContainer");
    fieldsContainer.innerHTML = '';  // Remove all child elements
    const initialFields = document.querySelector('.orderFields');
    fieldsContainer.appendChild(initialFields.cloneNode(true));

    // Hide results section
    document.getElementById("results").classList.add("hidden");
}




