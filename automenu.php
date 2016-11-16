<!DOCTYPE html>
<html>
  <head>
   <title>Vertical menu</title>
  <style type="text/css">
  #navigation {
   width:200px; 
   float:left; 
   margin-top:5px;
  }
  #navigation ul{
   margin:0px; 
   padding:0px; 
   background-color: #CCC;
  }
  #navigation ul li {
     height:25px;
   line-height:25px;
   list-style:none;
   padding-left:10px;
   border-top:#fff solid;
   border-bottom:#fff solid;
   border-width:1px;
   cursor:pointer;
  }
  #navigation ul li a{
   text-decoration:none;
   color: #fff;
  }
  #navigation ul li:hover{
   background-color: #39F; 
   position:relative;
  }
  #navigation ul ul {
   display:none;
   position:absolute;
   left:150px;
   top:0px;
   border:#fff solid;
   border-width:1px;
   background-color: #CCC;
  } 
  #navigation ul li:hover ul {
   display:block;
  }
  #navigation ul ul li {
   border:none; 
   width:150px; 
   float:left; 
   display:inline;
  }
  #navigation ul ul li:hover {
   border:none;
  }
  </style>
  </head>
  <body>
  <div id="navigation">
  <ul>
  <?php
   $mysqli=mysqli_connect('localhost','root','12345','blog');
   $sql="SELECT * FROM categories WHERE parent_id = 0";
   $result=mysqli_query($mysqli,$sql) or die(mysqli_error());
   while($row=mysqli_fetch_array($result)){
    $cat_id=$row['cat_id'];
    $cat_name=$row['cat_name'];
    echo "<li>
    <a href='#'>".$cat_name."</a>";
    echo "<ul>";
    $sql2="SELECT * FROM categories WHERE parent_id=$cat_id and cat_id<>0";
    $result2=mysqli_query($mysqli,$sql2) or die(mysqli_error());

    while($row=mysqli_fetch_array($result2)){
     $sub_cat_id=$row['cat_id'];
     $sub_cat_name=$row['cat_name'];
	 $menu=$row['menu'];
	 
     echo "<li><a href='index.php/$menu'>".$sub_cat_name."</a></li>";
    }
    echo "</ul>";
    echo "</li>";
  
   }
  ?>
  </ul>
  </div>
  </body>
</html>