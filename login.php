<?php
session_start(); 

if (isset($_POST['submit'])) {
    if ($_POST['username'] == 'mca' && $_POST['password'] == 'mca') {
        $_SESSION['username'] = $_POST['username'];
        header('Location: user_page.php');
    } else {
        echo 'Incorrect username or password';
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>    
        <label>Username: </label>
        <input type="text" name="username">
    </div>
    <br />
    <div>
        <label>Password: </label>
        <input type="password" name="password">
    </div>
    <br />
    <input type="submit" name="submit" value="Submit">
  </form>