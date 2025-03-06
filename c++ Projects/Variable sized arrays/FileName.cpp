#include <iostream>
#include <string>
using namespace std;

int main() {

	//string cars[] = { "BMW" , "FERRARI" , "AUDI" , "DODGE" };

	//for (int i = 0; i < size(cars); i++) {
		//cout << cars[i] << '\n';
//}

int number;

cout << "How many cars do you have? ";
cin >> number;
cin.ignore();

string* pCars = new string[number];

for (int i = 0; i < number; i++) {
	cout << "Enter car # " << i+1 << " ";
	 getline(cin, pCars[i]);
}

cout << "\nHere is your garage!\n";
cout << "------------------------\n";

for (int i = 0; i < number; i++) {
	cout << "Spot # " << i + 1 << " " << pCars[i] << endl;
}

//#include <iostream>
//#include <string>
//#include <algorithm>
//using namespace std;

//int main()
//{
   // int number;

   //cout << "How many cars do you have?:";
    //cin >> number;
    //cin.ignore();

    //string* pCars = new string[number];
    ////pointer

    //for (int i = 0; i < number; i++) {
        //cout << "Enter car #" << i + 1 << " ";
       // getline(cin, pCars[i]);
    //}

    //cout << "\nHere is your garage!\n";
    //cout << "------------------------\n";

    //for (int i = 0; i < number; i++) {
        //cout << "Parking spot #" << i + 1 << " " << pCars[i] << endl;
    //}

    //cout << endl;
    //return 0;
//}

	return 0;
}