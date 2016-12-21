<html>
<title>Web Programming_Exercise6</title>
	<head>
		<h1><i><center><font color = #1a75ff>My Home Page</font></center></i></h1>
		<p> Hi, my name is Caryl Johanan C. Orosco. I usually let people I know call me by my first name, Caryl. </p>
		
	<style>
		#PI{
			border: 1px solid white;
			color: #66a3ff;
			width: 50%;
			font-color: white;
			font-size: 25%
		}

		body{
			background-image: url(<?=base_url()?>webimgs/background.jpg);
			color: #89f1fa;
		}

		#demo1, #demo2, #demo3, #demo4, #demo5{
			color: #ff0000;
		}
		
		#Visitors{
			background-color: black
		}

		.error {color: #FF0000;}
	</style>
	</head>

		<body>
		<center>
			<table id="PI">
			<tr>
				
				<td id="PI">Hobbies: </td>
				<td id="PI">Reading books and listening to music (+eating)</td>
			</tr>
			<tr>
				<td id="PI">Interests: </td>
				<td id="PI">I like reading about conspiracy theories and unsolved murder cases. </td>
			</tr>
			
			<tr>
				<td id="PI">Birthdate:</td>
				<td id="PI">February 15, 1999</td>
			</tr>
			
			</table>

			<button type="button" onclick="document.getElementById('table').style.fontSize='35px'">
			Enlarge
			</button>

			<p>
			<br>Favorite websites:
			<br><a href= "https://www.youtube.com"><img border="0" alt="Youtube" src="<?php echo base_url('webimgs/youtube.jpg');?>" width=100 height=100></a>
			<a href= "https://www.9gag.com"><img border="0" alt="9gag" src="<?php echo base_url('webimgs/9gag.jpg');?>" width=100 height=100></a>
			<a href= "https://www.youtube.com"><img border="0" alt="YouTube" src="<?php echo base_url('webimgs/youtube.jpg');?>" width=100 height=100></a>
			<a href= "https://www.tumblr.com"><img border="0" alt="Tumblr" src="<?php echo base_url('webimgs/tumblr.jpg');?>" width=100 height=100></a>
			<a href= "https://www.creepypasta.wikia.com"><img border="0" alt="Creepypasta" src="<?php echo base_url('webimgs/creepy.jpg');?>" width=100 height=100></a>
			</p>

			<h2> Spill the T! </h2>

			<p>
				1. Your name is kinda weird, what does it mean?
			</p>

			<p id="demo1">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('demo1').innerHTML = 'NZAAXD or VoidDoubleA'">Click to see answer</button>

			<p>
				2. My favorite subject:
			</p>

			<p id="demo2">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('demo2').innerHTML = 'Anything that has Math'">Click to see answer</button>

			<p>
				3. How long have I been playing Magic?
			</p>

			<p id="demo3">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('demo3').innerHTML = 'Started on September 2016'">Click to see answer</button>

			<p>
				4. What else do you do in your free time?
			</p>

			<p id="demo4">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('demo4').innerHTML = 'Play on my PS3, or play basketball with friends.'">Click to see answer</button>

			<p>
				5. Where do you go to buy magic cards?
			</p>

			<p id="demo5">
				ANSWER
			</p>

			<button type="button" onclick="document.getElementById('q5').innerHTML = 'Hobby shops in taft or SM Megamall, or in Neutral grounds.'">Click to see answer</button>

			</center>

<div id = "Visitors">
<h2><?php echo $title; ?></h2>

<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
		<td><strong>Email</strong></td>
        <td><strong>Home_Address</strong></td>
		<td><strong>Gender</strong></td>
        <td><strong>Cp_Num</strong></td>
        <td><strong>Comment</strong></td>
		<td><strong>Action</strong></td>
    </tr>
<?php foreach ($userinfo as $news_item): ?>
        <tr>
            <td><?php echo $news_item['Name']; ?></td>
			<td><?php echo $news_item['Nickname']; ?></td>
			<td><?php echo $news_item['Email']; ?></td>
			<td><?php echo $news_item['Home_Address']; ?></td>
			<td><?php echo $news_item['Gender']; ?></td>
			<td><?php echo $news_item['Cp_Num']; ?></td>
			<td><?php echo $news_item['Comment']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['User_ID']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['User_ID']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['User_ID']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>
