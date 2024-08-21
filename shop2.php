<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- google font -->
    <link rel="stylesheet" href="Style/all.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="Style/Style.css">
    <!-- file css -->
    <title>Aroma</title>
</head>
<body>
     <!-- start header  logo  nav  btn-icon -->
     <?php
    require "static_content.php";
    ?>
    <!-- end header -->
    <!-- start div back ground -->
    <section class="bg-contact">
        <h3>Shop Card</h3>
        <h6>Home-Shop Card</h6>   
       </section>
    <!-- end div back ground -->
    <!-- start body -->
       <div class="shop-cards">
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr>   
                    <th colspan="4"><div class="line-shop"></div>                    </th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>
                        <img src="img/cart/cart1.png" alt="">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>
                    <td>$350.00</td>
                    <td>
                        <input type="number">
                    </td>
                    <td>$280.00</td>
                </tr>
                <tr>   
                    <td colspan="4"><div class="line-shop"></div></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/cart/cart2.png" alt="">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>
                    <td>$350.00</td>
                    <td>
                        <input type="number">
                    </td>
                    <td>$280.00</td>
                </tr>
                <tr>   
                    <td colspan="4"><div class="line-shop"></div></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/cart/cart3.png" alt="">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>
                    <td>$350.00</td>
                    <td>
                        <input type="number">
                    </td>
                    <td>$280.00</td>
                </tr>
                <tr>   
                    <td colspan="4"><div class="line-shop"></div></td>
                </tr>
            </tbody>
        </table>
       </div>     


    <div class="btngroups">
    <div>
        <a href="shop1.html" class="update-btn">Update Card</a>
    </div>
    <div>
        <input class="code" type="text" placeholder="Coupon Code">
        <a href="home.html" class="btn-Apply">Apply</a>
        <a href="shop1.html" class="btn-Have-aCoupon">Have a Coupon?</a>
    </div>
    </div>
     <div class="line-down-shop"></div>   
    <div class="total">
        <p>Subtotal</p><p>$800.00</p>        
    </div>
    <div class="line-down-shop"></div>   
    <div class="selector-shop">
        <ul>
            <li><label for="Flat">Flat Rate: $5.00</label><input id="Flat" name="list-shop2" type="radio"></li>
            <li><label for="ARA">ARA Rate: $5.00</label><input id="ARA" name="list-shop2" type="radio"></li>
            <li><label for="FAD">FAD Rate: $5.00</label><input id="FAD" name="list-shop2" type="radio"></li>
            <li><label for="SD">SD Rate: $5.00</label><input id="SD" name="list-shop2" type="radio"></li>
        </ul>
        <p>Caluclud shoping</p>
        <select name="" id="">
            <option value="">Bangladsh</option>
            <option value="">Bangladsh</option>
            <option value="">Bangladsh</option>
        </select>
        <select name="" id="">
            <option value="">Bangladsh</option>
            <option value="">Bangladsh</option>
            <option value="">Bangladsh</option>
        </select>
        <input class="code" type="text" placeholder="code id">
        <a href="" class="update-details">Update details</a>    
    </div>
    <div class="line-down-shop"></div>   
    <div class="two-btn">
        <a href="home.html" class="contain">Contaui shoping</a>
        <a href="home.html" class="check-out">Processed to check out</a>
    </div>


 <!-- start footer -->
 <?php
require "footer.php";
?>
    <div class="devolper">
        <p>Copyright @2023 All right reeved . this template is made with🤍by <span>Moaz El Sabagh</span> </p>
    </div>







</body>
</html>