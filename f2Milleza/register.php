<?php    
    include 'connect.php';    
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Page</title>
    <style>
        html,body{
            height: 100%;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0px;
            background-image: url('bg.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
        }
        
        header{
            background-color: rgba(136, 201, 107, 0.5);
            width: 100%;
            padding-left: 50px;
			
            color: white;
            display: flex;
            align-items:  center;
        }

        .form-container {
            margin: 12px auto;
            padding: 30px;
            background-color: white;
            width: 60%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-container label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-container input[type="text"],
        .form-container input[type="password"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container input[type="submit"] {
            background-color: #348434;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #287028;
        }

        .form-container input[type="button"] {
            background-color: #da6856;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .form-container input[type="button"]:hover {
            background-color: #b1574b;
        }

        footer {
            background-color: rgba(136, 201, 107, 0.1);
            width: 100%;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            color: white;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="post">
            <label>Firstname:</label>
            <input type="text" name="txtfirstname" required>

            <label>Lastname:</label>
            <input type="text" name="txtlastname" required>

            <label>Gender:</label>
            <select name="txtgender" required>
                <option value="">----</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label>User Type:</label>
            <select name="txtusertype" required>
                <option value="">----</option>
                <option value="student">Student</option>
                <option value="admin">Admin</option>
            </select>

            <label>Username:</label>
            <input type="text" name="txtusername" required>

            <label>Password:</label>
            <input type="password" name="txtpassword" required>

            <label>Program:</label>
            <select name="txtprogram" required>
                <option value="">----</option>
                <option value="bsit">BSIT</option>
                <option value="bscs">BSCS</option>
            </select>

            <label>Year Level:</label>
            <select name="txtyearlevel" required>
                <option value="">----</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>

            <input type="submit" name="btnRegister" value="Register">
            <input type="button" value="Cancel" onclick="window.location.href='index.php'">
        </form>
    </div>

<?php    
    if(isset($_POST['btnRegister'])){
        // Retrieve data from the form and save the value to variables
        $fname = $_POST['txtfirstname'];        
        $lname = $_POST['txtlastname'];
        $gender = $_POST['txtgender'];
        $utype = $_POST['txtusertype'];
        $uname = $_POST['txtusername'];        
        $pword = $_POST['txtpassword'];    
        $hashedpw = password_hash($pword, PASSWORD_DEFAULT);

        // For tblstudent
        $prog = $_POST['txtprogram'];        
        $yearlevel = $_POST['txtyearlevel'];        
        
        // Save data to tbluser    
        $sql1 ="INSERT INTO tbluser(firstname, lastname, gender, usertype, username, password) 
                VALUES('".$fname."', '".$lname."', '".$gender."', '".$utype."', '".$uname."', '".$hashedpw."')";
        mysqli_query($connection, $sql1);
                
        if ($utype != "admin") {
            $last_id = mysqli_insert_id($connection); 

            $sql2 = "INSERT INTO tblstudent(program, yearlevel, uid) 
                     VALUES('".$prog."', '".$yearlevel."', '".$last_id."')";
            mysqli_query($connection, $sql2);
        }
        
        echo "<script language='javascript'>
                alert('New record saved.');
              </script>";
        header("location: dashboard.php");
    }
?>

</body>
</html>

<?php 
    include 'footer.php'; 
?>
