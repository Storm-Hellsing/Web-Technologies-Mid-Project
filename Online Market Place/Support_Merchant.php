<?php

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']))
    {
        session_start();
    

?>

<html>
    <head>
        <title>Support Page</title>
    </head>
        
    <body>
        <form>
            <h1 align="center">Welcome to Euphoria Support</h1>
            <h3 align="center"><u> Help Lines</u></h3>
            <table align="center">
                <tr align="left" width="350px">
                    <th>Customer Care:</th>
                    <th>9258800</th>
                </tr>

                <tr align="left" width="350px">
                    <th>Merchant Support:</th>
                    <th>9268800</th>
                </tr>
            </table>

            <br/> <br/>
            <br/> <br/>
            
            <h3 align="center"><u>Submit A Ticket</u></h3>
            <table align="center">
                <tr>
                    <th width="350px"><a href="SubmitTicket_Merchant.php">Merchant Support</a</th>
                </tr>
            </table>
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