#include <iostream>
using namespace std;
int main() {

	double d, c, f;

	cout << "Enter depth: ";
	cin >> d;

	c = 10 * d + 20;
	f = 1.8 * c + 32;

	cout << "Temp in celcius= " << c << endl;
	cout << "Temp in Fehrenheit= " << f << endl;

	system("pause");
	return 0;
}