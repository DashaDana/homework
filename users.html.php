<html>
<head>

    <title> Домашнее заданиие </title>
<style>

    td{border:darkgreen solid 6px;background-color:yellow;fonf-size:24px;color:darkgreen;}
    th{border:darkgreen solid 6px;background-color:lightgreen;color:white;font-size:30px;}
</style>
</head>


<body>

    <table border="2" width="30%" cellpadding="4">
        <tr>
            <th >Name:</th>
            <th >Age: </th>
        </tr>

        <?php for ($i = 0; $i < count($users); $i++): ?>

        <tr>
            <td class="test"> <?php echo $users[$i]['name']?></td>
            <td class="test"><?php echo $users[$i]['age']?></td>

        </tr>
        <?php endfor?>

    </table>



    </body>



</html>