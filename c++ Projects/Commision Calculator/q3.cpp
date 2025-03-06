#include <iostream>
using namespace std;
int main() {

	double sales, bonus;

	cout << "Please enter the number of sales: ";
	cin >> sales;

	if (sales < 15) {
		bonus = sales * 8;
	}

	else if (sales == 15) {
		bonus = sales * 12;
	}

	else if (sales > 15) {
		bonus = sales * 16;
	}

	cout << "The commission = " << bonus << endl;

	system("pause");
	return(0);
}