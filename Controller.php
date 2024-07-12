<html>

<body>

    <?php

    session_start();



    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "newdb";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("conection failed" . $conn->connect_error);



    } else {
        echo "connection succesful";
    }





    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //echo $_REQUEST['name'];
//echo $_REQUEST['email'];
    
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];



        $query1 = "insert  into users(name,email) VALUES('$name','$email')";

        $conn->query($query1);


        header("location:index.html");
        exit;
    }



    $query2 = "select * from  users where 1";
    $result = $conn->query($query2);

    if ($result->num_rows > 0) {

        $data = [];


        while ($row = $result->fetch_assoc()) {

            $data[] = $row;


        }


        $_SESSION['data'] = $data;

        header("location:OuTPutForm.php");
    }





    ?>
</body>






</html>