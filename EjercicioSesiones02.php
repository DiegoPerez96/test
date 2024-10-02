<?php
session_start();

if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [10, 20, 30]; 
}

if (isset($_POST['reset'])) {
    $_SESSION['array'] = [10, 20, 30]; 
}

if (isset($_POST['modify'])) {
    $pos = (int) $_POST['position']; 
    $newValue = (int) $_POST['new_value']; 
    $_SESSION['array'][$pos] = $newValue; 
}

$average = null;
if (isset($_POST['average'])) {
    $array = $_SESSION['array'];
    $average = array_sum($array) / count($array); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Array in Session</title>
</head>
<body>

<h1>Modify array saved in session</h1>

<form method="post">
    <label for="position">Position to modify:</label>
    <select name="position" id="position">
        <?php foreach ($_SESSION['array'] as $index => $value): ?>
            <option value="<?php echo $index; ?>"><?php echo $index; ?></option>
        <?php endforeach; ?>
    </select>
    
    <label for="new_value">New value:</label>
    <input type="number" name="new_value" id="new_value">
    
    <button type="submit" name="modify">Modify</button>
    <button type="submit" name="average">Average</button>
    <button type="submit" name="reset">Reset</button>
</form>

<p>Current array: <?php echo implode(', ', $_SESSION['array']); ?></p>

<?php if ($average !== null): ?>
    <p>Average: <?php echo $average; ?></p>
<?php endif; ?>

</body>
</html>
