
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label for="username">username</label>
    <input type="text" name="username" placeholder="email">
    <label for="password">password</label>
    <input type="password" name="password" placeholder="password">
    <button type="submit" name="submit">submit</button>
</form>

<?php
    
    if(isset($_POST['submit']))
    {
        $user=$password="";
        if($_POST['username']== NULL)
        {
            echo "Please enter your name";
        }
        else
        {
            $user=$_POST['username'];
        }
        if($_POST['password']==NULL)
        {
            echo "please enter your password";
        }
        else
        {
            $password = $_POST['password'];
        }
        if($user && $password)
        {
            require './connect.php';
            $conn = connectDatabase();
            $sql="select * from users where user='".$user."' and password='".$password."'";
            $query=mysqli_query($conn, $sql);
             if(mysqli_num_rows($query) == 0)
            {
                echo "Username or password is not correct, please try again";
            }
            else
            {
                $row=mysqli_fetch_array($query);
                echo'dang nhap thanh cong!!!';
            }
        }
    }
?>
