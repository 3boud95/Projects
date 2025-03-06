#include <iostream>
using namespace std;

int main() {

	int num, sum = 0, lrg = 0, dig , sml = 9 , zro = 0;

	cout << "please enter the number: ";
	cin >> num;

	if (num > 999 && num < 9999999) {
	while (num > 0) {
		dig = num % 10;
		sum += dig ;
		num = num / 10;

		if (dig > lrg)
			lrg = dig;

		if (dig < sml)
			sml = dig;

		if (dig == 0)
			zro++;
	}
	cout << "the sum is " << sum << endl;
	cout << "the largest number is " << lrg << endl;
	cout << "the smallest number is " << sml << endl;
	cout << "the number of zeros is " << zro << endl;
}
	system("pause");
	return 0;
}