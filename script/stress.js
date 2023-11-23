function selectEmoji(emoji) {
    if(document.getElementById(emoji).style.border=="2px solid red"){
        document.getElementById(emoji).style.border = "";
    }
    else{
        document.getElementById(emoji).style.border = "2px solid red";
    }
}
const dropdown = document.getElementsByClassName('hours');
let n = dropdown.length;
// console.log(n);
for(let j = 0;j<n;j++){
    for (let i = 0; i <= 24; i++) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        dropdown[j].appendChild(option);
    }
}
const dropdown1 = document.getElementsByClassName('minutes');
for(let j = 0;j<n;j++){
    for (let i = 0; i <= 60; i++) {
        const option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        dropdown1[j].appendChild(option);
    }
}