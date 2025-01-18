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
    <form method="post">
        <label for="type">Transaction Type:</label>
        <select name="type" id="type">
            <option value="Income">Income</option>
            <option value="Expense">Expense</option>
        </select>
        <br>
        <label for="category">Category:</label>
        <input type="text" name="category" id="category" required>
        <br>
        <label for="amount">Amount:</label>
        <input type="number" step="0.01" name="amount" id="amount" required>
        <br>
        <button type="submit" name="add">Add Transaction</button>
        <button type="submit" name="display">Display Transactions</button>
        <button type="submit" name="report">Generate Monthly Report</button>
    </form>

    <?php
    session_start();

    if (!isset($_SESSION['transactions'])) {
        $_SESSION['transactions'] = [];
    }

    if (isset($_POST['add'])) {
        $type = $_POST['type'];
        $category = $_POST['category'];
        $amount = $_POST['amount'];

        $_SESSION['transactions'][] = [
            'type' => $type,
            'category' => $category,
            'amount' => $amount
        ];

        echo "<p>Transaction added successfully.</p>";
    }

    if (isset($_POST['display'])) {
        echo "<h2>Transactions</h2>";
        echo "<table><tr><th>Type</th><th>Category</th><th>Amount</th></tr>";
        foreach ($_SESSION['transactions'] as $transaction) {
            echo "<tr><td>{$transaction['type']}</td><td>{$transaction['category']}</td><td>{$transaction['amount']}</td></tr>";
        }
        echo "</table>";
    }

    if (isset($_POST['report'])) {
        $totalIncome = 0;
        $totalExpense = 0;

        foreach ($_SESSION['transactions'] as $transaction) {
            if ($transaction['type'] == 'Income') {
                $totalIncome += $transaction['amount'];
            } else {
                $totalExpense += $transaction['amount'];
            }
        }

        $netSavings = $totalIncome - $totalExpense;

        echo "<h2>Monthly Report</h2>";
        echo "<p>Total Income: $" . number_format($totalIncome, 2) . "</p>";
        echo "<p>Total Expense: $" . number_format($totalExpense, 2) . "</p>";
        echo "<p>Net Savings: $" . number_format($netSavings, 2) . "</p>";
    }
    ?>
</body>
</html>
