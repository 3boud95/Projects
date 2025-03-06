#include <iostream>
#include <string>
using namespace std;
int main() {

	int x, y, z, r, w, k;

	string name;
	cout << "please enter your name: ";
	cin >> name;
	cout << "welcome " << name <<" to my calculator" << endl;

	cout << "enter the first no. :" ;
	cin >> x ;
	cout << "enter the second no. :";
	cin >> y;

	z = x + y;
	cout << "the sum :" << z << endl;

	r = x - y;
	cout << "the difference :" << r << endl;

	w = x * y;
	cout << "the multiplication : " << w << endl;

	k = x / y;
	cout << "the ratio :" << k << endl;
	system("pause");
	return 0;
}