# personal-budget-tracker

# Prerequisites
1. Arrays/lists for storage
2. Loops for calculations
3. Functions for report generation

# Step 1: Program Setup
1. We start with the personal budget tracker program by typing the following code in a new C++ project:
   
#include <iostream>
#include <string>
#include <iomanip>
using namespace std;

// Constants
const int MAX_TRANSACTIONS = 100;

// Structures
struct Transaction {
    string type; // "Income" or "Expense"
    string category;
    double amount;
};

// Function declarations
int addTransaction(Transaction transactions[], int count);
void displayTransactions(const Transaction transactions[], int count);
double calculateTotalIncome(const Transaction transactions[], int count);
double calculateTotalExpense(const Transaction transactions[], int count);
double generateReport(const Transaction transactions[], int count);

2. This step is for declaring the constant, functions and structure.
3. There is no output in this step.

# Step 2: Menu System
1. Add a basic menu system in main:

Transaction transactions[MAX_TRANSACTIONS];
int transactionCount = 0;
int choice;

    do {
    cout << "\n=== Personal Budget Tracker ===\n";
    cout << "1. Add Transaction\n";
    cout << "2. Display Transactions\n";
    cout << "3. Generate Monthly Report\n";
    cout << "4. Exit\n";
    cout << "Enter your choice: ";
    cin >> choice;

    switch (choice) {
        case 1:
            transactionCount = addTransaction(transactions, transactionCount);
            break;
        case 2:
                displayTransactions(transactions, transactionCount);
                break;
        case 3:
                generateReport(transactions, transactionCount);
                break;
        case 4:
            cout << "Exiting the program.\n";
            break;
        default:
            cout << "Invalid choice. Please try again.\n";
    }
      } while (choice != 4);

2. Switch statement is added for the user to navigate through the menu.

# Step 3: Implement "Add Transaction" Function

1. Add a function for case 1.

// Function to add a transaction
int addTransaction(Transaction transactions[], int count) {
    if (count >= MAX_TRANSACTIONS) {
        cout << "Transaction limit reached. Cannot add more transactions.\n";
        return count;
    }

    cout << "Enter transaction type (Income/Expense): ";
    cin >> transactions[count].type;
    cout << "Enter category: ";
    cin >> transactions[count].category;
    cout << "Enter amount: ";
    cin >> transactions[count].amount;

    count++;
    cout << "Transaction added successfully.\n";
    return count;
}

# Step 4: Implement "Display Transaction" Function
1. Add a function for case 2.

// Function to display all transactions
void displayTransactions(const Transaction transactions[], int count) {
    cout << "\n=== Transactions ===\n";
    cout << left << setw(10) << "Type" << setw(15) << "Category" << setw(10) << "Amount" << endl;
    cout << "----------------------------------------\n";
    for (int i = 0; i < count; i++) {
        cout << left << setw(10) << transactions[i].type << setw(15) << transactions[i].category << setw(10) << transactions[i].amount << endl;
    }
}

# Step 5: Implement Monthly Report
1. Add a function for case 3.

// Function to calculate total income
double calculateTotalIncome(const Transaction transactions[], int count) {
    double totalIncome = 0;
    for (int i = 0; i < count; i++) {
        if (transactions[i].type == "Income") {
            totalIncome += transactions[i].amount;
        }
    }
    return totalIncome;
}

// Function to calculate total expense
double calculateTotalExpense(const Transaction transactions[], int count) {
    double totalExpense = 0;
    for (int i = 0; i < count; i++) {
        if (transactions[i].type == "Expense") {
            totalExpense += transactions[i].amount;
        }
    }
    return totalExpense;
}

// Function to generate a monthly report
double generateReport(const Transaction transactions[], int count) {
    double totalIncome = calculateTotalIncome(transactions, count);
    double totalExpense = calculateTotalExpense(transactions, count);

    cout << "\n=== Monthly Report ===\n";
    cout << "Total Income: $" << fixed << setprecision(2) << totalIncome << endl;
    cout << "Total Expense: $" << fixed << setprecision(2) << totalExpense << endl;
    cout << "Net Savings: $" << fixed << setprecision(2) << (totalIncome - totalExpense) << endl;

    return totalIncome - totalExpense;
}

This is a simple C++ program to track personal budget transactions. It allows users to add transactions, display all transactions, and generate a monthly report showing total income, total expenses, and net savings.

# Features

- Add transactions (Income or Expense)
- Display all transactions
- Generate a monthly report

# Installation

1. Clone the repository or download the source code.
2. Compile the program using your preferred C++ compiler. For example:
   ```bash
   g++ -o budget_tracker budget_tracker.cpp

# Usage
1. Run the compiled program:
./budget_tracker

2. Follow the on-screen prompts to add transactions, display transactions, or generate a monthly report.
