#include <iostream>
#include <vector>
using namespace std;

int main() {

    int q, n, k, s = 0;

    cin >> n >> q;

    vector<vector<int>> array; // Create a 2D vector to store 'n' arrays

    for (int i = 0; i < n; i++) {
        cin >> k;
        array.push_back(vector<int>(k)); // Initialize the inner vector with size 'k'
        for (int j = 0; j < k; j++) {
            cin >> array[i][j];
        }
    }

    for (int i = 0; i < q; i++) {
        int x, y;
        cin >> x >> y;
        cout << array[x][y] << endl;
    }

    return 0;
}