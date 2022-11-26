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
    <h2>Customer</h2>
    <label>(name, surname, age, town)<br>
        <?php echo $_POST['Name']; ?>
        <?php echo $_POST['Surname']; ?>  
        <?php echo $_POST['Age']; ?>
        <?php echo $_POST['Town']; ?>  
    </label>

    <form action="Payments_Seliukov.php" method="post">
        <div id="hiddenData">
            <input name="Name" value=<?php echo $_POST['Name']; ?>>
            <input name="Surname" value=<?php echo $_POST['Surname']; ?>>
            <input name="Age" value=<?php echo $_POST['Age']; ?>>
            <input name="Town" value=<?php echo $_POST['Town']; ?>>
        </div>

    <table class="reg_table">
        <tr>
            <td>
                <select name="Item1">
                    <option value="Bicycle">Bicycle</option>
                    <option value="Helmet">Helmet</option>
                    <option value="Ball">Ball</option>
                </select>
            </td>
            <td>
                <select name="Item1Amount">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <select name="Item2">
                    <option value="Chair">Chair</option>
                    <option value="Table">Table</option>
                    <option value="Lamp">Lamp</option>
                </select>
            </td>
            <td>
                <select name="Item2Amount">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Buy"></td>
        </tr>
    </table>
    </form>

<p>&copy; Seliukov 2022</p>
</body>

</html>