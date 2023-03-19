<?php

    session_start();
    if($_COOKIE['userLogin'])
    {
        setcookie('viewUser', 'true', time() + 900, '/');
        // Open the file for reading
        $file = fopen('Database/UserList.txt', 'r');
        $count = 1;

        // Initialize the user data array
        $userData = [];

        // Loop through the file and store the user data in an array
        while(!feof($file))
        {
            $data = fgets($file);
            $userData[] = explode('|', $data);
        }

        // Close the file
        fclose($file);
?>


<html>
    <head>
        <title>Merchant's List</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="CheckOut.php" enctype="">
            <h1 align="center">Merchant's List</h1>
            <br/> <br/>
            <label for="search">Search User: </label>
            <input type="text" name="search" id="search" value=""/> 
            <br/> <br/>
            <table align="center" border="1" width="1500px">
                <tr>
                    <th width="100px">Serial No:</th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Account Type</th>
                    <th>Business Name</th>
                    <th>Business Link</th>
                    <th>Action</th>
                </tr>
                
               
                <?php 

                    foreach($userData as $user):
                        if(trim($user[4]) !== 'Admin' && trim($user[4]) !== 'Customer')
                        { 

                ?>
                <tr align="center">
                    <td><?php echo $count ?></td>
                    <td><?php echo $user[0]; ?></td>
                    <td><?php echo $user[1]; ?></td>
                    <td><?php echo $user[2]; ?></td>
                    <td><?php echo $user[4]; ?></td>
                    <td><?php echo isset($user[5]) ? $user[5] : ''; ?></td> <?php //Check whether the field for that specific row is empty ?>
                    <td><?php echo isset($user[6]) ? $user[6] : ''; ?></td> <?php //Check whether the field for that specific row is empty ?>
                    <td><u>Remove</u></td>
                </tr>
                <?php 
                    $count++;
                        }
                endforeach; 
                ?>
                </tr>
            </table>
            </br> </br>
        </form>
    </body>
</html>

<?php

    }
    else
    {
        header('location: HomePage_Admin.php');
    }

?>