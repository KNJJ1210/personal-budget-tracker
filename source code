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

int main() {
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

    return 0;
}

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

// Function to display all transactions
void displayTransactions(const Transaction transactions[], int count) {
    cout << "\n=== Transactions ===\n";
    cout << left << setw(10) << "Type" << setw(15) << "Category" << setw(10) << "Amount" << endl;
    cout << "----------------------------------------\n";
    for (int i = 0; i < count; i++) {
        cout << left << setw(10) << transactions[i].type << setw(15) << transactions[i].category << setw(10) << transactions[i].amount << endl;
    }
}

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
