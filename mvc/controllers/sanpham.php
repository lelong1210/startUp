<?php
class sanpham extends controller{
    function show(){
        $model = $this->call_model("sanphamModel");
        $this->call_view("sanphamView",["homeModel"=>$model]);
    }
}
?>