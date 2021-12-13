<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
</head>

<body>
    <!--Header inclusion-->
    <?php include 'header.php' ?>

    <!--Main table structure-->
    <table border="1" id="home" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" valign="top">
                <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center">
                    <tr>
                        <td align="left" valign="top" height="50">
                            <font face="arial" color="#000000" size="6">
                                Create new account
                            </font>
                        </td>
                        <td align="left" valign="top" height="50">
                            <a href="login.php">
                                <button>
                                    <font size="3" face="arial">Cancel registration</font>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <form id="registerForm" name="registerForm" action="../Controller/registerCheck.php"
                                method="post" enctype="multipart/form-data">
                                <table border="1" width="55%" cellpadding="20" cellspacing="0" align="center"">
                                <tr>
                                    <td>
                                        <table border=" 1" width="100%" cellpadding="15" cellspacing="0"
                                    align="center">
                                    <tr>
                                        <td width="30%">
                                            <font face="arial" size="4" color="#000000">
                                                User Name
                                            </font>
                                        </td>
                                        <td width="70%">
                                            <input type="text" name="username" id="username" size="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">
                                            <font face="arial" size="4" color="#000000">
                                                Email
                                            </font>
                                        </td>
                                        <td width="70%">
                                            <input type="email" name="mail" id="mail" size="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">
                                            <font face="arial" size="4" color="#000000">
                                                Password
                                            </font>
                                        </td>
                                        <td width="70%">
                                            <input type="password" name="pass" id="pass" size="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%">
                                            <font face="arial" size="4" color="#000000">
                                                Confirm Password
                                            </font>
                                        </td>
                                        <td width="70%">
                                            <input type="password" name="confirmpass" id="confirmpass" size="50">
                                        </td>
                                    </tr>
                                    <!--                                            <tr>-->
                                    <!--                                                <td width="30%">-->
                                    <!--                                                    <font face="arial" size="4" color="#000000">-->
                                    <!--                                                        Image-->
                                    <!--                                                    </font>-->
                                    <!--                                                </td>-->
                                    <!--                                                <td width="70%">-->
                                    <!--                                                    <input type="file" name="img_file" id="img_file" size="50">-->
                                    <!--                                                </td>-->
                                    <!--                                            </tr>-->
                                    <tr>
                                        <td width="30%">
                                            &nbsp;
                                        </td>
                                        <td width="70%">
                                            <input type="submit" name="submit" value="Register"
                                                style="padding: 16px 20px;">
                                        </td>
                                    </tr>
                                </table>
                                <!-- <script type="text/javascript" src="../Assets/js/registerCheck.js"></script> -->
                        </td>
                    </tr>
                </table>
                </form>
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