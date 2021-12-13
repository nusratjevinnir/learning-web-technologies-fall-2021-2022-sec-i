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
    <title>Product details</title>
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
                                B1 BED
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <?php for ($i = 0; $i < count($products); $i++) { ?>
                        <td align="center" valign="top" width="300" height="50">
                            <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center">
                                <tr>
                                    <th>
                                        <img src="../Assets/Images/<?php echo $products[$i]['image'] ?>" alt="bed_img"
                                            width="400" height="400">
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <font face="arial" color="#000000" size="6">
                                            <?php echo $products[$i]['product_name'] ?>
                                        </font>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <font face="arial" color="#000000" size="4">
                                            Price: <?php echo $products[$i]['price'] ?>
                                        </font>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <font face="arial" color="#000000" size="4">
                                            Color: <?php echo $products[$i]['color'] ?>
                                        </font>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <Button><a
                                                href="http://localhost/wtproject/View/review.php?name='<?php echo $products[$i]['product_name'] ?>'">Review</a></Button>
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