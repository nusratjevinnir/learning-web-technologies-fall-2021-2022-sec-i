<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'customer')) {
    header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Cancel Orders</title>
</head>
<body>
<!--Header inclusion-->
<?php include 'header.php' ?>

<!--Main table structure-->
<table border="0" id="home" width="100%" cellpadding="0" cellspacing="0" >
    <tr>
        <td width="400">
            <?php include 'side_panel.php' ?>
        </td>
        <td align="center" valign="top">
            <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center" >
                <tr>
                    <td align="left" valign="top" height="50">
                        <font face="arial" color="#000000" size="6">
                            Cancel Order Page
                        </font>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="top" width="300" height="50">
                        <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center" >
                            <tr>
                                <th>
                                    <img src="../Assets/Images/mobile1.jpg" alt="mobile_img" width="200" height="200">
                                </th>
                                <th>
                                    <button>
                                        <font face="arial" color="#000000" size="4">
                                            Cancel Order
                                        </font>
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <font face="arial" color="#000000" size="6">
                                        M1 MOBILE
                                    </font>
                                </th>
                            </tr>
                        </table>
                    </td>
                    <td align="center" valign="top" width="300" height="50">
                        <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center" >
                            <tr>
                                <th>
                                    <img src="../Assets/Images/headphone1.jpg" alt="headphone_img" width="200" height="200">
                                </th>
                                <th>
                                    <button>
                                        <font face="arial" color="#000000" size="4">
                                            Cancel Order
                                        </font>
                                    </button>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <font face="arial" color="#000000" size="6">
                                        H1 Headphone
                                    </font>
                                </th>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th>
                        <font face="arial" color="#000000" size="4">
                            Total cost: 15000
                        </font>
                    </th>
                </tr>
                <tr>
                    <th>
                        <font face="arial" color="#000000" size="4">
                            Total product: 2
                        </font>
                    </th>
                </tr>

            </table>
        </td>
    </tr>
</table>
<!--Main table structure end-->

<!-- section padding bottom -->
<tr>
    <td height="60">

    </td>
</tr>
<!-- section padding bottom End-->


<!--Footer inclusion-->
<?php include 'footer.php' ?>
</body>
</html>
