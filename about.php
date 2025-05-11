<!DOCTYPE HTML>
<html>
<?php include 'head.php' ?>
<body>
    <?php include 'nav.php' ?>
    <canvas id="preview-animation" width="1600" height="700"></canvas>

<div class = "about">
    <h1>Hello, I am Aiden Zeilinger.</h1>
    <div class = "about-column">
        <img src="img/aiden.JPG">
        <div class="bio">
            <p id="bio_blurb">
            Graphic Designer with knowledge in marketing, as well as code development for emails. 
            Believing that no one truly “arrives” at anything, I am always pushing myself and my creative 
            work further through innovation and education, always leveling up to meet stakeholder expectations 
            and going beyond to ensure that they are ahead in the latest developments in design to remain competitive 
            in the rapidly-evolving market. 
            Outside of work, I am a <!--WORD CYCLE-->
            </p> 
            <p id="word_cycle"></p>
        </div>
    </div>
</div>
<?//php include 'footer.php' ?>
<script src="cycle.js"></script>
<?php include 'preview_js.php' ?>

</body>
</html>