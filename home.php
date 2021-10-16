<?php include_once 'header.php';
session_start();?>
<hr>
<div class="container">
    <form method="post" action="Login_Controller.php">
        <div class="mb-3">
            <input type="text" class="form-control" name="login" placeholder="Login">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <input type="submit">
    </form>
</div>

<?
var_dump($_SESSION); 
if(!is_null($_SESSION['login']))

{
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Login</th>
            <th scope="col">Password</th>
            <th scope="col">Password md5</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>
                <?echo $_SESSION['login'];?>
            </td>
            <td>
                <?echo $_SESSION['pass'];?>
            </td>
            <td>
                <?echo $_SESSION['passmd'];?>
            </td>
        </tr>
    </tbody>
</table>
<?

}

?>

<?php include_once 'footer.php';?>