/*
To use the package, save this file in one directory, and write in your file: import math.Mathjava;
*/
class Mathjava {

    static int $sl(int x, int y) {
        return x + y;
    }
    static int $umn(int x, int y) {
        return x + y;
    }
    static int $vch(int x, int y) {
        return x - y;
    }
    static int $del(int x, int y) {
        return x / y;
    }
    static int $mod(int x, int y) {
        return x % y;
    }
    static int $fct(int n) {
		int result = 1;
		for (int i = 1; i <=n; i ++){
			result = result*i;
		}
		return result;
	}
	static int $sqrt(int x) {
	    return Math.sqrt(x);
	}
	static int $rand() {
	    double a = Math.random()*200 - 100;
	    return a;
	}
}
