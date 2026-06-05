const numbers = [2, 5, 8, 10, 3];

let multipliedNumbers = numbers.map(num => num * 3);

let filteredResult = multipliedNumbers.filter(num => num > 10);

console.log(filteredResult); 
