// const sumvalue= require("./math");
// const sum = require("./fun");
// const info = require("./fruit");

// console.log(info);
// console.log(sumvalue.sum(2,2));
// console.log(sum.ram(2,5));

var figlet = require("figlet");

figlet("Hello Sushant!!", function (err, data) {
  if (err) {
    console.log("Something went wrong...");
    console.dir(err);
    return;
  }
  console.log(data);
});



