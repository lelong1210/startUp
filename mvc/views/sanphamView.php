<html lang="vi">

<head>
  <?php //require_once "blockLong/head.php"; ?>
  <?php require_once "block/head.php"?>
    <title>Sản Phẩm</title>
</head>

<body class="wrapper">
  <header class="main_header">
    <?php require_once "block/header.php"; ?>
  </header>
  <!-- Hero/Intro Slider Start -->
    <!-- Hero/Intro Slider End -->

    <!-- Product tab Area Start -->
    <div class="section product-tab-area gbcus">
        <div class="container">
            <!-- <div class="contentProduct" id="contentProduct"> -->
            <?php
            // $data["homeModel"]->ShowTypeProduct();
            
            ?>
            <!-- </div> -->
        </div>
    </div>
    <section class="section_main_item">
        <div class="container_edit--page--1024">
            <?php
                $data["homeModel"]-> ShowTypeProduct();
            ?>
        </div>
    </section>
  <?php require_once "block/footer.php"; ?>
  <?php require_once "block/scripts.php"; ?>
</body>

</html>