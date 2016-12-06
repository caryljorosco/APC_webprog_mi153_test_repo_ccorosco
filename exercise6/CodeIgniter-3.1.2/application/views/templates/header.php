<html>
        <head>
                <title>My Website</title>
        </head>
		<style>

		body{
			
			background-color: 89F1FA;	
			
		}			

		h1{
			decoration: underline;
			decoration-color: F9926C;
			align: center;
			font: century gothic;
			color: #F9926C;
			size:35
		}

		h2{
			font: century gothic
			color: #F9926C
			align: center;
			size: 25
		}

		p{
			align: center;
			color: FFFFFF;
			font: century gothic;
			size: 25;
		}

		table, th, td{
			border: 1px solid;
			color: FFFFFF;
			size: 25;
		}
		
</style>

        <body>
 
                <h1>Simple CRUD</h1>
                <p><a href="<?php echo site_url('news'); ?>">Home</a> | <a href="<?php echo site_url('news/create'); ?>">Add News</a></p>
				
				<h1> My Home Page </h1>

				<p> Hi, my name is Caryl Johanan C. Orosco. I usually let people I know call me by my first name, Caryl. </p>

		<table>

			<tr>
				<td> Hobbies: </td>
				<td> Reading books and listening to music (+eating) </td>
			</tr>
 
			<tr>
				<td> Interests: </td>
				<td> I like reading about conspiracy theories and unsolved murder cases. </td>
			</tr>

		</table>
			
				<p> My favorite websites:</p>

			<h2>
				<a href="http://9gag.com/">9Gag</a>
				<br><a href="http://www.youtube.com/">YouTube</a></br>
				<a href="https://www.tumblr.com/">Tumblr</a>
				<br><a href="http://creepypasta.wikia.com/wiki/Creepypasta_Wiki">Creepypasta Wiki</a></br>
			</h2>

				<center><img src = "photo.jpg" alt "This is me! :)"></center>
				<br><center><img src = "jer2911.jpg" alt "One of my favorite Bible verses."></center></br>

			<h1>5 Trivias About Me!</h1>

			<body>

				<p id="demo1">1. Your name is kinda weird, what does it mean?</p>

				<button type="button" onclick="document.getElementById('demo1').innerHTML = 'Caryl means strong and Johanan means God-given. My father was the one who chose my name.'">My name means...</button>


				<p id="demo2">2. What's your favorite conspiracy theory?</p>

				<button type="button" onclick="document.getElementById('demo2').innerHTML = 'I loooove the conspiracy theories about the Illuminati and the Mandela Effect. Read about it on your sparetime. :)'">Favorite conspiracy theories!</button>


				<p id="demo3">3. What do you REALLY want to be?</p>

				<button type="button" onclick="document.getElementById('demo3').innerHTML = 'Originally, my plan was to take up Fashion Designing and be a designer someday, but my mom disapproves of it so I took up a computer course since it runs in the family. Both my parents are a graduate of Computer Science. Dad's a Software Engineer while my mom is underemployed, she works as an Executive Officer in a hospital.'">I really wanted to be...</button>	


				<p id="demo4">4. What's your favorite unsolved murder case?</p>

				<button type="button" onclick="document.getElementById('demo4').innerHTML = 'My favorite is the case of JonBenet Ramsey (which had a 4-hour special at CBS and IT WAS AMAZING!) and the case of Elisa Lam'">Unsolved murder?</button>	


				<p id="demo5">5. Do you have a favorite band or artist?</p>

				<button type="button" onclick="document.getElementById('demo5').innerHTML = 'My favorite band is Pentatonix! If you're not aware who they are (which you should be because they are such blessings to the ears) here is a link to their website: http://pentatonixthealbum.ptxofficial.com/'">Oh, yes of course!</button>
