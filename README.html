<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Budget Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Personal Budget Tracker</h1>
    <button onclick="addTransaction()">Add Transaction</button>
    <button onclick="displayTransactions()">Display Transactions</button>
    <button onclick="generateReport()">Generate Monthly Report</button>
    <div id="transactions"></div>
    <div id="report"></div>

   <script>
        const transactions = [];

        function addTransaction() {
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
    </script>
</body>
</html>
