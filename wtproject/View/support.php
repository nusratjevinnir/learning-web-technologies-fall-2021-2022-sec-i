<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'customer')) {
    header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Support</title>
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
                            Support Tokens
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
                            <!-- Heading Start-->
                            <tr>
                                <td height="160" align="center" valign="middle">
                                    <font face="arial" size="6" color=" #000000">
                                        Support tokens for problems
                                    </font>
                                    <hr width="70" color="#000000">
                                </td>
                            </tr>
                            <!-- Heading  End-->
                            <tr>
                                <td align="center" valign="top">
                                    <table border="1" width="55%" cellpadding="20" cellspacing="0" align="center">
                                        <tr>
                                            <td>
                                                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                                                    <tr>
                                                        <td width="30%">
                                                            <font face="arial" size="4" color="#000000">
                                                                Name:
                                                            </font>
                                                        </td>
                                                        <td width="70%">
                                                            <input type="text" name="name" size="50">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">
                                                            <font face="arial" size="4" color="#000000">
                                                                Email
                                                            </font>

                                                        </td>
                                                        <td width="70%">
                                                            <input type="text" name="email" size="50">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">
                                                            <font face="arial" size="4" color="#000000">
                                                                Issue:
                                                            </font>
                                                        </td>
                                                        <td width="70%">
                                                            <textarea cols="51" name="message" rows="4"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">
                                                            &nbsp;
                                                        </td>
                                                        <td width="70%">
                                                            <button type="submit" name="submit" value="contact">
                                                                <font size="5" face="arial">Send support ticket</font>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
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
