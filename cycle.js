function wordCycle(){
    let titles = [
        'fighting game enthusiast',
        'video game historian',
        'martial artist',
        'Marvel fan',
        'Star Wars enthusiast',
        'Outdoor lover',
        'tabletop roleplayer',
        'Synthwave fan',
    ];
    // https://www.w3schools.com/JS/js_random.asp
    function getRndInteger(min, max) {
        return Math.floor(Math.random() * (max - min) ) + min;
    }
    let rand = getRndInteger(0,titles.length);
    document.getElementById("word_cycle").innerHTML = titles[rand];
}

wordCycle();
setInterval(wordCycle,2500);