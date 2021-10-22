<html lang="vi">
<head>
  <?php require_once "block/head.php"; ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <style>
      /* @keyframes  */
.info-wrapper{
    position: relative;
}

.search-bar{
    position: absolute;
    z-index: 222;
    bottom:20px;
    left: 50%;
    transform: translateX(-50%);
}

.search-bar .microphone_icon{
    color: rgba(255,255,255,0.6);
    font-size: 3rem;
    transition: 0.5s;
}

.search-bar .microphone_icon:hover{
    color: rgba(255,255,255,1);
}

.search-bar .recording-icon{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

.info-wrapper #phong{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@keyframes scale_icon {
    from {
        opacity: 0;
        transform: translate(-50%,-50%) scale(0);
        /* transform: ; */
    }
    to {
        opacity: 1;
        transform: translate(-50%,-50%) scale(1.2);
    }
}

.microphone {
    cursor: pointer;
}

.microphone .recording-icon {
    display: none;
    position: fixed;
    top: -350px;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 50px;
    height: 50px;
    background-color: #e22d2d;
    border-radius: 50%;
    animation: scale_icon 1.2s infinite linear;
}

.microphone.recording .recording-icon {
    display: inline-block;
}

.microphone.recording .fa-microphone {
    display: none;
}
  </style>
  <title>Trãi Nghiệm</title>
</head>

<body class="wrapper">
  <header class="main_header">
    <?php require_once "block/header.php"; ?>
  </header>
    <div class="content" id="content">
        <?php require_once "page/trainghiemPage.php" ;?>
    </div>
  <?php require_once "block/footer.php"; ?>
  <?php require_once "block/scripts.php"; ?>
</body>

</html>