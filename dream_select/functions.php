<?php
/* Function Name: insertUserRecord
 * Description: insert user information into the database
 * Parameters: (string) $name: the user's name
 *             (string) $email: the user's email
 *             (string) $password: the user's password
 * Return Value: (boolean) TRUE if the information was successfully inserted,
 *               otherwise FALSE
 */
function insertUserRecord($name, $email, $password) {

    // try to insert into the database
    // if an error occurs return FALSE
    try {
        $db =  new PDO("sqlite:users.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users VALUES ('$name', '$email', '$password')";
        $db->exec($sql);
        return TRUE;
    }
    catch (Exception $e) {
        print "<p>$e</p>";
        return FALSE;
    }
}

/* Function Name: getUserRecord
 * Description: get user information from the database
 * Parameters: (string) $email: the user's email
 *             (string) $password: the user's password
 * Return Value: (array) The user's record if it exists, otherwise an empty
 *               array
 */
function getUserRecord($email, $password) {

    // try to insert into the database
    // if an error occurs return FALSE
    try {
        $db =  new PDO("sqlite:users.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
        $stmt = $db->query($sql);
        // there should only be a single record
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch (Exception $e) {
        print "<p>$e</p>";
        return array();
    }
}

/* Function Name: insertTeamRecord
 * Description: insert team information into the database
 * Parameters: (string) $email: the user's email
 *             (string) $teamname: the team's name
 *             (string) $fighter1: the 1st team member
 *             (string) $fighter2: the 2nd team member
 *             (string) $fighter3: the 3rd team member
 *             (string) $fighter4: the 4th team member (optional)
 * Return Value: (boolean) TRUE if the information was successfully inserted,
 *               otherwise FALSE
 */
function insertTeamRecord($email, $teamname, $fighter1, $fighter2, $fighter3, $fighter4) {

    // try to insert into the database
    // if an error occurs return FALSE
    try {
        $db =  new PDO("sqlite:users.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO teams VALUES ('$email', '$teamname', '$fighter1', '$fighter2', '$fighter3', '$fighter4')";
        $db->exec($sql);
        return TRUE;
    }
    catch (Exception $e) {
        print "<p>$e</p>";
        return FALSE;
    }
}

/* Function Name: getTeamRecord
 * Description: get user's team information from the database
 * Parameter: (string) $email: the user's email
 * Return Value: (array) The user's team records if it exists, otherwise an empty
 *               array
 */
function getTeamRecord($email) {

    // try to insert into the database
    // if an error occurs return FALSE
    try {
        $db =  new PDO("sqlite:users.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT teamname,fighter1,fighter2,fighter3,fighter4 FROM teams WHERE email='$email'";
        $stmt = $db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_NAMED);
    }
    catch (Exception $e) {
        print "<p>$e</p>";
        return array();
    }
}

/* Function Name: updateTeamRecord
 * Description: change the name of the selected team
 * Parameters: (string) $email: the user's email
 *             (string) $oldteamname: the original name for the team
 *             (string) $newteamname: the new name for the team
 * Return Value: (boolean) TRUE if the information was successfully inserted,
 *               otherwise FALSE
 */
function updateTeamRecord($email, $oldteamname, $newteamname) {

    // try to insert into the database
    // if an error occurs return FALSE
    try {
        $db =  new PDO("sqlite:users.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE teams SET teamname = '$newteamname' WHERE email = '$email' AND teamname = '$oldteamname';";
        $stmt = $db->query($sql);
        // there should only be a single record
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch (Exception $e) {
        print "<p>$e</p>";
        return FALSE;
    }
}

/* Function Name: deleteTeamRecord
 * Description: delete the selected team
 * Parameters: (string) $email: the user's email
 *             (string) $teamname: the name of the team
 * Return Value: (boolean) TRUE if the information was successfully inserted,
 *               otherwise FALSE
 */
function deleteTeamRecord($email, $teamname) {

    // try to insert into the database
    // if an error occurs return FALSE
    try {
        $db =  new PDO("sqlite:users.db");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM teams WHERE email = '$email' AND teamname = '$teamname';";
        $stmt = $db->query($sql);
        // there should only be a single record
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch (Exception $e) {
        print "<p>$e</p>";
        return FALSE;
    }
}


?>
