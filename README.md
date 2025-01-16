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
        case 4:
            cout << "Exiting the program.\n";
            break;
        default:
            cout << "Invalid choice. Please try again.\n";
    }
} while (choice != 4);

2. 
