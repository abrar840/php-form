<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>

    table{width:20%;}
    table, th, td {
            border: 1px solid black;
        } </style>
</head>

<body>




    <table>

        <tr>
            <th>name</th>

            <th>email</th>





        </tr>







        <?php

        session_start();

        $data = $_SESSION["data"];

        ?>




        <?php foreach ($data as $row) { ?>

        <tr>

            <td> <?php echo $row['name'] ?> </td>
            <td> <?php echo $row['email'] ?> </td>
            



        </tr>




        <?php } ?>






    </table>



</body>

</html>