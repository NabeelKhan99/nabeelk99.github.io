function addFields() {
    const fieldsContainer = document.getElementById("fieldsContainer");
    const orderFields = document.createElement("div");
    orderFields.classList.add("orderFields");

    orderFields.innerHTML = `
        <label for="orderDistance">Order Distance (km):</label>
        <input type="number" name="orderDistance[]" step="0.01" required>

        <label for="totalCashEarned">Total Cash Earned ($):</label>
        <input type="number" name="totalCashEarned[]" step="0.01" required>
    `;

    fieldsContainer.appendChild(orderFields);
}

function calculateProfit() {
    const orderDistances = document.getElementsByName("orderDistance[]");
    const totalCashEarneds = document.getElementsByName("totalCashEarned[]");

    // Assume a fuel consumption rate of 6.6 liters per 100 kilometers
    const fuelConsumptionRate = 6.6;

    // Assume fuel cost of 134 cents per liter
    const fuelCostPerLiter = 1.34;

    let totalFuelConsumed = 0;
    let totalCashEarned = 0;

    for (let i = 0; i < orderDistances.length; i++) {
        const orderDistance = parseFloat(orderDistances[i].value) || 0; // Use 0 if value is not a valid number
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

