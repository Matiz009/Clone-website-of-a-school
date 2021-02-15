console.log("JS FILE CONNECTED to html");
let listprice = 4567;
let discountPercentage = 15;
let alpha = listprice - (listprice / 100) * discountPercentage;
console.log(alpha + " is the discount price.");

let radius = 45.67;
let pi = Math.PI;
let area = pi * (radius * radius);
console.log("Area of the thing is " + area);

let age = 23;
if (age >= 18) {
  console.log("You may apply for the liscense");
} else {
  console.log("You can not apply for the liscense");
}

let username = "Mac";
let admin = "Matiz";
if (admin == username) {
  console.log("Access guaranted");
} else {
  console.log("Access not guaranted");
}

let loggedIn = false;

if (loggedIn) {
  console.log("Welcome to my website");
} else {
  console.log("Please log in to continue");
}

console.log("Switch case is used");

let day = 4;

switch (day) {
  case 1:
    console.log("MONDAY");
    break;
  case 2:
    console.log("TUESDAY");
    break;
  case 3:
    console.log("Wednesday");
    break;
  case 4:
    console.log("Friday");
    break;
  default:
    console.log("No Day is selected");
}

let a = 1;
while (a <= 10) {
  console.log("Alpha is u " + a);
  a = a + 1;
}

let b = 2;

do {
  console.log("I AM BRAVO " + b);
  b = b + 2;
} while (b <= 20);

console.log("coding exercise #3");

let height = 174;

if (height >= 175) {
  console.log("You are qualified");
} else {
  console.log("You are not qualified");
}

console.log("coding exercise #4");

let smarks = 70;
let amarks = 80;
let sage = 40;

if (smarks >= 50) {
  if (amarks >= 70) {
    if (sage >= 16) {
      console.log("You are selected for student pilot");
    } else if (sage >= 17) {
      console.log("You are selected for private pilot");
    } else if (sage >= 18) {
      console.log("You are selected for commercial pilot");
    } else {
      console.log("Age is not enough ");
    }
  } else {
    console.log("You are rejected because of marks in aviation");
  }
} else {
  console.log("You are rejected because of less marks");
}

console.log("CODING EXERCISE 5");

console.log("Table of 3");

let three = 3;
while (three <= 30) {
  console.log(three + " ");
  three = three + 3;
}

console.log("Table of 6");

let six = 6;
do {
  console.log(six + " ");
  six = six + 6;
} while (six <= 60);

console.log("Table of 9");

for (var i = 9; i <= 90; i = i + 9) {
  console.log(i + " ");
}

console.log("Hello");
let beta = 1;
while (beta <= 10) {
  console.log("Hello " + beta);
  beta = beta + 1;
}

console.log("Coding exercise 9")

let randomNumbers=[1,2,3,4,5,6,7,8,9,10]

for(let i=0;i<=randomNumbers.length;i++){
  if(randomNumbers[i]%2===1){
    console.log(randomNumbers[i])
  }
   
}

console.log("ARRAYS")

let fruits = ["Apple","Banana ","Mango"]
console.log(fruits[1])
let allFruits = ["Peach","Stawberry",...fruits,01,12.45,67,true]
console.log(allFruits.length)

console.log("for of loop")

for(let fruit of allFruits){
    console.log(fruit)
}

let days = ["Monday","Tuesday","Wednesday"]

days.push("Friday")

days.pop("Thursday")

let popped=days.pop()


console.log(popped)

