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

    <script src="script.js"></script>
</body>
</html>
