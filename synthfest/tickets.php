<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php' ?>
</head>
    
<body>
        <header>
            <a href="index.php"><img src="images/Logo%20-%20FINAL.png"></a>
            <div class="headerquote">
            <h3>“Any way you want it,<br>
                that's the way you need it”</h3>
            <h4>- Journey, Any Way You Want It (1980)</h4>
            </div>
        </header>
    
        <?php include 'navbar.php' ?>
        <div class="hero"><img src="images/herot.png"></div>
    
    <!--START TICKET BODY-->
    <form action="#">
    <h1>3 DAY EVENT</h1>

<div class = "wrapper-flex">
    <div class = "super-select-wrapper">
    <div class="select-wrapper">
    <label>1 Day Ticket</label>
        
        <div class="styled-select" for="select-choice">
            <select name="select-choice" for="select-choice">
                <option value="Choice 1">0</option>
                <option value="Choice 2">1</option>
                <option value="Choice 3">2</option>
            </select>
        </div><!--styled-select-->
    </div><!--select-wrapper-->
        
        <div class="select-wrapper">
    <label>2 Day Ticket</label>
        <div class="styled-select" for="select-choice">
            <select name="select-choice" for="select-choice">
                <option value="Choice 1">0</option>
                <option value="Choice 2">1</option>
                <option value="Choice 3">2</option>
            </select>
        </div><!--styled-select-->
    </div><!--select-wrapper-->
        
        <div class="select-wrapper">
    <label>3 Day Ticket</label>
        <div class="styled-select" for="select-choice">
            <select name="select-choice" for="select-choice">
                <option value="Choice 1">0</option>
                <option value="Choice 2">1</option>
                <option value="Choice 3">2</option>
            </select>
        </div><!--styled-select-->
    </div><!--select-wrapper-->
    </div><!--super-select-wrapper-->
        
        
        <div class="select-wrapperVIP">
        <h2>(Add-On)</h2>
    <label>Add VIP Pass?</label>
            <p>The VIP Pass allows you to go behind the scenes of the various bands and groups that will be playing in the event. The VIP pass also includes a special shirts and the oppurtunity to meet the bands personally while backstage.</p>
        <div class="styled-select" for="select-choice">
            <select name="select-choice" for="select-choice">
                <option value="Choice 1">0</option>
                <option value="Choice 2">1</option>
                <option value="Choice 3">2</option>
            </select>
        </div><!--styled-select-->
    </div><!--select-wrapper-->
</div><!--wrapper-flex-->
        
    <div class="select-wrapper2">
    <h2>Early Bird Special (15% Off)</h2>
            <h3>(For registering early, doesn’t apply to VIP pass)</h3>
    </div><!--select-wrapper-->
        
        <div class="submitbutton">
            <button type="submit">CHECKOUT</button>
        </div><!--submitbutton-->
        
    </form>
    
    
    <!--END TICKET BODY-->
    
    <?php include 'footer.php' ?>
    
</body>
</html>