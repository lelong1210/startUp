<html lang="vi">
<head>
  <?php require_once "block/head.php"; ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <title>Trãi Nghiệm</title>
  <style>
        body {
            /* margin-top: 20px;*/
            background: #eee;
        }
        .gradient-brand-color {
            background-image: -webkit-linear-gradient(0deg, #47809f 0%, #6470ef 100%);
            background-image: -ms-linear-gradient(0deg, #47809f 0%, #6470ef 100%);
            color: #fff;
        }

        .contact-info__wrapper {
            overflow: hidden;
            border-radius: .625rem .625rem 0 0
        }

        @media (min-width: 1024px) {
            .contact-info__wrapper {
                border-radius: 0 .625rem .625rem 0;
                padding: 5rem !important
            }
        }

        .contact-info__list span.position-absolute {
            left: 0
        }

        .z-index-101 {
            z-index: 101;
        }

        .list-style--none {
            list-style: none;
        }

        .contact__wrapper {
            background-color: #fff;
            border-radius: 0 0 .625rem .625rem
        }

        @media (min-width: 1024px) {
            .contact__wrapper {
                border-radius: .625rem 0 .625rem .625rem
            }
        }

        @media (min-width: 1024px) {
            .contact-form__wrapper {
                padding: 5rem !important
            }
        }

        .shadow-lg,
        .shadow-lg--on-hover:hover {
            box-shadow: 0 1rem 3rem rgba(132, 138, 163, 0.1) !important;
        }
        .content{
          margin-top: 150px;
          margin-bottom: 150px;
        }
    </style>
</head>

<body class="wrapper">
  <header class="main_header">
    <?php require_once "block/header.php"; ?>
  </header>
    <div class="content" id="content">
        <?php require_once "page/lienhePage.php" ;?>
    </div>
  <?php require_once "block/footer.php"; ?>
  <?php require_once "block/scripts.php"; ?>
</body>

</html>