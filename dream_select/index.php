<?php session_start(); 
require_once('functions.php');
require_once('available_games.php');?>
<!DOCTYPE HTML>

<html>
<?php include 'header.php';?>
<body>
<div id='stage_bg'>
<?php
// If the session variables exist, then only show a link to the log out
// page, otherwise only show links to the sign in and create account pages.
if (isset($_SESSION['email']) && isset($_SESSION['password'])){
  print(
    '<nav>
    <a href="log_out.php">Log Out</a>
    <a href="teams.php">Teams</a>
    </nav>'
  );
}
else {
  print(
    '<nav>
    <a href="sign_in.php">Sign In</a>
    <a href="create_account.php">Create Account</a>
    </nav>'
  );
}
?>
<div class="character-select">
    <?php available_games(""); ?>
    <div class="selected-characters">
    <div class="options">
        <form method="post" name="form_options">
        <h3>Number of Team Members</h3>
        <input type="radio" id="3-man" name="team-length" value="3-man" checked="checked">
        <label for="3-man">3 Person Team (All)</label><br>
        <input type="radio" id="4-man" name="team-length" value="4-man">
        <label for="4-man">4 Person Team (NESTS Saga)</label><br><br>

        <!--<h3>Other Options</h3>
        <input type="checkbox" id="option1" name="option1" value="include-94" checked="checked">
        <label for="option1">Include King of Fighters '94</label><br>
        <input type="checkbox" id="option2" name="option2" value="include-unplayable">
        <label for="option2">Include unplayable characters</label><br>
        <input type="checkbox" id="option3" name="option3" value="combine-clones">
        <label for="option3">Combine clone characters</label><br>-->

        <input type="submit" name="options_submit" value="Apply" id="options_submit"><br>
        </form>
    </div>
        <div class="box_column">
            <img src="img/box1.png" id="box1">
            <h2 id="name1"></h2>
        </div>
        <div class="box_column">
            <img src="img/box2.png" id="box2">
            <h2 id="name2"></h2>
        </div>
        <div class="box_column">
            <img src="img/box3.png" id="box3">
            <h2 id="name3"></h2>
        </div>
        <div class="box_column" id="box4_column">
            <img src="img/box4.png" id="box4">
            <h2 id="name4"></h2>
        </div>
    </div>
    <div id="fighter_submit">
        <!--action = destination-->
        <form method="post" name="fighter_submit">
            <label for="t_name">Team name: </label>
            <input type="text" id="t_name" name="t_name" required autofocus><br><br>
                <!--Hidden Javascript to PHP transfer-->
                <input type='hidden' id='JS_var_fighter1' name='JS_var_fighter1' value=''>
                <input type='hidden' id='JS_var_fighter2' name='JS_var_fighter2' value=''>
                <input type='hidden' id='JS_var_fighter3' name='JS_var_fighter3' value=''>
                <input type='hidden' id='JS_var_fighter4' name='JS_var_fighter4' value=''>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php 
        if (isset($_POST['submit'])) {
            if (isset($_SESSION['email']) && isset($_SESSION['password'])){
              if ($_POST['t_name'] != 0 && $_POST['JS_var_fighter1'] != 0 
              && $_POST['JS_var_fighter2'] != 0 && $_POST['JS_var_fighter3'] != 0){
                //insert the team info (email, teamName, fighter1, fighter2, fighter3, fighter4(OPTIONAL))
                insertTeamRecord($_SESSION['email'], $_POST['t_name'],$_POST['JS_var_fighter1'],
                $_POST['JS_var_fighter2'],$_POST['JS_var_fighter3'],$_POST['JS_var_fighter4']);
                header("location: teams.php");
                exit();
              }
              else {
                  print('<h4>Make sure everything is filled out!</h4>');
              }
            }
            else {
              print('<h4>You must be logged in to save teams!</h4>');
            }
            //Print the $_POST variables that are to go to the database
            //print($_POST['t_name']);
            //print($_POST['JS_var_fighter1']);
            //print($_POST['JS_var_fighter2']);
            //print($_POST['JS_var_fighter3']);
            //print($_POST['JS_var_fighter4']);
          }
        ?>
