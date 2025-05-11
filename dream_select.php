<!DOCTYPE HTML>
<html>
<?php include 'head.php' ?>
<body>
    <?php include 'nav.php' ?>
    <canvas id="preview-animation" width="1600" height="700"></canvas>
    <div class="preview">
        <img src="img/dream-select-mockup.png">
        <h1>The King Of Fighters Dream Select</h1>
        <div class="preview-blurb">
            <p>The King of Fighters Dream Select was designed as a website and a tool for 
                users to create their own teams in the King of Fighters video game series, 
                without roster limitations. Users can save their own teams of either 3 or 4 
                fighters into a database and also get to check which titles in the series that 
                the selected team combination is available in. This project was coded in HTML, 
                CSS, PHP, Javascript, and SQLITE.</p>
            <div class="visit-site">
                <a href="https://www.aidenzeilinger.design/dream_select/" target="_blank">Visit Site</a>
            </div>
        </div>
    </div>
    <!-- Document coding process and how it works -->
    <div class="preview-documentation">
        <h2>How To Play - Idea Generation</h2>
            <p>
                The King Of Fighters has always been known for their constantly changing, large cast
                of characters. Some characters have appeared in every title in the series, while some
                only made it in a few games. I created this website in order to document every fighter
                from every game, create teams of 3 or 4 without roster limitations, and check which games
                said teams could participate in, if any. That way users could expert with possible and
                impossible team combinations, and also see what games they could use their teams in.
            </p>
        <h2>Fighter Select - JavaScript Round 1</h2>
            <p>
                I began the project with the primary function of the site, which would be controlled
                through JavaScript. I made a basic wireframe of the site at this stage so I could get
                a general idea for a layout, and mostly importantly, have something for my JavaScript
                to interact with.
            </p>
                <img src="img/dream_select_wireframe.png" alt="Early development of the website">
            <p>
                My JavaScript began as one giant array of nested arrays that held the names of each fighter, 
                as well as each of their game appearances. This great array would be the ever-changing
                roster of the fighting game series, and the backbone of the entire project.
            </p>
                <img src="img/dream_select_array.png" alt="An example of how the array was set up">
            <p>
                Additional arrays were made later in the process, one to represent every game in the series,
                while the other represented all of the games in the NESTS Saga (that is, the second story arc
                of the series where the 4-on-4 mechanic came from). After I created the data, I created
                a "for loop" and a function that would create the input for the webpage. The "for loop" went
                through each character and added click functions that would return the selected character's
                name, and the function took the returned name and stored it inside whichever box was still empty
                while also ensuring that no duplicates were selected. The function would then display the submit
                section if all boxes were filled, and call the main function every click to check which games were
                still available. Another function was also made that de-selected fighters if they were clicked in the 
                selection area, and also ran the main function to check game availabilties. Each image file for
                the fighters were named exactly like they were in the array, in order to be selectable.
            </p>
        <h2>Order Select - JavaScript Round 2</h2>
            <p>
                The majority of the project's work came from a series of "for loops" that was stored inside 
                of a function. The function began by collecting the data from the selected fighters, returning
                an array of every game for each empty box. Then, four "for loops" nested inside of each other
                would check to see every game that was still available for the current team. An inverse array
                would then be created to store every unavailable game. Both available and unavailable arrays
                of games would be altered if NESTS mode was set. After that, another series of "for loops" updated
                the chart and roster on the page to properly display the available games and characters. Finally,
                all of the data is sent to hidden value sections in the HTML document so they could later be sent
                into the database.
            </p>
        <h2>Ready? - PHP and HTML</h2>
            <p>
                One of the biggest challenges I faced during the project was figuring out a method of transferring
                data between my JavaScript and my PHP. I was able to solve the issue through handy uses of hidden
                value fields. Both the JavaScript and the PHP would alter a specific hidden value field in the HTML
                that could be read and updated by both languages. The first form field in the HTML was 2 radio options
                that set whether the user would be working with a team of 3 or 4 fighters. This data would be sent to
                a hidden value field that would be read by the JavaScript file. The second form field appeared after
                every character select field were filled and displayed a field for the user to name their team and a
                submit button. The submit button sent the team name, as well as the 4 hidden value fields modified by
                the JavaScript document into the database.
            </p>
        <h2>Go! - SQLITE</h2>
            <p>
                If the user had signed up and logged in, the PHP would sent the user's team data into a database, as
                well as the user themselves in order for the user to load their team data, and not someone else's. Each
                user themselves are stored inside of the database in a table containig their name, email, and password. 
                This would have been submitted through a "sign-up" page with PHP, and retrieved through a "log-in" page 
                also with PHP. The team data is stored inside of a seperate table containing the user's email, the name
                of the team, and each of the 3 or 4 fighters. If only 3 fighters were saved, fighter 4 is saved as 0.
                If the user goes to check their teams, the PHP on the page retrieves the data for all of the user's
                teams from the database using loops, displaying their available games, as well as giving the user the 
                option of either changing the name of the team, or to outright delete it.
            </p>
        <h2>Finish! - CSS</h2>
            <p>
                After the project was completed, I went back and touched up the interface so that it was no longer a wirframe.
                I replaced the neutral gray color scheme with navy blue and a red and blue gradient that is present in the
                design for the most iconic game in the series: The King Of Fighters '98. I also added a few additional colors
                to the color scheme (light purple and light blue) in order to complement my navy blue and to help with
                readibility on the pages with the red and blue gradient, as the gradient made everything harder to read.
                Fonts were also selected to match the font-family from the newest entry in the series at the time, The King Of
                Fighters 15. I also went back into the JavaScript and added some code that would select a random stage to use as the
                background either from The King Of Fighters '98, or from The King Of Fighters '99 if the site was in NESTS mode.
            </p>
    </div>
    <?php include 'footer.php' ?>
    <?php include 'preview_js.php' ?>
</body>
</html>