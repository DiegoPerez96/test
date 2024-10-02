<?php
session_start();

if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = [
        'milk' => 0,        
        'soft_drink' => 0   
    ];
}

if (isset($_POST['worker_name'])) {
    $_SESSION['worker_name'] = $_POST['worker_name'];
}

if (isset($_POST['action'])) {
    $product = $_POST['product'];
    $quantity = (int)$_POST['quantity'];
    
    if ($_POST['action'] == 'add') {
        
        $_SESSION['inventory'][$product] += $quantity;
    } elseif ($_POST['action'] == 'remove') {
        
        if ($_SESSION['inventory'][$product] >= $quantity) {
            $_SESSION['inventory'][$product] -= $quantity;
        } else {
            $error = "No se pueden quitar más unidades de las disponibles.";
        }
    } elseif ($_POST['action'] == 'reset') {
        
        $_SESSION['inventory'] = [
            'milk' => 0,
            'soft_drink' => 0
        ];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Management</title>
</head>
<body>

<h1>Supermarket management</h1>

<form method="post">
    <label for="worker_name">Worker name:</label>
    <input type="text" name="worker_name" id="worker_name" value="<?php echo isset($_SESSION['worker_name']) ? $_SESSION['worker_name'] : ''; ?>" required><br><br>

    <label for="product">Choose product:</label>
    <select name="product" id="product">
        <option value="soft_drink">Soft Drink</option>
        <option value="milk">Milk</option>
    </select><br><br>

    <label for="quantity">Product quantity:</label>
    <input type="number" name="quantity" id="quantity" required><br><br>

    <button type="submit" name="action" value="add">Add</button>
    <button type="submit" name="action" value="remove">Remove</button>
    <button type="submit" name="action" value="reset">Reset</button>
</form>


<h2>Inventory:</h2>
<p>Worker: <?php echo isset($_SESSION['worker_name']) ? $_SESSION['worker_name'] : 'N/A'; ?></p>
<p>Units milk: <?php echo $_SESSION['inventory']['milk']; ?></p>
<p>Units soft drink: <?php echo $_SESSION['inventory']['soft_drink']; ?></p>


<?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

</body>
</html>
