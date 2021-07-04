<html>
<title> FORM HANDLING</title>
<?php

if (isset($_POST['submit'])){
    if (empty($_POST['name'])){
        echo'Name is required <br />';
    } else{    
    echo "name".$_POST['name']. '<br />';
    }
    if(empty($_POST['email'])){
        echo 'email is required <br />';
    } else{

    echo "email".$_POST['email']. '<br />';
    }
}

?>

<body>



<form action="" method="POST">
<p>Name: <input type="text" name="name" ><br></p>
<p>E-mail: <input type="text" name="email" ><br></p>
<input type="submit" name= "submit">
</form>

</body>
</html>

