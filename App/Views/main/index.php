<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="">

    <!-- Core Style CSS -->
<!--  Relative Addressing  -->
    <link rel="stylesheet" href="../src/css/animate.css">
<!--    Absolute Addressing -->
    <link rel="stylesheet" href="http://freamwork.test/src/css/bootstrap.min.css">
    <!--    Absolute Addressing 2 -->
    <?php $path=realpath(__DIR__."../../../../")."/src/css/classy-nav.min.css" ?>
    <link src="<?= $path ?>"  rel="stylesheet" />

    <link rel="stylesheet" href="">

</head>

<body>
<!-- ##### Header Area Start ##### -->
<?php
load_views("main/partials/header.php");
?>
<!-- ##### Header Area End ##### -->

<!-- ##### Right Side Cart Area ##### -->
<div class="cart-bg-overlay"></div>

<!--
    <div class="right-side-cart-area">

        &lt;!&ndash; Cart Button &ndash;&gt;
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            &lt;!&ndash; Cart List Area &ndash;&gt;
            <div class="cart-list">
                &lt;!&ndash; Single Cart Item &ndash;&gt;
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        &lt;!&ndash; Cart Item Desc &ndash;&gt;
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                &lt;!&ndash; Single Cart Item &ndash;&gt;
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        &lt;!&ndash; Cart Item Desc &ndash;&gt;
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                &lt;!&ndash; Single Cart Item &ndash;&gt;
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        &lt;!&ndash; Cart Item Desc &ndash;&gt;
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            &lt;!&ndash; Cart Summary &ndash;&gt;
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
-->
<!-- ##### Right Side Cart End ##### -->

<!--    ###### Main Section Start-->
<?php
\Core\View::requireinBaseDirectory("main",$page);
?>
<!--    ###### Main Section Start-->

<!--  ########### Start Footer  -->

<?php
load_views("main/partials/footer.php");
?>

<!-- ########### End Footer-->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?= load_style('js/popper.min.js'); ?>"></script>
<!-- Bootstrap js -->
<script src="../src/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="../src/js/plugins.js"></script>
<!-- Classy Nav js -->
<script src="../src/js/classy-nav.min.js"></script>
<!-- Active js -->
<script src="../src/js/active.js"></script>

</body>

</html>