<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php' ?>
</head>
<body>
    <?php include 'navbar.php' ?>
    
    <header class="contactheader">
        <h1>Catahaula</h1>
        <h2>Bar & Restaurant</h2>
    </header>
    <!--START MAIN SECTION-->
    <div class="subbg">
    <div class="subtitle">
        CONTACT US
        </div>
        <div class="sub">
        <div class="subcolumns">
            <div class="subleft">
            Name
            <br><br>
            E-Mail
            <br><br>
            Message
            </div>
            <div class="subright">
            <form>
                <input type="text" id="name" name="name">
                <input type="email" id="email" name="email">
                <div class="submessage">
               <textarea name="message" rows="10" cols="30"></textarea>
                </div>
                </form>
            </div>
            </div>
            <form>
            <div class="subcontact">
                <input type="checkbox" id="selfemail" name="selfemail" value="Self Email">
            Send a copy of this e-mail to yourself
            </div>
            <div class="submit">
                <input type="submit" value="Submit">
            </div>
            </form>
        </div>
        </div>
    <!--END MAIN SECTION-->
    
    <?php include 'footer.php' ?>
    
</body>
</html>