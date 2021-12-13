<?php
include('../Model/db.php');
$conn = getConnection();
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
$products = [];
while ($row = mysqli_fetch_assoc($result)) {
    array_push($products, $row);
}
?>





<!doctype html>
<html lang="en">

<head>
    <title>All products list</title>
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
                                All products
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







                    <tr>
                    <td align="center" valign="top" width="300" height="50">
                        <table border="1" width="100%" cellpadding="15" cellspacing="0" align="center" >
                            <tr>
                                <th>
                               <a href="product_details.php">
                                       <img src="../Assets/Images/tv1.jpg" alt="tv_img" width="200" height="200"> 
                                    </a>
                                    
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <font face="arial" color="#000000" size="6">
                                        T1 TV
                                    </font>
                                </th>
                            </tr>



                                        <button id= "button">View details</button>
                                        <button id= "buttonBed">Add to Favourite</button>
    <br><br>
    
    
    <div id= "DETAILS"></div>

    <script>
        document.getElementById('button').addEventListener('click',loaduser);  //buttn id creating, for loading file for button

        function loaduser(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','product.json',true);
            xhr.onload= function(){
                if(this.status == 200){
                    var DETAILS = JSON.parse(this.responseText);
                   
                    var output = '';
                    output +='<ul>' +
                        '<li>Name:'+DETAILS.Name+'</li>'+
                        '<li>Price:'+DETAILS.Price+'</li>'+
                        '<li>Color:'+DETAILS.Color+'</li>'+
                        '</ul>';
                        document.getElementById('DETAILS').innerHTML=output;
                        

                }
            }
            xhr.send();
        }
    </script>



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