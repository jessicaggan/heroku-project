<?php
    $search_URL="http://www.google.com/search?q=";
    if(isset($_POST['submitBtn'])){
        $keywords = $_POST['keywords'];
        header("location: ".$search_URL.$keywords);
    }
?>
<script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.15.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body onload=display_ct5()>
    <!-- <header>
       <a href="youtube.com"> <i class="bi bi-music-note-beamed"></i> </a> 
    </header> -->
	<div class="banner-text">
		<h2 id ="ct5"></h2>
        <script type="text/javascript"> 
                function display_ct5() {
                var x = new Date()
                var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

                var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
                x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
                document.getElementById('ct5').innerHTML = x1;
                display_c5();
                }
                function display_c5(){
                    var refresh=1000; // Refresh rate in milli seconds
                    mytime=setTimeout('display_ct5()',refresh)
                }
                display_c5()
            </script>
        <h1 id="greeting"></h1>
        <script>
                var myDate = new Date();
                var hrs = myDate.getHours();

                var greet;

                if (hrs < 12)
                    greet = 'Good Morning';
                else if (hrs >= 12 && hrs <= 17)
                    greet = 'Good Afternoon';
                else if (hrs >= 17 && hrs <= 24)
                    greet = 'Good Evening';

                var txt = "<b>" + greet +", Name <b>!";
                document.getElementById('greeting').innerHTML =txt;
                
            </script>
        <div class="box">
                <form action="" method="post" target="_blank">
                    <input type="text" class="input" name="keywords" required>
                    <button name="submitBtn"><i class="bi bi-search"></i></button>
                </form>
                    <i class="fas fa-search"></i>
            </div>
	</div>
	<div class="animation-area">
		<ul class="box-area">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>
