<?php
?>






<!doctype html>
<html lang="en">

<head>
    <title>Shipped products</title>
</head>

<body>
    <!--Header inclusion-->
    <?php include 'header.php' ?>

    <!--Main table structure-->
    <table border="0" id="home" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="400">
                <?php include 'side_panel.php' ?>
            </td>
            <td align="center" valign="top">
                <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center">
                    <tr>
                        <td align="left" valign="top" height="50">
                            <font face="arial" color="#000000" size="6">
                                Shipped products
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <th align="center" valign="top" colspan="4">
                            <table border="2" width="100%" cellpadding="15" cellspacing="0" align="center">
                                <tr>
                                    <th align="centre" valign="top">
                                        <font face="arial" color="#000000" size="3">
                                            Product Name
                                        </font>
                                    </th>
                                    <th align="centre" valign="top">
                                        <font face="arial" color="#000000" size="3">
                                            Shipping status
                                        </font>
                                    </th>
                                    <th align="centre" valign="top">
                                        <font face="arial" color="#000000" size="3">
                                            Shipping date
                                        </font>
                                    </th>
                                    <th align="centre" valign="top">
                                        <font face="arial" color="#000000" size="3">
                                            Expected date to reach
                                        </font>
                                    </th>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
                                        <font face="arial" color="#000000" size="3">
                                            M1 Mobile
                                        </font>
                                    </td>
                                    <td align="center" valign="top">
                                        <font face="arial" color="#000000" size="3">
                                            Shipped
                                        </font>
                                    </td>
                                    <td align="center" valign="top">
                                        <font face="arial" color="#000000" size="3">
                                            28/10/2021
                                        </font>
                                    </td>
                                    <td align="center" valign="top">
                                        <font face="arial" color="#000000" size="3">
                                            4/11/2021
                                        </font>
                                    </td>
                                </tr>
                            </table>
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