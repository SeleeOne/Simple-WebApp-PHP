<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssOS/main.css">
    <title>Seliukov</title>
</head>

<body>
    <h1>Welcome to my store</h1>
    <label>Oleksii's store</label>
    <h2>Purchase form</h2>
    <h2>The purchase was made</h2>
    <label>(name, surname, age, town)<br>
        <?php echo $_POST['Name']; ?>
        <?php echo $_POST['Surname']; ?>  
        <?php echo $_POST['Age']; ?>
        <?php echo $_POST['Town']; ?>  
    </label>

        <table class="reg_table">
            <tr>
                <td>Commodity</td>
                <td>Amounbt</td>
            </tr>
            <tr>
                <td><?php echo $_POST['Item1']; ?></td>
                <td><?php echo $_POST['Item1Amount']; ?></td>
            </tr>
            <tr>
                <td><?php echo $_POST['Item2']; ?></td>
                <td><?php echo $_POST['Item2Amount']; ?></td>
            </tr>
        </table>

    <a href="Start_Seliukov.html">Back to homepage</a>
    <p>&copy; Seliukov 2022</p>
</body>

</html>