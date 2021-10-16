<?php
class sanphamModel extends connectDB{
    // Function Support Database
    function GetProcduct(){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM sanpham";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
    function SelectTypeProduct($loaisanpham){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM sanpham WHERE loaisanpham=:loaisanpham";
        $query = $conn->prepare($sql);
        $query->bindParam(":loaisanpham",$loaisanpham);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }        
    }
    function SelectThuMucSanPham(){
        $conn = $this->GetConn();
        $sql = "SELECT * FROM thumucsanpham";
        $query = $conn->prepare($sql);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }              
    }
    // Function Support View 
    function ShowProduct($arr,$numberRepeact){
        echo "<div class='box_main_content'>";
            echo "<div class='box_grid'>";
                $this->RepeatProduct($arr,$numberRepeact);
            echo "</div>";
        echo "</div>";
    }
    function RepeatProduct($arr,$numberRepeact){
        $arr = array_values((array) $arr);
        for ($i=0; $i < $numberRepeact; $i++) { 
            $arrChild = array_values((array) $arr[$i]);
            echo "<div class='item_grid'>";
                echo "<div class='item_main_layout'>";
                    echo "<div class='box_image'>";
                        echo "<img src='$arrChild[5]' alt=''>";
                    echo "</div>";
                    echo "<div class='box_inf_product'>";
                        echo "<h4 class='title_product'>$arrChild[1]</h4>";
                        echo "<p class='price'>".number_format($arrChild[2])." đ</p>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }

    }
    function ShowTiTle($arr){
        echo "<div class='box_main_header' style='margin-top: 30px;'>";
            echo "<h1 class='title'>$arr[2]</h1>";
        echo "</div>";
    }
    function ShowTypeProduct(){
        $numberRepeact = 8 ;
        $arr = json_decode($this->SelectThuMucSanPham());
        $arr = array_values((array)$arr);
        for ($i=0; $i < count($arr) ; $i++) { 
            $arrChild = array_values((array)$arr[$i]);
            $this->ShowTiTle($arrChild);
            $this->ShowProduct(json_decode($this->SelectTypeProduct($arrChild[1])),$numberRepeact);
        }
    }
    function ShowSlider(){
        $arr = json_decode($this->SelectSlider());
        $arr = array_values((array) $arr);
        $count = count($arr);
        for ($i=0; $i < $count; $i++) { 
            $arrChild = array_values((array)$arr[$i]);
            echo"<div class='hero-slide-item slider-height swiper-slide d-flex'>";
                echo"<div class='container align-self-center'>";
                    echo"<div class='row'>";
                        echo"<div class='col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center'>";
                            echo"<div class='hero-slide-content slider-animated-1'>";
                                echo"<span class='category'></span>";
                                echo"<p >$arrChild[1]</p>";
                                echo"<p></p>";
                                echo"<a href='#' class='btn btn-lg btn-primary btn-hover-dark mt-5'>Mua Ngay</a>";
                            echo"</div>";
                        echo"</div>";
                        echo"<div class='col-xl-6 col-lg-5 col-md-5 col-sm-5'>";
                            echo"<div class='hero-slide-image'>";
                                echo "<a href='./$arrChild[3]/$arrChild[0]'><img src='$arrChild[5]' alt='' /></a>";
                            echo"</div>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
            echo"</div>";
        }
    }
    function SelectSlider(){
        $slider = 1 ;
        $conn = $this->GetConn();
        $sql = "SELECT * FROM sanpham WHERE dunglamslider=:dunglamslider";
        $query = $conn->prepare($sql);
        $query->bindParam(":dunglamslider",$slider);
        $query->execute();
        if($query->rowCount() > 0){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return json_encode($result);
        }
    }
}
