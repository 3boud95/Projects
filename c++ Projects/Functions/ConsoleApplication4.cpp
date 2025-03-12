#include <iostream>
#include <cmath>
#include <string>
using namespace std;

double volume(double height, double radius1, double radius2) {

	double vol = (1.0 / 3.0) * 3.14 * height * (pow(radius1, 2) + pow(radius2, 2) + radius1 * radius2);
	return vol;
}

double surface_area(double height, double radius1, double radius2) {
	double sarea = 3.14 * (radius1 + radius2) * sqrt(pow(radius1 - radius2, 2) + pow(height, 2) + 3.14 * pow(radius1, 2));
	return sarea;
}

int count_words(string str) {

	int count = 0;
	bool inWord = false;

	for (int i = 0; i < str.size(); i++) {
		if (str[i] == ' ') {
			inWord = false;
		}
		else if(!inWord){
			count++;
			inWord = true;
		}
	}
	return count;
}

bool all_different(double x, double y, double z) {

	bool same;

	if (x == y && y == z) {
		same = false;
	}
	else {
		same = true;
	}
	return same;
}

bool sorted(double x, double y, double z) {

	bool srt;

	if (x < y && y < z) {
		srt = true;
	}
	else {
		srt = false;
	}

	return srt;
}

double balance(double balance, double rate, int year) {

	double amount = balance * pow((1 + (rate / 100)), year);
	return amount;
}
int main()
{
	//q6
	
	double h, r1, r2;

	cout << "Please enter height: ";
	cin >> h;

	cout << "Please enter radius 1 & radius 2: ";
	cin >> r1 >> r2;

	cout << "Volume = " << volume(h, r1, r2) << endl;;
	cout << "Surface area = " << surface_area(h, r1, r2) << endl;

	//q7

	string word;

	cout << "enter text: ";
	getline(cin, word);

	cout << count_words(word) << endl;


	//q8:no. a

	double x, y, z;

	cout << "pleases enter 3 numbers: ";
	cin >> x >> y >> z;

	if (all_different == 0) {
		cout << "false";
	}
	else {
		cout << "true";
	}

	//q8: no. b

	int x, y, z;

	cout << "Enter numbers: ";
	cin >> x >> y >> z;

	if (sorted(x, y, z) == 1) {
		cout << "true";
	}
	else {
		cout << "false";
	}

	//q9

	double iniblnce, rate;
	int years;

	cout << "please enter your initial balance: ";
	cin >> iniblnce;

	cout << "Enter the interest rate: ";
	cin >> rate;

	cout << "Enter the amount of years: ";
	cin >> years;

	cout << "your balance will be " << balance(iniblnce, rate, years) << endl;

	return 0;
}