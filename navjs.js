function myFunction() {
    var x = document.getElementById("demo4");
    if (x.className.indexOf("hide-low") == -1) {
        x.className += " hide-low";
    } else {
        x.className = x.className.replace(" hide-low", " ");
    }
}