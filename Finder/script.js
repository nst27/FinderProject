function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}



function myFunction1() {
    var x = document.getElementById("myTopnav1");
    if (x.className === "subpage-topnav") {
        x.className += " responsive";
    } else {
        x.className = "subpage-topnav";
    }
}
