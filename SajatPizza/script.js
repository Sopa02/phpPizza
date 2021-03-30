function GoEtlap(){
    window.location.href = "./etlap.php"
}
function GoRendeles(){
    window.location.href = "./rendelesek.php"
}
function Kijelentkezes(){
    window.location.href = "./logout.php"
}
function FoOldalra(){
    window.location.href = "./italia.php"
}
var pizzaCount = parseInt(document.getElementById("helper").dataset.count);
console.log(pizzaCount);
//Megszámolja, hogy hány pizza-kártyát kell ellenőriznünk

var pPrice = document.getElementById("price"); //Ide küldjük a kiszámolt árat
var pPizzas = document.getElementById("pizzas");//Ide küldjük, hogy mennyi és milyen pizzát választott eddig a felhasználó
var price;          //Ár
var orderedPizzas;  //Pizzák
function Calculate(event){
    orderedPizzas = "";
    price = 0;
    for(var i = 1; i<=pizzaCount;i++){  //Végigmegy a kártyákon
        var current = document.getElementById(i);
        price += parseInt(current.dataset.price*current.value);
        if(current.value>0){    //Ha választottunk belőle
            orderedPizzas += current.dataset.name +"("+current.value+"db) ";
        }
    }

    //console.log(price);
    pPrice.innerHTML = price + "Ft";
    pPizzas.innerHTML = orderedPizzas;
}