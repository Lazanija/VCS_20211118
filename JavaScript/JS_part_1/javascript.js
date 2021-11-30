/* Uzd 1 (teorijos uzd) */
let a = 1;
console.log("Kintamojo a reiksme: " + a);
a++;
console.log("Kintamojo a reiksme: " + a);

/* Uzd 2 (teorijos uzd) */
let b = 'Dominykas Puškorius';
let c = "Mano Vardas";
console.log(c + " " + b);

/* JavaScript 1 dalis */

/* Uzd 1 */
let year = 1998;
let month = 8;
let day = 21;

const LastDigitYear = year % 10;
const LastDigitMonth = month % 10;
const LastDigitDay = day % 10;

console.log("Gimimo datos paskutiniai sudeti skaiciai: ", LastDigitYear + LastDigitMonth + LastDigitDay);
/* Uzd 1 */

/* Uzd 2 */
var r = 15;
function plotas(r) {
    var plot = (r * r * Math.PI);
    return plot;
}

function ilgis(r) {
    var ilg = (2 * r * Math.PI);
    return ilg;
}

console.log("Plotas: ",plotas(r), "Ilgis: ", ilgis(r));
/* Uzd 2 */

/* JavaScript 1 dalis */

