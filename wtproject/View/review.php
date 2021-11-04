<?php
session_start();
if(empty($_SESSION["user_name"]) || empty($_SESSION["user_type"]) || ($_SESSION["user_type"] != 'customer')) {
    header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Review</title>
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
                            Product Review
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
                                        Review for M1 MOBILE
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
                                                                Rating:
                                                            </font>
                                                        </td>
                                                        <td width="70%">
                                                            <select name="rating">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="30%">
                                                            <font face="arial" size="4" color="#000000">
                                                                Review:
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
                                                                <font size="5" face="arial">Add Review</font>
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
