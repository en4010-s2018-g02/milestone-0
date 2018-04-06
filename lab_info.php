<?php
if(isset($_POST['submit'])){
    $con = mysql_connect("lamp.eng.fau.edu","ngacharich2014","Boca5i6LST");
   
    if(!$con){
        die("Cannot connect:" .mysql_error());
    }

    mysql_select_db("ngacharich2014",$con);

    $sql="INSERT INTO project(znumber,classname) VALUES ('$_POST[znumber]','$_POST[classname])";

    mysql_query($sql,$con);
    mysql_close();

}

?>

