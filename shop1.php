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
        <h3>Shop Category</h3>
        <h6>Home-Shop Category</h6>   
       </section>
    <!-- end div back ground -->
    <!-- start body -->
       <div class="body-shop1">
        <aside class="aside-shop1">
           <div class="aside-cards">
            <h2>Browse Category</h2>
            <ul class="aside-list">
                <li><input id="men" type="radio" name="List1"><label for="men">Men(3600)</label></li>
                <li ><input id="Women" type="radio" name="List1"> <label for="Women" >Women(3600)</label></li>
                <li ><input id="Elections" type="radio" name="List1"><label for="Elections"> Elections(3600)</label></li>
                <li ><input id="Food" type="radio" name="List1"> <label for="Food">Food(3600)</label></li>
                <li ><input id="ASdf" type="radio" name="List1"> <label for="ASdf">ASdf(3600)</label></li>
                <li ><input id="Art" type="radio" name="List1"> <label for="Art">Art(3600)</label></li>
                <li ><input id="AQS" type="radio" name="List1"> <label for="AQS">AQS(3600)</label></li>
            </ul>
           </div>
           <div class="aside-cards">
            <h2>Product </h2>
            <h5>Brands</h5>
            <ul class="aside-list">
                <li ><input name="list2" type="radio" id="apple"> <label for="apple">apple(29)</label></li>
                <li ><input  name="list2" type="radio" id="Rel"> <label for="Rel">Rel(29)</label></li>
                <li ><input  name="list2" type="radio" id="Noc"> <label for="Noc">Noc(29)</label></li>
                <li ><input  name="list2" type="radio" id="Iphone"> <label for="Iphone">Iphone(29)</label></li>
                <li ><input  name="list2" type="radio" id="Summsmm"> <label for="Summsmm">Summsmm(29)</label></li>
                
            </ul>

            <h5>Color</h5>
            <ul class="aside-list">
                <li ><input name="list3" type="radio" id="Black"> <label for="Black">Black(29)</label></li>
                <li ><input name="list3" type="radio" id="Red"> <label for="Red">Red(29)</label></li>
                <li ><input name="list3" type="radio" id="Yellow"> <label for="Yellow">Yellow(29)</label></li>
                <li ><input name="list3" type="radio" id="Grey"> <label for="Grey">Grey(29)</label></li>
                <li ><input name="list3" type="radio" id="White"> <label for="White">White(29)</label></li>       
            </ul>
            <h5>price</h5>
            <input type="range" class="range">
            <p>Price: $500.00 to $ 400.00</p>
           </div>
        </aside>
        <!--end aside left -->
        <div class="shops">
            <div class="head_shop">
                <div class="selects">
                    <select name="" id="select1">
                        <option value="" selected>Default sort</option>
                        <option value="">Des</option>
                        <option value="">ysdf</option>
                        <option value="">afdfs</option>
                    </select>
                    <select name="" id="select1">
                        <option value="" >Show 12</option>
                        <option value="" >Show 15</option>
                        <option value="" >Show 17</option>
                        <option value="" >Show 199</option>                      
                    </select>
                </div>
                <input type="text" placeholder="Search" class="search">
            </div>
            <div class="products">
                <div class="product" >
                    <img src="img/product/product1.png" alt="">
                    <h3>Accessories</h3>
                    <h2>Quatz Belt Watch</h2>
                    <h3>$150.00</h3>
                </div>
                <div class="product" >
                    <img src="img/product/product2.png" alt="">
                    <h3>Accessories</h3>
                    <h2>Quatz Belt Watch</h2>
                    <h3>$150.00</h3>
                </div>
                <div class="product" >
                    <img src="img/product/product3.png" alt="">
                    <h3>Accessories</h3>
                    <h2>Quatz Belt Watch</h2>
                    <h3>$150.00</h3>
                </div>
                <div class="product" >
                    <img src="img/product/product4.png" alt="">
                    <h3>Accessories</h3>
                    <h2>Quatz Belt Watch</h2>
                    <h3>$150.00</h3>
                </div>
                <div class="product" >
                    <img src="img/product/product5.png" alt="">
                    <h3>Accessories</h3>
                    <h2>Quatz Belt Watch</h2>
                    <h3>$150.00</h3>
                </div>
                <div class="product" >
                    <img src="img/product/product5.png" alt="">
                    <h3>Accessories</h3>
                    <h2>Quatz Belt Watch</h2>
                    <h3>$150.00</h3>
                </div>
                <div class="product" >
                    <img src="img/product/product6.png" alt="">
                    <h3>Accessories</h3>
                    <h2>Quatz Belt Watch</h2>
                    <h3>$150.00</h3>
                </div>
                <div class="product" >
                    <img src="img/product/product7.png" alt="">
                    <h3>Accessories</h3>
                    <h2>Quatz Belt Watch</h2>
                    <h3>$150.00</h3>
                </div>
                <div class="product" >
                    <img src="img/product/product8.png" alt="">
                    <h3>Accessories</h3>
                    <h2>Quatz Belt Watch</h2>
                    <h3>$150.00</h3>
                </div>
            </div>
        </div>
      </div>
      <!-- end body shop1 -->
      <div class="allproducts-shops">
            <h5>Popular items the market</h5>
            <h2>Top Product</h2>
            <div class="products-shop">
                <div class="product-shop">
                    
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-1.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-2.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-3.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    
                </div>
                <div class="product-shop">
                    
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-1.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-2.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-3.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    
                </div>
                <div class="product-shop">
                    
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-13.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-12.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-11.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    
                </div>
                <div class="product-shop">
                    
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-9.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-7.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    <div class="item-product">
                        <div class="img-smail-shop">
                            <img src="img/product/product-sm-8.png" alt="">
                        </div>
                        <div class="product-text">
                            <h3>Gray coffe Cup</h3>
                            <h4>$170.00</h4>
                        </div>
                    </div>
                    
                </div>
                
            </div>
      </div>
      <!-- end products -->
       <!-- start form -->
    <section class="form-shop">
        <h2>Get update From any where</h2>
        <h5>Bearing void gather light has evening unto don't afraid</h5>
        <div class="btn-input">
            <input type="email" placeholder="Enter your email">
            <a href="home.html">Subscribe Now</a>
        </div>
    </section>
    <!-- end form  -->

    <!-- start footer -->
    <?php
require "footer.php";
?>
        <div class="devolper">
            <p>Copyright @2023 All right reeved . this template is made with🤍by <span>Moaz El Sabagh</span> </p>
        </div>
</body>
</html>