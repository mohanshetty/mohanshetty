
// let ctitle = document.getElementById("card-title-id")
// ctitle.style.color = "red"

// =======================

// let ctitle = document.getElementsByClassName("card-title")
/*
let ctitle = document.querySelectorAll(".card-title")

for (newcTitle of ctitle) {
  newcTitle.style.color = "red"
}

let ctitles = document.getElementsByTagName("a")

console.log(ctitles)


let ctitles = document.getElementsByName("go-somewhere")[0]

// console.log(ctitles)

ctitles.style.color = "red"
*/

// =================
// If this not working use console.log and check whether it returns HTML Collections or Single Objects, If not working use index and check this will works
// =================

let ctitles = document.querySelector(".card-body").getElementsByTagName("p")[0]
console.log(ctitles)
ctitles.style.color = "red"

// for (newcTitle of ctitle) {
//   newcTitle.style.color = "red"
// }
