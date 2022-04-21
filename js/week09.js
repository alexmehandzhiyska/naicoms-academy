console.log('1234'.length);
console.log('1238abc'.length);
console.log('0.15'.length);
console.log('3.14ivan'.length);
console.log('Infinity'.length);
console.log('99999999999999999999'.length);

let str1 = 'He had accidentally hacked into his company\'s server.';
let accidentallySlice = str1.slice(7, 19);
let companySlice = str1.substr(-17, 7);

console.log(accidentallySlice);
console.log(companySlice);

let str2 = 'It\'s important to remember to be aware of rampaging grizzly bears.';
let newStr2 = str2
    .replace('grizzly', 'gummy')
    .replace('aware of', 'hungry for');

console.log(newStr2);

let str3 = 'Behind the window was a reflection';
let str4 = 'that Only instilled FEAR';
let concatedStr = str3.toUpperCase().concat(str4.toLowerCase());
console.log(concatedStr);

let str5 = 'Random sentences can also spur creativity in other types of projects being done. If you are trying to come up with a new concept, a new idea or a new product, a random sentence may help you find unique qualities you may not have considered. Trying to incorporate the sentence into your project can help you look at it in different and unexpected ways than you would normally on your own.';
let regex = /you/g;
let allMatches = [...str5.matchAll(regex)];

console.log(allMatches[0].index);
console.log(allMatches[allMatches.length - 1].index);

console.log(str5.includes('unique'));
console.log(str5.includes('slippery'));
console.log(str5.includes('project'));
console.log(str5.includes('Concept'));
console.log(str5.includes('exactly'));
console.log(str5.includes('on'));

console.log((3.42342).toFixed(2));
console.log((127.3).toFixed(2));
console.log((12).toFixed(2));
console.log((9.95732).toFixed(2));

console.log(Number.MAX_VALUE);
console.log(Number.MIN_VALUE);
console.log(Number.POSITIVE_INFINITY);
console.log(Number.NEGATIVE_INFINITY);

let arr1 = ['panther', 'horse', 'mouse', 'gnu', 'mongoose', 'turtle', 'chimpanzee', 'wolf', 'mink'];
console.log(arr1.join('/'));

let arr2 = ['fish', 'dog', 'cat'];
let mergedArr = arr1.concat(arr2);
console.log(mergedArr);

let sortedArr1 = mergedArr.sort((a, b) => a.localeCompare(b));
console.log(sortedArr1);

let sortedArr2 = mergedArr.sort((a, b) => b.localeCompare(a));
console.log(sortedArr2);

let moreThan5Length = mergedArr.filter(animal => animal.length > 5);
console.log(moreThan5Length);

console.log(mergedArr.indexOf('mouse'));