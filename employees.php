<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="employees.component.css">
</head>
<body>
<body style="margin: 50px;">
    <h1>List of Employees</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "mystore";
                //Create connection
                $connection = new mysqli($servername,$username,$password,$database)
                echo "<tr>
                    <td>1</td>
                    <td>Bill</td>
                    <td>Gates</td>
                    <td>bill.gates@microsoft.com</td>
                    <td>+123456789</td>
                    <td>New York, USA</td>
                    <td>
                        <a href="update">Update</a>
                        <a href="delete">Delete</a>
                    </td>
                </tr>";
            ?>
        </tbody>
    </table>
</body>
</body>
</html>