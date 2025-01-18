const MAX_TRANSACTIONS = 100;
const transactions = [];

function addTransaction() {
    if (transactions.length >= MAX_TRANSACTIONS) {
        alert("Transaction limit reached. Cannot add more transactions.");
        return;
    }

    const type = prompt("Enter transaction type (Income/Expense):");
    const category = prompt("Enter category:");
    const amount = parseFloat(prompt("Enter amount:"));

    if (type && category && !isNaN(amount)) {
        transactions.push({ type, category, amount });
        alert("Transaction added successfully.");
    } else {
        alert("Invalid input. Please try again.");
    }
}

function displayTransactions() {
    let html = "<h2>Transactions</h2>";
    html += "<table><tr><th>Type</th><th>Category</th><th>Amount</th></tr>";
    transactions.forEach(transaction => {
        html += `<tr><td>${transaction.type}</td><td>${transaction.category}</td><td>${transaction.amount.toFixed(2)}</td></tr>`;
    });
    html += "</table>";
    document.getElementById("transactions").innerHTML = html;
}

function calculateTotalIncome() {
    return transactions.reduce((total, transaction) => {
        return transaction.type === "Income" ? total + transaction.amount : total;
    }, 0);
}

function calculateTotalExpense() {
    return transactions.reduce((total, transaction) => {
        return transaction.type === "Expense" ? total + transaction.amount : total;
    }, 0);
}

function generateReport() {
    const totalIncome = calculateTotalIncome();
    const totalExpense = calculateTotalExpense();
    const netSavings = totalIncome - totalExpense;

    let html = "<h2>Monthly Report</h2>";
    html += `<p>Total Income: $${totalIncome.toFixed(2)}</p>`;
    html += `<p>Total Expense: $${totalExpense.toFixed(2)}</p>`;
    html += `<p>Net Savings: $${netSavings.toFixed(2)}</p>`;
    document.getElementById("report").innerHTML = html;
}
