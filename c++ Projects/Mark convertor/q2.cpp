#include <iostream>
using namespace std;
int main() {

	double sc;
	string f;

	cout << "Please enter your score: ";
	cin >> sc;

	if (sc <= 100 && sc >= 0) {
		if (sc >= 85) {
			f = 'A';
		}

		else if (sc >= 75) {
			f = 'B';
		}

		else if (sc >= 65) {
			f = 'C';
		}

		else if (sc >= 50) {
			f = 'D';
		}

		else if (sc < 50) {
			f = 'F';
		}
	}

	cout << "Your mark is: " << f << endl;

	system("pause");
	return(0);
}