var counter = 0;


document.getElementById("increment-button").addEventListener("click", function() {
    counter++;
    document.getElementById("counter-value").innerHTML = counter;
});
