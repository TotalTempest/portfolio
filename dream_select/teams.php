<?php session_start(); 
require_once('functions.php');
require_once('available_games.php');?>
<!DOCTYPE HTML>

<html>
<?php include 'header.php';?>
<body>

<nav>
  <a href="index.php">Home</a>
</nav>

<div id="vertical-line">

<h1 id="username_teams"><?php print $_SESSION['email'];?>'s Teams</h1>

<?php
//Edit Button Action
if (isset($_POST['edit_name'])) {
    if ($_POST['new_name'] != 0){
        updateTeamRecord($_SESSION['email'],$_POST['edit_value'],$_POST['new_name']);
    }
}
//Delete Button Action
if (isset($_POST['del_team'])) {
    deleteTeamRecord($_SESSION['email'],$_POST['del_value']);
}


//Creates a multi-dimensional array with all of the team info
$teams = getTeamRecord($_SESSION['email']);

//Print everything out in a readable form
/*$keys = array_keys($teams);
for($i = 0; $i < count($teams); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($teams[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}*/

$keys = array_keys($teams);
for($i = 0; $i < count($teams); $i++) {
    //Print out each team name
    foreach($teams[$keys[$i]] as $key => $value) {
        if ($key == 'teamname'){
            print '<h1 class="team_name" value>'.$value.'</h1>';

            //Print Edit Name Method
            print '<div class="edit">';
            print '<form method="post" name="team_rename">';
            print '<input type="text" name="new_name" value="">';
            print "<input type='hidden' name='edit_value' value='".$value."'>"; //Stores the value for the specific entry
            print '<input type="submit" name="edit_name" value="Edit Name">';
            print '</form>';

            //Print Delete Method
            print '<form method="post" name="team_delete">';
            print "<input type='hidden' name='del_value' value='".$value."'>"; //Stores the value for the specific entry
            print '<input type="submit" name="del_team" value="Delete">';
            print '</form>';
            print '</div>';
        }
    }

    available_games($i);
    //ADVANCED -> Check which games are available for the team through the Javascript (CSC 342 Topic)

    //SUPER ADVANCED -> Create a system (like drop down menus) where you can see what combinations your opponent teams can have

    print '<div class="selected-characters">';

    //Print out each character
    foreach($teams[$keys[$i]] as $key => $value) {
        if ($value != '0' && $key != 'teamname'){
            print '<div class="box_column">
            <img src="img/full/'.$value.'.png" id="box1">
            <h2 class="fighter_name">'.$value.'</h2>
            </div>';
        }
        else if ($value == '0' && $key != 'teamname'){
            print '<h2 class="fighter_name" style="display:none;">'.$value.'</h2>';
        }
    }
    print '</div>';
}

//Print a special message if no teams are saved
if (count($teams) == '0'){
    print '<h1 id="no_teams">No Teams Saved<h1>';
}
?>
</div>

<!--JAVASCRIPT-->
<script src="main.js" async></script>
<!--JAVASCRIPT-->

</body>
</html>