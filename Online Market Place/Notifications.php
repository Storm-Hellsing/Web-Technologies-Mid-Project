<?php

    session_start();
    if(isset($_COOKIE['userLogin']) && isset($_COOKIE['userID']) && isset($_COOKIE['userEmail']))
    {

    $itemList = [

                    'r1'=>['n'=>"Contratulation have received 20% discounts on clothing items.", 'time'=>"Just Now.", 'Action'=>"view"],
                    'r2'=>['n'=>"You got a new message from MECHTECH", 'time'=>"30 minutes ago", 'Action'=>"view"],
                    'r3'=>['n'=>"Your Return Order has been issued.", 'time'=>"35 minutes ago", 'Action'=>"view"],
                    'r4'=>['n'=>"Your order is being processed.", 'time'=>"1 hour ago", 'Action'=>"view"]

                ];

?>

<html>
    <head>
        <title>Notifications</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="PaymentOptions.php" enctype="">
            <h1 align="center">Notofications</h1>
            <br/> <br/>
            <h5 align="center"><u>See All</u></h5>
            <table align="center" border="1" width="1500px">

                    <?php

                        foreach($itemList as $item)
                        {
                            
                    ?>
                <tr align="center">
                    <td><?php echo $item['n'];?></td>
                    <td><?php echo $item['time'];?></td>
                    <td><u><?php echo $item['Action'];?></u></td>

                    <?php

                        }

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
        header('location: HomePage_Customer.php');
    }

?>