


<html>
    <style>
        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
    <body>

        <h3>Lab Registration</h3>

        <form action="lab_info.php" method="POST">
            <div class="imgcontainer">
                <img src="florida_atlantic_football.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Z-number</b></label>
                <input type="text" placeholder="Enter Class" name="znumber" required>

                <label><b>Classname</b></label>
                <input type="password" placeholder="Enter znumber" name="classname" required>

                <input type="submit" name="submit" value="Add">
                <input type="checkbox" > I agree to the term and conditions of the lab
            </div>

            <div class="container" style="background-color:lightgray">

            </div>
        </form>
        
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


    </body>
</html>




