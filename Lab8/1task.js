function isPrime(n) {
    if (n < 2) return false;

    for (let j = 2; j < n; j++) {
        if (n % j === 0) return false;
    }

    return true;
}

function isPrimeNumber(input) {
    if (typeof input !== 'number' && !Array.isArray(input)) {
        console.log('Введите число или массив чисел');
        return;
    }

    if (typeof input === 'number') {
        if (isPrime(input)) {
            console.log(input + ' простое число');
        } else {
            console.log(input + ' не простое число');
        }
        return;
    }

    if (Array.isArray(input)) {
        for (let num of input) {
            if (typeof num !== 'number') {
                console.log('Каждый элемент массива должны быть числом');
                return;
            }
        }

        let primes = [];
        let notPrimes = [];

        for (let num of input) {
            if (isPrime(num)) {
                primes.push(num);
            } else {
                notPrimes.push(num);
            }
        }

        let result = "";

        if (primes.length > 0) {
            if (primes.length === 1) {
                result = primes + " простое число";
            } else {
                result = primes.join(", ") + " простые числа";
            }
        }

        if (notPrimes.length > 0) {
            if (result !== "") {
                result = result + "; ";
            }

            if (notPrimes.length === 1) {
                result = result + notPrimes + " не простое число";
            } else {
                result = result + notPrimes.join(", ") + " не простые числа";
            }
        }

        console.log(result);
    }
}

isPrimeNumber(3);             // Результат: 3 простое число
isPrimeNumber(4);             // Результат: 4 не простое число
isPrimeNumber([3, 4, 5]);     // Результат: 3, 5 простые числа, 4 не простое число
isPrimeNumber('A');
isPrimeNumber([3, 4, 'A']);
