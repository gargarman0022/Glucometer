function selectEmoji(emoji) {
    if(emoji!='happy'){
        document.getElementById('happy').style.border = "";
    }
    if(emoji!='sad'){
        document.getElementById('sad').style.border = "";
    }
    if(emoji!='angry'){
        document.getElementById('angry').style.border = "";
    }
    if(emoji!='cool'){
        document.getElementById('cool').style.border = "";
    }
    if(emoji!='sleepy'){
        document.getElementById('sleepy').style.border = "";
    }
    document.getElementById(emoji).style.border = "2px solid red";
}