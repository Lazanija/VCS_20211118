/* JavaScript 1 dalis */

/* Uzd 1 */
year = 1998;
month = 8;
day = 21;

const LastDigitYear = year => +(year + '').slice(-1);
const LastDigitMonth = month => +(month + '').slice(-1);
const LastDigitDay = day => +(day + '').slice(-1);

console.log("Paskutiniu metu sudeti skaiciai: ",LastDigitYear(year) + LastDigitMonth(month) + LastDigitDay(day));
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

