var NESTS = false;
var unplayable = false;
var clones = false;
var duplicate = false;

var box1 = 0;
var box2 = 0;
var box3 = 0;
var box4 = 0;

var box1checker = [];
var box2checker = [];
var box3checker = [];
var box4checker = [];

var hue = 0;

//
// CHARACTER ARRAYS
//

var AllGames = [94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15];
var available_games = AllGames;
var unavailable_games = [];
var NESTS_games = [99,00,01];

var Roster = [

  ["Kyo",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Benimaru",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Daimon",94,95,96,97,98,'98um',01,02,'02um',03,12,13,14],
  ["Terry",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Andy",94,95,96,97,98,'98um',99,00,01,02,'02um',12,13,14,15],
  ["Joe",94,95,96,97,98,'98um',99,00,01,02,'02um',03,12,13,14,15],
  ["Ryo",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Robert",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Takuma",94,95,98,'98um',99,00,01,02,'02um',13],
  ["Heidern",94,95,98,'98um',01,'02um',14,15],
  ["Ralf",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Clark",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Athena",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Kensou",94,95,96,97,98,'98um',99,00,01,02,'02um',11,12,13,14],
  ["Chin",94,95,96,97,98,'98um',99,00,01,02,'02um',12,13,14],
  ["King",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,13,14,15],
  ["Mai",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,13,14,15],
  ["Yuri",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,13,14,15],
  ["Kim",94,95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Chang",94,95,96,97,98,'98um',99,00,01,02,'02um',03,14],
  ["Choi",94,95,96,97,98,'98um',99,00,01,02,'02um',14],
  ["Heavy_D",94,98,'98um'],
  ["Lucky",94,98,'98um'],
  ["Brian",94,98,'98um'],
  ["Rugal",94,98,'98um'],
  ["Iori",95,96,97,98,'98um',99,00,01,02,'02um',03,11,12,13,14,15],
  ["Billy",95,97,98,'98um',02,'02um',03,13,14,15],
  ["Eiji",95,'98um',11],
  ["Saisyu",95,98,'98um'],
  ["Omega_Rugal",95,98,'98um',02,'02um',15],
  ["Leona",96,97,98,'98um',99,00,01,02,'02um',03,12,13,14,15],
  ["Kasumi",96,'98um',99,00,'02um',11],
  ["Mature",96,98,'98um',02,'02um',12,13,14,15],
  ["Vice",96,98,'98um',02,'02um',13,14,15],
  ["Geese",96,'98um',02,'02um',11,14,15],
  ["Krauser",96,'98um'],
  ["Mr_Big",96,'98um',11],
  ["Chizuru",96,97,98,'98um',03,15],
  ["Goenitz",96,'98um',02,'02um',15],
  ["Yashiro",97,98,'98um',02,'02um',15],
  ["Shermie",97,98,'98um',02,'02um',15],
  ["Chris",97,98,'98um',02,'02um',15],
  ["Orochi_Yashiro",97,98,'98um',02,'02um',15],
  ["Orochi_Shermie",97,98,'98um',02,'02um',15],
  ["Orochi_Chris",97,98,'98um',02,'02um',15],
  ["Yamazaki",97,98,'98um',02,'02um',03,14,15],
  ["Blue_Mary",97,98,'98um',99,00,01,02,'02um',03,11,14,15],
  ["Shingo",97,98,'98um',99,00,01,02,'02um',03,11,15],
  ["Wild_Iori",97,'98um',02],
  ["Wild_Leona",97,'98um',02,'02um'],
  ["Orochi",97,'98um'],
  ["K",99,00,01,02,'02um',03,11,13,14,15],
  ["Maxima",99,00,01,02,'02um',03,11,13,14,15],
  ["Whip",99,00,01,02,'02um',03,11,14,15],
  ["Bao",99,00,01,'02um'],
  ["Xiangfei",99,01,'02um'],
  ["Jhun",99,00,'02um',03],
  ["Kyo_1",99,'02um'],
  ["Kyo_2",99,'02um'],
  ["Krizalid",99,'02um'],
  ["Ramon",00,01,02,'02um',11,14,15],
  ["Vanessa",00,01,02,'02um',11,14,15],
  ["Lin",00,01,'02um'],
  ["Seth",00,01,02,'02um'],
  ["Hinako",00,01,'02um',03,15],
  ["Kula",00,01,02,'02um',11,13,14,15],
  ["Clone_Zero",00,'02um'],
  ["May_Lee",01,02,'02um'],
  ["Foxy",01,'02um'],
  ["K9999",01,02,15],
  ["Angel",01,02,'02um',14,15],
  ["Zero",01,'02um'],
  ["Igniz",01,'02um'],
  ["Kusanagi",02,'02um',03],
  ["Nameless",'02um'],
  ["Ash",03,11,12,13,15],
  ["Duo_Lon",03,11,12,13,15],
  ["Shen",03,11,12,13],
  ["Tizoc",03,11],
  ["Gato",03,11,15],
  ["Malin",03,11],
  ["Maki",03],
  ["Adelheid",03,11],
  ["Mukai",03],
  ["Oswald",11,14],
  ["Elisabeth",11,12,13,15],
  ["Duck_King",11],
  ["Momoko",11],
  ["B_Jenet",11,15],
  ["Shion",11],
  ["Magaki",11],
  ["Gai_Tendo",11],
  ["Silber",11],
  ["Sho_Hayate",11],
  ["Jyazu",11],
  ["Tung",11,14],
  ["Hotaru",11],
  ["Raiden",12,13],
  ["Hwa_Jai",13],
  ["Saiki",13],
  ["Saiki_Awakened",13],
  ["Evil_Ash",13],
  ["Mr_Karate",13],
  ["Shun_ei",14,15],
  ["Meitenkun",14,15],
  ["Gang_il",14],
  ["Luong",14,15],
  ["Xanadu",14],
  ["Sylvie",14,15],
  ["Kukri",14,15],
  ["Mian",14],
  ["Nelson",14],
  ["Zarina",14],
  ["Bandeiras",14],
  ["King_Dinosaur",14,15],
  ["Hein",14],
  ["Nakoruru",14,15],
  ["Mui_Mui",14],
  ["Love_Heart",14],
  ["Alice",14],
  ["Antonov",14,15],
  ["Verse",14],
  ["Rock",14,15],
  ["Najd",14,15],
  ["Isla",15],
  ["Dolores",15],
  ["Re_Verse",15],
  ["Otoma_Raga",15],
  ["Haohmaru",15],
  ["Darli",15],
  ];

//
// OPTIONS
//

//Radio Buttons
var team_checker = document.getElementById("team_checker"); 
if (team_checker === null){team_checker = 0;}

NESTS_Chart('');

function NESTS_Chart($chartIndex){
  if (team_checker.value == 3){
    NESTS = false; 
    document.getElementById('box4_column').setAttribute('style', 'display: none;');
    for (let i = 0; i < AllGames.length; i++) {
      document.getElementById(AllGames[i]).setAttribute('style', 'display: initial;');
    }
  }
  else if (team_checker.value == 4 || $chartIndex){
    NESTS = true; 
    if (!$chartIndex){
      document.getElementById('box4_column').setAttribute('style', 'display: block;');
    }
    for (let i = 0; i < AllGames.length; i++) {
      document.getElementById(AllGames[i]+String($chartIndex)).setAttribute('style', 'display: none;');
    }
    document.getElementById('99'+String($chartIndex)).setAttribute('style', 'display: initial;');
    document.getElementById('0'+String($chartIndex)).setAttribute('style', 'display: initial;');
    document.getElementById('1'+String($chartIndex)).setAttribute('style', 'display: initial;');
  }
}
//console.log(NESTS);

//
// CHARACTER SELECT
//

// Kyo Example
/*document.getElementById("Kyo").addEventListener("click", myFunction);
function myFunction() {
    document.getElementById("Kyo").setAttribute('style', 'border-style:solid; border-width: 3px; border-color: black;');
    document.getElementById("box1").setAttribute('src', 'img/full/Kyo.png');
    document.getElementById("box1").setAttribute('style', 'width: 250px; height: 250px; object-fit: scale-down;');
  }*/
// Clickers, but Tedious
/*document.getElementById("Kyo").addEventListener("click",function(){selector("Kyo")});
document.getElementById("Benimaru").addEventListener("click",function(){selector("Benimaru")});
document.getElementById("Daimon").addEventListener("click",function(){selector("Daimon")});*/

//Make each character clickable
  for (let i = 0; i < Roster.length; i++) {
    //console.log(Roster[i][0]);
    if ( !document.URL.includes("teams.php") ){
      document.getElementById(Roster[i][0]).addEventListener("click",function(){selector(Roster[i][0])});
    }
  }

function selector($character) {
  if (box1 == $character || box2 == $character || box3 == $character || box4 == $character){
    duplicate = true;
  }
  else {
    duplicate = false;
  }
    if (box1 == 0 && duplicate == false){
      document.getElementById("box1").setAttribute('src', 'img/full/' + $character + '.png');
      document.getElementById("box1").setAttribute('style', 'width: 250px; height: 250px; object-fit: scale-down;');
      nameFix($character);
      document.getElementById("name1").textContent = newName;
      box1 = $character;
      window.scrollTo(0,0);
    }
    else if (box2 == 0 && duplicate == false){
      document.getElementById("box2").setAttribute('src', 'img/full/' + $character + '.png');
      document.getElementById("box2").setAttribute('style', 'width: 250px; height: 250px; object-fit: scale-down;');
      nameFix($character);
      document.getElementById("name2").textContent = newName;
      box2 = $character;
      window.scrollTo(0,0);
    }
    else if (box3 == 0 && duplicate == false){
      document.getElementById("box3").setAttribute('src', 'img/full/' + $character + '.png');
      document.getElementById("box3").setAttribute('style', 'width: 250px; height: 250px; object-fit: scale-down;');
      nameFix($character);
      document.getElementById("name3").textContent = newName;
      box3 = $character;
      window.scrollTo(0,0);
    }
    else if (box4 == 0 && NESTS == true && duplicate == false){
      document.getElementById("box4").setAttribute('src', 'img/full/' + $character + '.png');
      document.getElementById("box4").setAttribute('style', 'width: 250px; height: 250px; object-fit: scale-down; display: flex;');
      nameFix($character);
      document.getElementById("name4").textContent = newName;
      box4 = $character;
      window.scrollTo(0,0);
    }

    //SHOW SUBMIT SECTION
    if (NESTS == false && box1 != 0 && box2 != 0 && box3 != 0){
      document.getElementById("fighter_submit").setAttribute('style', 'display: flex');
    }
    else if (NESTS == true && box1 != 0 && box2 != 0 && box3 != 0 && box4 != 0){
      document.getElementById("fighter_submit").setAttribute('style', 'display: flex');
    }
    
    availableGamesChecker('');
  }

//BOX DELETERS
if ( !document.URL.includes("teams.php") ) {
  document.getElementById("box1").addEventListener("click", function(){deleter("box1")});
  document.getElementById("box2").addEventListener("click", function(){deleter("box2")});
  document.getElementById("box3").addEventListener("click", function(){deleter("box3")});
  document.getElementById("box4").addEventListener("click", function(){deleter("box4")});
}

function deleter($box) {
  document.getElementById($box).setAttribute('src', 'img/' + $box + '.png');
  document.getElementById("fighter_submit").setAttribute('style', 'display: none');
  //Reset selected box variable
  if ($box=='box1'){box1 = 0; document.getElementById("name1").textContent = null}
  if ($box=='box2'){box2 = 0; document.getElementById("name2").textContent = null}
  if ($box=='box3'){box3 = 0; document.getElementById("name3").textContent = null}
  if ($box=='box4'){box4 = 0; document.getElementById("name4").textContent = null}
  //Recheck what characters are still available
  availableGamesChecker('');
  }

function nameFix($name){
  newName = $name.replace(/_/g, " ");
  //Special Instances
  if (newName == "K"){newName = "K'"}
  if (newName == "Mr Karate"){newName = "Mr. Karate"}
  if (newName == "Mr Big"){newName = "Mr. Big"}
  if (newName == "Kyo 1"){newName = "Kyo-1"}
  if (newName == "Kyo 2"){newName = "Kyo-2"}
  if (newName == "B Jenet"){newName = "B. Jenet"}
  if (newName == "Tung"){newName = "Tung Fu Rue"}
  if (newName == "Saiki Awakened"){newName = "Saiki (Awakened)"}
  if (newName == "Gang il"){newName = "Gang-il"}
  if (newName == "Shun ei"){newName = "Shun'ei"}
  if (newName == "Heavy D"){newName = "Heavy-D!"}
  if (newName == "K9999"){newName = "K9999/Krohnen"}
  if (newName == "Otoma Raga"){newName = "Otoma=Raga"}
}

  function availableGamesChecker($chartIndex){
    //Reset variables from last use
    box1checker = [];
    box2checker = [];
    box3checker = [];
    box4checker = [];
    available_games = [];

    //Loop to collect character arrays
    for (let i=0; i < Roster.length; i++){
      if (Roster[i][0] == box1){
        //console.log(Roster[i][0]);
        for (let x=1; x < Roster[i].length; x++){
          box1checker.push(Roster[i][x]);
          //console.log(box1checker);
        }
      }
      else if (Roster[i][0] == box2){
        //console.log(Roster[i][0]);
        for (let x=1; x < Roster[i].length; x++){
          box2checker.push(Roster[i][x]);
          //console.log(box2checker);
        }
      }
      else if (Roster[i][0] == box3){
        //console.log(Roster[i][0]);
        for (let x=1; x < Roster[i].length; x++){
          box3checker.push(Roster[i][x]);
          //console.log(box3checker);
        }
      }
      else if (Roster[i][0] == box4){
        //console.log(Roster[i][0]);
        for (let x=1; x < Roster[i].length; x++){
          box4checker.push(Roster[i][x]);
          //console.log(box4checker);
        }
      }
    }

    //Set empty arrays to the default value
    if (box1checker.length == 0){box1checker = AllGames;}
    if (box2checker.length == 0){box2checker = AllGames;}
    if (box3checker.length == 0){box3checker = AllGames;}
    if (box4checker.length == 0){box4checker = AllGames;}

    //Loop to compare character arrays
    for (let a=0; a < box1checker.length; a++){
      for (let b=0; b < box2checker.length; b++){
        for (let c=0; c < box3checker.length; c++){
          for (let d=0; d < box4checker.length; d++){
            if (box1checker[a] == box2checker[b] && box1checker[a] == box3checker[c] && box1checker[a] == box4checker[d]){
              if (available_games.includes(box1checker[a]) === false){
                available_games.push(box1checker[a]);
                //console.log(available_games);
              }
            }
          }
        }
      }
    }
    
    //Create inverse character array
    unavailable_games = AllGames.filter(n => !available_games.includes(n))
    //console.log(unavailable_games);

    //If only using NESTS games, remove all other games
    if (NESTS == true){
      var OLD_available_games = available_games;
      available_games = [];
      for (let i=0; i < OLD_available_games.length; i++){
        for (let x=0; x < NESTS_games.length; x++){
          if (NESTS_games[x] == OLD_available_games[i]){
            available_games.push(NESTS_games[x]);
          }
        }
      }
      var OLD_unavailable_games = unavailable_games;
      unavailable_games = [];
      for (let i=0; i < OLD_unavailable_games.length; i++){
        for (let x=0; x < NESTS_games.length; x++){
          if (NESTS_games[x] == OLD_unavailable_games[i]){
            unavailable_games.push(NESTS_games[x]);
          }
        }
      }
      //console.log(available_games);
      //console.log(unavailable_games);
    }

    colorSet($chartIndex);

    //Put the non-NESTS games in as unavailable so the next part works in NESTS mode
    if (NESTS == true){
      unavailable_games = AllGames.slice();
      unavailable_games.splice(6,3);
      //console.log(unavailable_games);
    }
  
    //Test each character to see if they are still vaild
    for (let i=0; i < Roster.length; i++){
      //console.log(Roster[i]);
      char = [];
        for (let x=1; x < Roster[i].length; x++){
          char.push(Roster[i][x]);
          //console.log(char);
          char2 = char.filter(n => !unavailable_games.includes(n));
          //console.log(char2)
        }
        if (char2.length == 0 && !document.URL.includes("teams.php") ){
          //console.log(Roster[i][0]+' is unavailable.');
          document.getElementById(Roster[i][0]).setAttribute('style', 'opacity: 0.5');
        }
        else if ( !document.URL.includes("teams.php") ) {
          document.getElementById(Roster[i][0]).setAttribute('style', 'opacity: 1');
        }
    }

    if ( !document.URL.includes("teams.php") ){
      //Transfer the variables over to PHP
      document.getElementById('JS_var_fighter1').setAttribute('value',box1);
      document.getElementById('JS_var_fighter2').setAttribute('value',box2);
      document.getElementById('JS_var_fighter3').setAttribute('value',box3);
      document.getElementById('JS_var_fighter4').setAttribute('value',box4);
    }
}

function colorSet($chartIndex){
  //Loop to update chart on page
  for (let i=0; i < unavailable_games.length; i++){
    document.getElementById(unavailable_games[i]+String($chartIndex)).setAttribute('style', 'background-color: #FFFFFF; color: #000000');
  }
  //Loop to set the colors for each game icon
  for (let i=0; i < available_games.length; i++){
    index = AllGames.indexOf(available_games[i]);
    hue = Math.round(360/AllGames.length * index);
    document.getElementById(available_games[i]+String($chartIndex)).setAttribute('style', 'background-color: hsl('+hue+',100%,50%);');
    if (index>=10){
      document.getElementById(available_games[i]+String($chartIndex)).setAttribute('style', 'background-color: hsl('+hue+',100%,50%); color: #FFFFFF');
    }
    //console.log(hue);
  }
}

//Check games on load (So NESTS mode can work)
if ( !document.URL.includes("teams.php") ) {
availableGamesChecker('');
}

//
// Game Checker for 'teams.php'
//

if ( document.URL.includes("teams.php") ) {
  window.addEventListener("load", function () {
    //IMPORT PHP data into the JAVASCRIPT
    let team_list = [];
    let temp_team_list = [];

    //Grabs the fighters and puts them into nested arrays to represent the teams
    let team_entries = document.querySelectorAll(".fighter_name");
    //console.log(team_entries[3].innerHTML);
    let x=0;
    for (let i=0; i < team_entries.length; i++){
      temp_team_list.push(team_entries[i].innerHTML);
      x++;
      if (x==4){
        team_list.push(temp_team_list);
        temp_team_list = [];
        x = 0;
      }
    }
    //console.log(team_list);

    for (let i=0; i < team_list.length; i++){
      let fighter1 = team_list[i][0];
      let fighter2 = team_list[i][1];
      let fighter3 = team_list[i][2];
      let fighter4 = team_list[i][3];
      availableGamesCheckerTeams(fighter1,fighter2,fighter3,fighter4,i);
    }

    function availableGamesCheckerTeams(entry1,entry2,entry3,entry4,$chartIndex){
      box1 = entry1;
      box2 = entry2;
      box3 = entry3;
      box4 = entry4;
      if (box4 == 0){NESTS = false;}
      else if (box4 != 0){NESTS = true; NESTS_Chart($chartIndex);}
      availableGamesChecker($chartIndex);
      let mult = $chartIndex * 4
      nameFix(entry1);
      team_entries[0+mult].innerHTML = newName;
      nameFix(entry2);
      team_entries[1+mult].innerHTML = newName;
      nameFix(entry3);
      team_entries[2+mult].innerHTML = newName;
      nameFix(entry4);
      team_entries[3+mult].innerHTML = newName;
    }
  });
}

//
// BACKGROUND RANDOMIZER
//

//https://www.w3schools.com/JS/js_random.asp
function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}

let stage = getRndInteger(1,9);
let NESTS_stage = getRndInteger(10,19);

if ( !document.URL.includes("teams.php") ) {
  if (NESTS == false){
    document.getElementById('stage_bg').setAttribute('style', 'background-image: url(img/stage/'+ stage +'.gif);');
  }
  else if (NESTS == true){
    document.getElementById('stage_bg').setAttribute('style', 'background-image: url(img/stage/'+ NESTS_stage +'.gif);');
  }
}

//
// SPRITE TO ICON CHANGER
//

if ( !document.URL.includes("teams.php") ) {
  function spriteChanger(){
    if (window.innerWidth >= 900){
      for (let i = 0; i < Roster.length; i++) {
        document.getElementById(Roster[i][0]).setAttribute('src', `img/sprite/${Roster[i][0]}.gif`);
      }
    }

    else if (window.innerWidth < 900){
      for (let i = 0; i < Roster.length; i++) {
        document.getElementById(Roster[i][0]).setAttribute('src', `img/icon/${Roster[i][0]}.png`);
      }
    }
  }

  spriteChanger();
  window.addEventListener("resize", spriteChanger);
}