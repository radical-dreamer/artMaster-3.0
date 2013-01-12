<?php


   
$con=mysql_connect ("localhost","root","");
mysql_select_db("artmaster",$con);
@$sql="select * from table_img where category='logo' and status='0' and user='hafiz'";
@$query=mysql_query($sql);
while(@$row=mysql_fetch_array($query))
{
 @$image=$row ['photo'];
 @$id=$row ['id'];
 ?>
<a href="image.php?id=<?php echo $id ?>"><img src="image/<?php echo $image; ?>" width="250" height="250" class="img-polaroid" ></a>
<?php
}
?>