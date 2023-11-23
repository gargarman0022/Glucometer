var counter1 = 0;
document.getElementById("increment-button1").addEventListener("click", function() {
    counter1++;
    document.getElementById("counter-value1").innerHTML = counter1;
});