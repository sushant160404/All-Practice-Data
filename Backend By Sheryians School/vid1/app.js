// var array=[1,2,3,4,5];
// array.forEach(function(val){
// 	console.log(val + " suahnt");


// })

// var arr = [1,2,3,4,5];
// var new_arr = arr.map(function(val){
// 	return val*40;
// })

// console.log(new_arr);

// var aa = [1,2,3,4,5]

// var ab = aa.filter(function(val){
// 	if(val > 3){
// 		return true;
// 	}else{
// 		return false;
// 	}
// })

// console.log(ab);

// abb = aa.find(function(val){
// 	if(val === 5) return val;
// })

// console.log(abb);

// var arr = [1,2,3,4,5,];
// console.log(arr.indexOf(2));
// console.log(arr.indexOf(22));

// var obj = {
// 	name: "sushant"
// }
// console.log(obj.name)
// console.log(obj['name'])

// function abcd(){
// 	return 12;
// }
// var ans = abcd();
// console.log(ans);


//async js coding

// var blog = await fetch(`https://randomuser.me/api/`);
// var res = await blog.json();
// console.log(res);

async function abcd(){
	var blob = await fetch(`https://randomuser.me/api/`);
	var ans = await blob.json();
	console.log(ans.results[0].name);
}

abcd();
