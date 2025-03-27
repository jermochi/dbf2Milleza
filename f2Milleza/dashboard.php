<?php    
    include 'connect.php';
    include 'readrecords.php';   
    include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
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

        .button-container {
            margin: 20px;
            text-align: center;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #348434;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }

        .button-container button:hover {
            background-color: #287028;
        }
        

        .table-container {
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            width: 80%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container th, .table-container td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table-container th {
            background-color: #348434;
            color: white;
        }

        .table-container tr:nth-child(odd) {
                background-color: #ffffff; /* White color for odd rows */
        }

        .table-container tr:nth-child(even) {
            background-color:rgb(235, 235, 235); /* Light gray color for even rows */
        }

        .table-container td button {
            padding: 5px 10px;
            background-color: #da6856;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .table-container td button:hover {
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

    <div class="button-container">
        <button><a href="addrecord.php" style="color: white; text-decoration: none;">Add New Student</a></button>
        <button><a href="index.php" style="color: white; text-decoration: none;">Logout</a></button>
    </div>

    <div style='background-color: rgba(136, 201, 107, 0)'>
        <center
            <p style="color:white"><h2>List of Students</h2></p>
        </center>
    </div>  

    <br>

    <div class="table-container">
        <table id="tblCustomerRecords" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
            <thead>
                <tr> 
                    <th>ID Number</th> 
                    <th>Firstname</th> 
                    <th>Lastname</th>
                    <th>Program</th>                     
                    <th>Action</th>
                </tr> 
            </thead>  
            <tbody>
                <?php
                    while($row = $resultset->fetch_assoc()):
                        $id = $row['uid'];
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $row['firstname'] ?></td>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['program'] ?></td> 
                    <td>
                        <button><a href="update.php?id=<?php echo $id; ?>" style="color: white; text-decoration: none;">UPDATE</a></button> | 
                        <button><a href="delete.php?id=<?php echo $id; ?>" style="color: white; text-decoration: none;">DELETE</a></button>
                    </td>
                </tr>
                <?php endwhile;?>
            </tbody>         
        </table>
    </div>
</body>
</html>

<?php include 'footer.php';  ?>
