<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>TPA</title>
		<style type="text/css">
		
			body {
				margin:0;
				padding:0;
				font-family: Sans-Serif;
				line-height: 1.5em;
			}
			
			#header {
				background: #ccc;
				height: 100px;
			}
			
			#header h1 {
				margin: 0;
				padding-top: 15px;
			}
			
			main {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 100%;
                                height: 100%;
			}
			
			#nav {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 230px;
				margin-left: -100%;
				background: #eee;
			}
			
			#footer {
				clear: left;
				width: 100%;
				background: #ccc;
				text-align: center;
				padding: 4px 0;
			}
	
			#wrapper {
				overflow: hidden;
			}
						
			#content {
				margin-left: 230px; /* Same as 'nav' width */
			}
			
			.innertube {
				margin: 15px; /* Padding for content */
				margin-top: 0;
			}
		
			p {
				color: #555;
			}
	
			nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}
			
			nav ul a {
				color: darkgreen;
				text-decoration: none;
			}
		
		</style>
		
		<script type="text/javascript">
			/* =============================
			This script generates sample text for the body content. 
			You can remove this script and any reference to it. 
			 ============================= */
			var bodyText=["The smaller your reality, the more convinced you are that you know everything.", "If the facts don't fit the theory, change the facts.", "The past has no power over the present moment.", "This, too, will pass.", "</p><p>You will not be punished for your anger, you will be punished by your anger.", "Peace comes from within. Do not seek it without.", "<h3>Heading</h3><p>The most important moment of your life is now. The most important person in your life is the one you are with now, and the most important activity in your life is the one you are involved with now."]
			function generateText(sentenceCount){
				for (var i=0; i<sentenceCount; i++)
				document.write(bodyText[Math.floor(Math.random()*7)]+" ")
			}
		</script>	
	
	</head>
	
	<body>		

		<header id="header">
			<div class="innertube">
				<h1>Theme Park Management</h1>
			</div>
		</header>
		
		<div id="wrapper">
		
			<main>
				<div id="content">
					<div class="innertube">
						<h1>Heading</h1>
                                                <?php $session_name = $this->session->userdata('SESSION_NAME');
                                                echo $session_name;
                                                ?>
<!--						<p><script>generateText(20)</script></p>-->
					</div>
				</div>
			</main>
			
			<nav id="nav">
				<div class="innertube">
<!--					<h3>Admin</h3>-->
                                        <?php if($_SESSION['SESSION_NAME']=='admin' || $_SESSION['SESSION_NAME']=='ticket_seller'){?>
					<ul>
						<li><a href="#">Register a guest</a></li>
						<li><a href="#">view guest info</a></li>
                                                <?php }?>
                                                <?php if($_SESSION['SESSION_NAME']=='admin'){?>
						<li><?php echo anchor('show_attraction', 'View Attractions Info'); ?></li>
                                                <li><?php echo anchor('add_attraction', 'Add Attraction'); ?></li>
                                                <?php }?>
						<li><a href="#">Attraction Package</a></li>
                                                <li><a href="#">Pass management</a></li>
					</ul>
				</div>
			</nav>
		
		</div>
		
		<footer id="footer">
			<div class="innertube">
				<p>Footer...</p>
			</div>
		</footer>
	
	</body>
</html>