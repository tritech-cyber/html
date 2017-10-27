<html>
<head>
<title>VIDEO</title>


<style>
	

</style>


</head>
<body>
<hr />
<center>
<a href = "index.php?v=2" class = "menu" >Galileo Galilei Part 1</a>&nbsp; 
<a href = "index.php?v=3"class = "menu" >Galileo Galilei Part 2</a>&nbsp;  
<a href = "index.php?v=4" class = "menu" >Galileo Galilei Part 3</a>&nbsp; 
<a href = "index.php?v=5" class = "menu" >Galileo Galilei Part 4</a>&nbsp; 



<hr />
<?php
$name = "Khan : Scale of Small";
if (isset($_GET['v'])) {
	$video = $_GET['v']; // Default page
	} else {
		$video = 1;
	}
if ($video == 1) { $movie ="yaya.mp4";$thumb="default.jpg"; $name = " velcoity ";   }
if ($video == 2) { $movie ="Galileo1.mp4";$thumb="default.jpg"; $name = "Galileo Part 1 ";   }
if ($video == 3) { $movie ="Galileo2.mp4";$thumb="default.jpg"; $name = "Galileo Part 2";   }
if ($video == 4) { $movie ="Galileo3.mp4";$thumb="default.jpg"; $name = "Galileo Part 3";    }
if ($video == 5) { $movie ="Galileo4.mp4";$thumb="default.jpg"; $name = "Galileo Part 4";    }




?>


movie<?php echo "$movie"; ?>" 
name <?php  echo "Video : $name";?>
<hr />

</body>
</html>
