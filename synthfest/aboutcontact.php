<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php' ?>
</head>
    
<body>
        <header>
            <a href="index.php"><img src="images/Logo%20-%20FINAL.png"></a>
            <div class="headerquote">
            <h3>“Just hold on loosely,<br>
                but don't let go”</h3>
            <h4>- 38 Special, Hold on Loosely (1981)</h4>
            </div>
        </header>
    
        <?php include 'navbar.php' ?>
        <div class="hero"><img src="images/heroa.jpg"></div>
    
    <!--START BODY-->
    <div class="about">
        <div class="about-text">
            <h2>About Us</h2>
            <p>This is not your typical 80's convention.<br><br>
            This is not your typical pop culture either.<br><br>
            This convention is both a celebration of what was and what could be. We take the ideas and themes of the 80's while adding original ideas that keep the past fresh while not losing it's voice. We cater not only to nostalgia, but also to retrofuturism, where we envision the future the way that it was depicted in the 80's.<br><br>
            We are excited to have you join us on our odyssey through time!</p>
        </div>
        <div class="about-contact">
            <h2>Contact Us</h2>
            <p>Let us know if you are interested in being a vendor or if you have any questions!</p>
                <div class="about-column">
                <form action="#">
                    <label for="name">Name</label><br>
                        <input type="text" id="name" name="name" placeholder="Your name.."><br>
                    <label for="email">E-mail</label><br>
                        <input type="text" id="email" name="email" placeholder="Your E-mail.."><br>
                    <label for="subject">Subject</label><br>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea><br>
                    <input type="submit" value="Submit">
                </form>
                </div>
        </div>
    </div>

    <!--END BODY-->
    
    <?php include 'footer.php' ?>
    
</body>
</html>