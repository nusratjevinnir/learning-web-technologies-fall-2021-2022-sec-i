<?php
include('../Model/db.php');
$conn = getConnection();
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
$products = [];
while ($row = mysqli_fetch_assoc($result)) {
    array_push($products, $row);
}
// print_r($products);

?>





<!doctype html>
<html lang="en">

<head>
    <title>Customer dashboard</title>
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
                            <font face="arial" color="#000000" size="4">
                                Flash Sales
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <?php for ($i = 0; $i < count($products); $i++) { ?>
                        <td align="center" valign="top" width="300" height="50">
                            <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center">
                                <tr>
                                    <th>
                                        <a href="product_details.php">
                                            <img src="../Assets/Images/<?php echo $products[$i]['image'] ?>"
                                                alt="bed_img" width="200" height="200">
                                        </a>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <a href="product_details.php">
                                            <font face="arial" color="#000000" size="6">
                                                <?php echo $products[$i]['product_name'] ?>
                                            </font>
                                        </a>
                                    </th>
                                </tr>
                            </table>
                        </td>
                        <?php }; ?>
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