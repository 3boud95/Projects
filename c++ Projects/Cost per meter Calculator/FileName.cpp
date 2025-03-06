#include <iostream>
using namespace std;
int main() {

	double l, w, c, a, p, tc;

	cout << "please enter length= ";
	cin >> l;

	cout << "please enter width= ";
	cin >> w;

	cout << "please enter cost per meter= ";
	cin >> c;

	a = l * w;
	p = 2 * (l + w);
	tc = a * c;

	cout << "area= " << a << endl;
	cout << "premeter= " << p << endl;
	cout << "Total cost= " << tc << endl;

	system("pause");
	return 0;
}