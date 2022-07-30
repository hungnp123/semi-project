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
    .club{
        margin-bottom: 30px;
    	height: auto;
    	width: 25%;
        text-align: center;
        padding-left: 20px;
        padding-top: 8px;
        padding-right: 20px;
        padding-bottom: 10px;
    	border-radius: 2%;
    	margin-left: 30px;
        margin-top: 30px;
    	margin-right: 15px;
    	box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
 		background: white;
    }
</style>
<body>
    <div class="wrapper">
        <div class="club">
            <table>
                <h2>Club</h2>
                <hr/>
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