<!DOCTYPE html >
<html>
<head>
	<title>IoT Project</title>
	<style>
		body{
        margin: 0px;
    }
    .both{
        background: url(ind.jpg);
        margin: 0px;
        text-align: center;
    }
	.header{
    padding: 50px;
    width: 100%;
    height: 100px;
    margin: 0px;
    text-align: center;
    vertical-align: middle;
    }
    .logo-box{
        width: 230px;
        height: 210px;
        margin-left: 650px;
        /*border: black;
        border-style: solid;
        background-color: paleturquoise;
        vertical-align: middle;*/
    }
    .middle{
        width: 100%;
        height:40px;
        background-color: mediumseagreen;
    }
    ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    li{
        float: left;
        border-right: 1px solid #bbb;
    }
    li:last-child{
        border right: none;
    }
    li a{
        display: block;
        color: white;
        text-align: center;
        padding: 11px 130px;
        text-decoration: none;
    }
    li a:hover:not(.active){
        background-color: #111;
    }
    .active{
        background-color: #4caf50;
    }
    .form-box{
        font-size: 25px;
        text-align: justify;
        vertical-align: middle;
        background-image: url(industry.jpg);
        background-position: center;
        background-repeat: none;
        height: 100%;
        padding: 10px;
        margin: 0px;
    }

	</style>
</head>
<body>
    <div class="both">
	    <div class="header">
            <center><h1 style="font-size: 60px;">VIDA INDUSTRY</h1></center>
        <!    <img class="vida-logo" src="vida1.jpg" alt="vida-img">
        </div>
	    <div class="logo-box">
			
        </div>
    </div>
	<div class="middle">
    <ul>
     <li><a class="active" href="mainpage.html">Home</a></li>
     <li><a href="daily.html">Daily</a></li>
     <li><a href="weekly.html">Weekly</a></li>
     <li style="float: right"><a href="about.html">About</a></li>   
    </div>
	<div class="form-box">
			<?php
            $d1=$_POST['date'];
            $d2=$_POST['date'];
            ?>
            <center>
            <table border=2>
            <tr><br>
            <th>SN</th>
            <th>Date</th>
            <th>Time</th>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Sound</th>
            <th>Gas</th>
            </tr>
            <?php
            $con=mysqli_connect("localhost","root","","main_base");
            $l=mysqli_query($con,"select * from minutewise where Date between '$d1' and '$d2'");
            while($a=mysqli_fetch_array($l))
            {?>
            <tr>
            <td><?php echo $a['S.N.'];?></td>
            <td><?php echo $a['Date'];?></td>
            <td><?php echo $a['Time'];?></td>
            <td><?php echo $a['Temperature'];?></td>
            <td><?php echo $a['Humidity'];?></td>
            <td><?php echo $a['Sound'];?></td>
            <td><?php echo $a['Gas'];?></td>
            </tr>
            <?php } ?>
            </table>
			</center>
	</div>
</body>
</html>

