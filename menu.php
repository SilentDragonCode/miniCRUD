<?php 
  include('./account/functions.php');
?>
<?php include('./connection.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="./account/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">
	<style>
    body { 
      background-image: url('menu.png');
			background-size: cover;
    }
		.header {
			background: #1b1b1b;
		}
    h1{
      font-size: 30px;
      color: #fff;
      text-transform: uppercase;
      font-weight: 300;
      text-align: center;
      margin-bottom: 15px;
    }
    table{
      width:100%;
      table-layout: fixed;
    }
    .tbl-header{
      background-color: rgba(255,255,255,0.3);
      width:40%;
      margin-left: auto;
      margin-right: auto;
      padding: 20px;
      border: 1px solid #B0C4DE;
      border-radius: 0px 0px 10px 10px;
    }
    .tbl-content{
      height:300px;
      overflow-x:auto;
      margin-top: 0px;
      border: 1px solid rgba(255,255,255,0.3);
    }
    th{
      padding: 20px 15px;
      text-align: left;
      font-weight: 500;
      font-size: 12px;
      color: #fff;
      text-transform: uppercase;
    }
    td{
      padding: 20px 15px;
      text-align: left;
      vertical-align:middle;
      font-weight: 300;
      font-size: 12px;
      color: #fff;
      border-bottom: solid 1px rgba(255,255,255,0.1);
    }


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  font-family: 'Roboto', sans-serif;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
	</style>
</head>
<body>
	<div class="header">
		<h2>Menu</h2>
	</div>
    <section>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
        <thead>
        <tr>
            <th>Pizza's</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>
        <?php
            $sql = "select * from menu";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            foreach($result as $orders) {
                echo "<tr>";
                echo "<td>".$orders['pizza']."</td>";
                echo "<td>".$orders['description']."</td>";
                echo "<td>$".$orders['price']."</td>";
                echo "</tr>";
            }
        ?>
        
    </table>
    </div>
</section>

    <script type="text/javascript">
        // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script>
</body>
</html>