</div>
</div>
        <!--ROSTER ROW ONE (Each row consists of 12 fighters)-->
    <div class="roster">
        <img id="Kyo">
        <img id="Benimaru">
        <img id="Daimon">
        <img id="Terry">
        <img id="Andy">
        <img id="Joe">
        <img id="Ryo">
        <img id="Robert">
        <img id="Takuma">
        <img id="Heidern">
        <img id="Ralf">
        <img id="Clark">
    </div>
        <!--ROSTER ROW TWO-->
    <div class="roster">
        <img id="Athena">
        <img id="Kensou">
        <img id="Chin">
        <img id="King">
        <img id="Mai">
        <img id="Yuri">
        <img id="Kim">
        <img id="Chang">
        <img id="Choi">
        <img id="Heavy_D">
        <img id="Lucky">
        <img id="Brian">
    </div>
        <!--ROSTER ROW THREE-->
    <div class="roster">
        <img id="Rugal">
        <img id="Iori">
        <img id="Billy">
        <img id="Eiji">
        <img id="Saisyu">
        <img id="Omega_Rugal">
        <img id="Leona">
        <img id="Kasumi">
        <img id="Mature">
        <img id="Vice">
        <img id="Geese">
        <img id="Krauser">
    </div>
        <!--ROSTER ROW FOUR-->
    <div class="roster">
        <img id="Mr_Big">
        <img id="Chizuru">
        <img id="Goenitz">
        <img id="Yashiro">
        <img id="Shermie">
        <img id="Chris">
        <img id="Orochi_Yashiro">
        <img id="Orochi_Shermie">
        <img id="Orochi_Chris">
        <img id="Yamazaki">
        <img id="Blue_Mary">
        <img id="Shingo">
    </div>
        <!--ROSTER ROW FIVE-->
    <div class="roster">
        <img id="Wild_Iori">
        <img id="Wild_Leona">
        <img id="Orochi">
        <img id="K">
        <img id="Maxima">
        <img id="Whip">
        <img id="Bao">
        <img id="Xiangfei">
        <img id="Jhun">
        <img id="Kyo_1">
        <img id="Kyo_2">
        <img id="Krizalid">
    </div>
        <!--ROSTER ROW SIX-->
    <div class="roster">
        <img id="Ramon">
        <img id="Vanessa">
        <img id="Lin">
        <img id="Seth">
        <img id="Hinako">
        <img id="Kula">
        <img id="Clone_Zero">
        <img id="May_Lee">
        <img id="Foxy">
        <img id="K9999">
        <img id="Angel">
        <img id="Zero">
    </div>
        <!--ROSTER ROW SEVEN-->
    <div class="roster">
        <img id="Igniz">
        <img id="Kusanagi">
        <img id="Nameless">
        <img id="Ash">
        <img id="Duo_Lon">
        <img id="Shen">
        <img id="Tizoc">
        <img id="Gato">
        <img id="Malin">
        <img id="Maki">
        <img id="Adelheid">
        <img id="Mukai">
    </div>
        <!--ROSTER ROW EIGHT-->
    <div class="roster">
        <img id="Oswald">
        <img id="Elisabeth">
        <img id="Duck_King">
        <img id="Momoko">
        <img id="B_Jenet">
        <img id="Shion">
        <img id="Magaki">
        <img id="Gai_Tendo">
        <img id="Silber">
        <img id="Sho_Hayate">
        <img id="Jyazu">
        <img id="Tung">
    </div>
        <!--ROSTER ROW NINE-->
    <div class="roster">
        <img id="Hotaru">
        <img id="Raiden">
        <img id="Hwa_Jai">
        <img id="Saiki">
        <img id="Saiki_Awakened">
        <img id="Evil_Ash">
        <img id="Mr_Karate">
        <img id="Shun_ei">
        <img id="Meitenkun">
        <img id="Gang_il">
        <img id="Luong">
        <img id="Xanadu">
    </div>
        <!--ROSTER ROW TEN-->
    <div class="roster">
        <img id="Sylvie">
        <img id="Kukri">
        <img id="Mian">
        <img id="Nelson">
        <img id="Zarina">
        <img id="Bandeiras">
        <img id="King_Dinosaur">
        <img id="Hein">
        <img id="Nakoruru">
        <img id="Mui_Mui">
        <img id="Love_Heart">
        <img id="Alice">
    </div>
          <!--ROSTER ROW ELEVEN-->
    <div class="roster">
        <img id="Antonov">
        <img id="Verse">
        <img id="Rock">
        <img id="Najd">
        <img id="Isla">
        <img id="Dolores">
        <img id="Re_Verse">
        <img id="Otoma_Raga">
        <img id="Haohmaru">
        <img id="Darli">
    </div>

<!--JAVASCRIPT-->
    <script src="main.js" async></script>
<!--JAVASCRIPT-->


<!--PHP TO JAVASCRIPT VARIABLE TRANSFER-->
    <?php
    $team_length = 0;

    if (isset($_POST['team-length']) && $_POST['team-length'] == "3-man"){
        //print("3-MAN");
        $team_length = 3;
    }
    else if (isset($_POST['team-length']) && $_POST['team-length'] == "4-man"){
        //print("4-MAN");
        $team_length = 4;
    }
    ?>
    <input type='hidden' id='team_checker' value="<?php echo"$team_length"?>">
<!--PHP TO JAVASCRIPT VARIABLE TRANSFER-->

</body>
</html>