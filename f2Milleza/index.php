
<!DOCTYPE html>
<!-- saved from url=(0044)file:///C:/xampp/htdocs/f2Milleza/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegIt</title>
    <style>
        html,body{
            height: 100%;
        }
        body{
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0px;
        }
 
        header{
            background-color: rgba(136, 201, 107, 0.5);
            width: 100%;
            padding-left: 150px;
            color: white;
            display: flex;
            align-items:  center;
        }
        header nav {
            display: flex;
            margin-left: auto;
            padding-right: 150px;
            gap: 100px; 
        }

        header a {
            color: white; 
            text-decoration: none; 
            font-weight: bold; 
            font-size: 18px;
        
        }

        header a:hover {
            text-decoration: underline; 
        }
        table {
            width: 100%;
        }

        .form {
            width: 400px;
            margin: 100px auto;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        }
        

        input[type="text"] {
            width: 370px;
            height: 40px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            background-color: rgba(136, 201, 107, 0.1);
        }

        #submit {

            background-color: #348434;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            width: 380px;
            height: 40px;
            cursor: pointer;
            font-weight: bold;
        }
        #cancel {
            background-color: white;
            color: #da6856;
            border: 2px solid #da6856;
            border-radius: 10px;
            width: 380px;
            height: 40px;
            cursor: pointer;
            font-weight: bold;
        }
        footer{
            background-color: rgba(136, 201, 107, 0.1);
            width: 100%;
            margin-top: auto;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            color: white;
            padding: 10px;

        }
    </style>
</head>
<body>

    
    <header>
        <h1>RegIt</h1>
    <img src="./index_files/logo.png" alt="Logo" style="height: 50px; margin-left: 25px;">
    <nav>
        <a href="file:///C:/xampp/htdocs/f2Milleza/index.html">Login</a>
        <a href="file:///C:/xampp/htdocs/f2Milleza/index_files/about.html">About Us</a>
        <a href="file:///C:/xampp/htdocs/f2Milleza/contact.html">Contact Us</a>
    </nav>
    </header>


    
    <div class="form">
        <h2>Login</h2>
        <form id="form" action="file:///C:/xampp/htdocs/f2Milleza/index.html#" method="post">
            <table>
                <tr>
                    <td>Username:</td>
                </tr>
                <tr>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                </tr>
                <tr>
                    <td><input type="text" name="password"></td>
                </tr>
            </tbody></table>
            <br>
            <button id="submit"><a href="dashboard.php"  style="color: #ffffff;">LOGIN</a></button><br>>
            <br>
            <button id="cancel"><a href="register.php"  style="color:rgb(0, 0, 0);">REGISTER NEW USER</a></button><br>>
            
            
        </form>
    </div>


    <footer>
        <p>Jervin Ryle I. Milleza | BSCS - 2</p>
    </footer>

</body></html>
