#include <iostream>
using namespace std;

int main()
{
	int num;

	cout << "please enter number: ";
	cin >> num;

	if (num >= 0 && num <= 999) {
		if (num < 10) {
			cout << "One Big Digit!!" << endl;
		}
		else if (num < 100) {
			cout << "Two Big Digits!!" << endl;;
		}
		else if (num < 1000) {
			cout << "Three Big Digits!!" << endl;;
		}
		else {
			cout << "More and more Big Digits" << endl;;
		}

	}
	else {
		cout << "ERROR! WRONG INPUT!!!";
	}

	system("pause");
	return 0;
}