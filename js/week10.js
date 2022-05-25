// ex. 1

// function checkProductSign(num1, num2, num3) {
//     if (num1 == 0 || num2 == 0 || num3 == 0) {
//         return 'Product is 0';
//     }

//     if (num1 > 0) {
//         if (num2 > 0) {
//             return num3 > 0 ? 'Product is positive' : 'Product is negative';
//         } else {
//             return num3 > 0 ? 'Product is negative' : 'Product is positive';
//         }
//     } else {
//         if (num2 > 0) {
//             return num3 > 0 ? 'Product is negative' : 'Product is positive';
//         } else {
//             return num3 > 0 ? 'Product is positive' : 'Product is negative';
//         }
//     }
// }

function checkProductSign(num1, num2, num3) {
    let signs = { '+': 0, '-': 0 };

    if (num1 == 0 || num2 == 0 || num3 == 0) {
        return 'Product is 0';
    }

    num1 > 0 ? signs['+'] += 1 : signs['-'] += 1;
    num2 > 0 ? signs['+'] += 1 : signs['-'] += 1;
    num3 > 0 ? signs['+'] += 1 : signs['-'] += 1;

    return signs['+'] == 2 ? 'Product is negative' : 'Product is positive';
}

// console.log(checkProductSign(0, 2, 3));
// console.log(checkProductSign(2, 0, 3));
// console.log(checkProductSign(2, 5, 0));

// console.log(checkProductSign(1, 2, 3));
// console.log(checkProductSign(-1, 2, 3));
// console.log(checkProductSign(-1, -2, 3));
// console.log(checkProductSign(-1, -2, -3));
// console.log(checkProductSign(1, -2, 3));
// console.log(checkProductSign(1, -2, -3));
// console.log(checkProductSign(-1, 2, -3));
// console.log(checkProductSign(1, 2, -3));


// ex. 2
function findMaxNumber(num1, num2, num3) {
    if (num1 > num2) {
        return num1 > num3 ? num1 : num3;
    } else {
        return num2 > num3 ? num2 : num3;
    }
}

console.log(findMaxNumber(3, 5, 5));
console.log(findMaxNumber(5, 5, 5));
console.log(findMaxNumber(3, 1, 2));
console.log(findMaxNumber(3, 1, 9));
console.log(findMaxNumber(3, 20, 9));



// ex. 3
const nums = { 0: 'нула', 1: 'едно', 2: 'две', 3: 'три', 4: 'четири', 5: 'пет', 6: 'шест', 7: 'седем', 8: 'осем', 9: 'девет' };

function getNumAsWord(num) {
    return nums[num];
}

console.log(getNumAsWord(0));
console.log(getNumAsWord(1));
console.log(getNumAsWord(2));
console.log(getNumAsWord(3));
console.log(getNumAsWord(4));
console.log(getNumAsWord(5));
console.log(getNumAsWord(6));
console.log(getNumAsWord(7));
console.log(getNumAsWord(8));
console.log(getNumAsWord(9));

// ex. 4

function printNums(maxNum) {
    let result = [];

    for (let i = 1; i <= maxNum; i++) {
        result.push(i);
    }

    return result.join(' ');
}

console.log(printNums(21))



// ex. 5

function numsInfo(arr) {
    let numsArr = arr.map(Number);

    let smallestNum = Math.min(...numsArr);
    let greatestNum = Math.max(...numsArr);
    let sum = numsArr.reduce((acc, val) => acc + val, 0);
    let avg = sum / numsArr.length;

    let result = `Greatest num: ${greatestNum.toFixed(2)}\nSmallest num: ${smallestNum.toFixed(2)}\nSum of nums is: ${sum.toFixed(2)}\nAverage of nums is: ${avg.toFixed(2)}`;

    return result;
}

console.log(numsInfo([3, 10, 5]));


// ex. 6
// Направете функция, която да приема едно цяло число между 1 и 20 и на страницата изписва матрица чиято ширина и височина са въведеното число. 

// 1 2 3 4
// 2 3 4 5
// 3 4 5 6
// 4 5 6 7


function generateMatrix(num) {
    let result = [];
    let counter = 1;

    for (let i = 1; i <= num; i++) {
        let curResult = [];

        for (let j = 0; j < num; j++) {
            curResult.push(counter);
            counter++;
        }

        result.push(curResult);
        counter = i + 1;
    }

    return result;
}

console.log(generateMatrix(4));