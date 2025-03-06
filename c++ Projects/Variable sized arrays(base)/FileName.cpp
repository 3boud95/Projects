#include <iostream>
#include <string>
using namespace std;


int main() {

    int N, num;

    cin >> N;



    if (N >= 1 && N <= 1000) {

        int* nums = new int[N];

        for (int i = 0; i < N; i++) {
            cin >> nums[i];
        }
        for (int j = N - 1; j >= 0; j -= 1) {
            cout << nums[j] << " ";
        }
    }

    return 0;
}