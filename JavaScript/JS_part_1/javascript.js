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
/* JavaScript 2 dalis */

/* Uzd 1 */
let vardas = "Tomas";
let pavarde = "Tomauskas";
let kursas = 4;
let kur_mokosi = "KTU";
let pazymiai = [7, 4, 5];
/* Uzd 1 */

/* Uzd 2 */
let answer = vardas + " " + pavarde + " mokosi " + kur_mokosi + ", " + kursas + " kurse, jo pažymiai: " + "[" + pazymiai + "]";
document.getElementById("ats").innerHTML = answer;
/* Uzd 2 */

/* Uzd 3 */
let type_answer =
    "vardas yra " + typeof vardas + "<br>" +
    "pavarde yra " + typeof pavarde + "<br>" +
    "kursas yra " + typeof kursas + "<br>" +
    "kur_mokosi yra " + typeof kur_mokosi + "<br>" +
    "pazymiai yra " + typeof pazymiai;
document.getElementById("type").innerHTML = type_answer;
/* Uzd 3 */

/* Uzd 4 */
const studentas = {
    vardas1: "Tomas",
    pavarde1: "Tomauskas",
    kursas1: 4,
    kur_mokosi1: "KTU",
    pazymiai1: [7, 4, 5]
};
/* Uzd 4 */

/* Uzd 5, 6 */
let masyvas = [ "Tomas", "Tomauskas", 4, "KTU", [7, 4, 5]];
console.log(masyvas);
/* Uzd 5, 6 */

/* Uzd 7 */
let dot = "Dot notation: " + "<br>" +
    studentas.vardas1 + " " +
    studentas.pavarde1 + " mokosi " +
    studentas.kur_mokosi1 + ", " +
    studentas.kursas1 + " kurse, jo pažymiai: " + "[" +
    studentas.pazymiai1 + "]";
document.getElementById("dot").innerHTML = dot;

let bracket = "Bracket notation" + "<br>" +
    studentas['vardas1'] + " " +
    studentas['pavarde1'] + " mokosi " +
    studentas['kur_mokosi1'] + ", " +
    studentas['kursas1'] + " kurse, jo pažymiai: " + "[" +
    studentas['pazymiai1'] + "]";
document.getElementById("bracket").innerHTML = bracket;
/* Uzd 7 */

/* Uzd 8 */
for (let i = 0; i < masyvas.length; i++) {
    document.getElementById("pazymiai").innerHTML = masyvas[4];
}
/* Uzd 8 */

/* Uzd 9 */
for (let i = 0; i < masyvas.length; i++) {
    let a = masyvas[4][0];
    let b = masyvas[4][1];
    let c = masyvas[4][2];
    let max = 10;

    if (a < max && b < max && c < max) {
        a += 1;
        b += 1;
        c += 1;
    }
    else if (a === max && b < max && c < max) {
        b += 1;
        c += 1;
    }
    else if (a === max && b === max && c < max) {
        c +=1;
    }
    else if (a < max && b === max && c < max) {
        a += 1;
        c += 1;
    }
    else if (a < max && b === max && c === max) {
        a += 1;
    }
    else if (a < max && b < max && c === max) {
        a += 1;
        b += 1;
    }
    else if (a === max && b < max && c === max) {
        b += 1;
    }
    else if (a === max && b === max && c === max)
    {
        document.getElementById("pakelti").innerHTML = a + " " + b + " " + c;
    }
    document.getElementById("pakelti").innerHTML = a + " " + b + " " + c;
}
/* Uzd 9 */

/* Uzd 10 */
let a1 = masyvas[4][0];
let b1 = masyvas[4][1];
let c1 = masyvas[4][2];
document.getElementById("suma").innerHTML = a1 + b1 + c1;
/* Uzd 10 */

/* Uzd 11 */
let x = a1;
let y = b1;
document.getElementById("sandauga").innerHTML = x * y;
/* Uzd 11 */

/* Uzd 12 */
let kursas2 = masyvas[2];
document.getElementById("12").innerHTML = "Kursas yra " + typeof kursas2 + " tipo";
/* Uzd 12 */

/* Uzd 13 */
let tipas = typeof kursas2;
if(kursas2 === 4) {
    document.getElementById("13").innerHTML = "Studentas mokosi " + kursas2 + " kurse ir kurso tipas yra " + tipas;
} else {
    document.getElementById("13").innerHTML = "Studentas nesimoko 4 kurse";
}
/* Uzd 13 */

/* Uzd 14 */
let vardas2 = masyvas[0];
let pavarde2 = masyvas[1];
if(kursas2 === 4) {
    document.getElementById("14").innerHTML = "Studentas " + vardas2 + " " + pavarde2 + " yra abiturientas";
} else {
    document.getElementById("14").innerHTML = "Studentui " + vardas2 + " " + pavarde2 + " dar toli iki mokslų baigimo";
}
/* Uzd 14 */

/* Uzd 15 */

/* Uzd 15 */

/* JavaScript 2 dalis */

/* tabai */

let sheets = document.getElementsByClassName('sheet');

function naujasTab(Id) {
    for (let i = 0; i < sheets.length; i++) {
        sheets[i].style.display = "none";
    }
    document.getElementById(Id).style.display = "block";
}

/* papildoma uzd 2 */

function sudetis(a, b) {
    return a + b;
}
function atimtis(a, b) {
    return a - b;
}
function dalyba(a, b) {
    return a / b;
}
function daugyba(a, b) {
    return a * b;
}

function result() {
let isvesti = document.getElementsByClassName("rezultatai");

for (let a=1; a<5; a++) {
    for(let b=1; b<20; b+=2) {
    isvesti[0].innerHTML += sudetis(a,b) + " " + atimtis(a,b) + " " + dalyba(a,b).toFixed(3) + " " + daugyba(a,b) + "<br>";
        }
    }
}

/* jQuery */

$("*", document.body).click(function (event) {
    event.stopPropagation();
    let pasirinktas = $(this).get(0);
    $("h1.kasas").text(pasirinktas.nodeName + " - skaicius yra: " + $(pasirinktas.nodeName).length);
    $(pasirinktas).val().toUpperCase();
    $(pasirinktas).css("background-color", "yellow");
});


