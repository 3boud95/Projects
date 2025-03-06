#include <iostream>
#include <string>
using namespace std;

int main()
{

	int month;

	cout << "enter the month (1-12): ";
	cin >> month;

	switch (month) {
	case 1:
		cout << "It's January";
		break;
	case 2:
		cout << "It's February";
		break;
	case 3:
		cout << "It's March";
		break;
	case 4:
		cout << "It's April";
		break;
	case 5:
		cout << "It's May";
		break;
	case 6:
		cout << "It's June";
		break;
	case 7:
		cout << "It's July";
		break;
	case 8:
		cout << "It's August";
		break;
	case 9:
		cout << "It's September";
		break;
	case 10:
		cout << "It's October";
		break;
	case 11:
		cout << "It's November";
		break;
	case 12:
		cout << "It's December";
		break;
	default:
		cout << "You did not enter a number between (1-12)" << endl;
	}

	char grade;

	cout << "What letter grade did you get (A-F): ";
	cin >> grade;

	switch (grade) {
	case 'A':
		cout << "You did PERFECT!";
		break;
	case 'B':
		cout << "You did GOOD!";
		break;
	case'C':
		cout << "you did OKAY!";
		break;
	case 'D':
		cout << "You did not do so good!";
		break;
	case 'F':
		cout << "You FAILED!";
		break;
	default:
		cout << "You didn't enter a grade between (A-F) in capital";
	}


}
