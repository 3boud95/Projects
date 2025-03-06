#include <iostream>
using namespace std;
int main() {

	double price1, price2, diam1, diam2, prcpin1, prcpin2, r1, r2, a1, a2;
	const double pie = 3.1415;

	cout << "please enter the price of the first pizza: ";
	cin >> price1 ;

	cout << "Please enter the diameter of the first pizza: ";
	cin >> diam1 ;

	cout << "please enter the price of the second pizza: ";
	cin >> price2 ;

	cout << "Please enter the diameter of the second pizza: ";
	cin >> diam2 ;

	r1 = diam1 / 2;
	r2 = diam2 / 2;
	a1 = pie * r1 * r1 ;
	a2 = pie * r2 * r2 ;

	prcpin1 = price1 / a1;
	prcpin2 = price2 / a2;

	if (prcpin2 > prcpin1) {
		cout << "The first pizza is better valued" << endl;
	}

	else (cout << "the second pizza isbetter valued" << endl);

	system("pause");
	return(0);
}