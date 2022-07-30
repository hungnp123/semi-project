<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .header{
    	
    }
    .header ul li{
    	list-style: none;
    }
    .header img{
    	float:left;
    }
	.header a{
		margin-top: 15px;
		margin-right: 10px;
		margin-left: 10px;
		margin-bottom: 15px;
	}
</style>
<body>
    <div class="wrapper">
        <div class="club">
<table border="1 solid black">
    <tr> 
        <th>Club Name: </th>
        <th>Images: </th>
        <th>Country: </th>

        <th>Action: </th>
     </tr> 
        <?php 
        $connect = mysqli_connect('localhost','root','','semi_project');
        $sql = "SELECT * FROM club";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)){
            $club_id = $row['club_id'];
            $club_name = $row['club_name'];
            $club_img = $row['club_img'];
            $club_national = $row['club_national'];
            ?>
        <tr>
            <td> <?php echo $club_name ?></td>
            <td> <img src="img/<?php echo $club_img ?>" style ="width: 80px; height: 80px;"></td>
            <td> <?php echo $club_national ?></td>
            <td> <a href='detail.php ?id=<?php echo $club_id; ?>' class='btn btn-primary'>Details</a></td>
        </tr>
            <?php
            }
            ?>      
</table>
        </div>
    </div>
</body>       
</html>