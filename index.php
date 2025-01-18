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
    <form method="POST" action="">
        <h2>Add Transaction</h2>
        <label for="type">Transaction Type:</label>
        <select name="type" id="type" required>
            <option value="Income">Income</option>
            <option value="Expense">Expense</option>
        </select><br><br>

        <label for="category">Category:</label>
        <input type="text" name="category" id="category" required><br><br>

        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" step="0.01" required><br><br>

        <button type="submit" name="add">Add Transaction</button>
    </form>

    <?php
    session_start();

    // Initialize transactions if not already set
    if (!isset($_SESSION['transactions'])) {
        $_SESSION['transactions'] = [];
    }

    // Handle adding a transaction
    if (isset($_POST['add'])) {
        $type = $_POST['type'];
        $category = $_POST['category'];
        $amount = floatval($_POST['amount']);

        if ($type && $category && $amount > 0) {
            $_SESSION['transactions'][] = [
                'type' => $type,
                'category' => $category,
                'amount' => $amount
            ];
            echo "<p>Transaction added successfully.</p>";
        } else {
            echo "<p>Invalid input. Please try again.</p>";
        }
    }

    // Display transactions
    if (!empty($_SESSION['transactions'])) {
        echo "<h2>Transactions</h2>";
        echo "<table><tr><th>Type</th><th>Category</th><th>Amount</th></tr>";
        foreach ($_SESSION['transactions'] as $transaction) {
            echo "<tr><td>{$transaction['type']}</td><td>{$transaction['category']}</td><td>" . number_format($transaction['amount'], 2) . "</td></tr>";
        }
        echo "</table>";
    }

    // Generate Monthly Report
    if (!empty($_SESSION['transactions'])) {
        $totalIncome = 0;
        $totalExpense = 0;

        foreach ($_SESSION['transactions'] as $transaction) {
            if ($transaction['type'] === 'Income') {
                $totalIncome += $transaction['amount'];
            } else if ($transaction['type'] === 'Expense') {
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
