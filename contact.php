<!DOCTYPE HTML>
<html>
<?php include 'head.php' ?>

<!-- do you already have jquery, you should only have one!  -->
<script src="jquery-3.4.1.min.js"></script>

<body>
<?php include 'nav.php' ?>

<div id="page-wrapper">
	  <h1>Contact Me</h1>

	  <div id="form-messages"></div>
		
		<form id="ajax-contact" method="post" action="mailer.php">
			<div class="field">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
			</div>

			<div class="field">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
			</div>

			<div class="field">
				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea>
			</div>

			<div class="field">
				<button type="submit">Send</button>
			</div>
		</form>
        <div class="cards">
            <!-- <img src="img/card-front.png" alt="Aiden Zeilinger"> -->
			<p>Aiden Zeilinger, Graphic Designer & Marketing Coordinator</p>
			<br>
			<p>aiden.zeilinger@outlook.com</p> 
			<br>
			<p>484-602-8888</p> 
			<br>
			<p>aidenzeilinger.design</p>
            <!-- <img src="img/card-back.png" alt="Aiden Zeilinger, Full-Stack Developer, hello@aidenzeilinger.design, 484-602-8888, aidenzeilinger.design"> -->
        </div>
	</div>

	
	<script src="app.js"></script>


</body>
</html>