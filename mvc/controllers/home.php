<?php
class home extends controller{
    function show(){
        // echo "show => ";
        // $teo = $this->call_model("homeModel");
        // echo $teo->GetSinhVien(5,6);
        $this->call_view("homeView");
    }
}
?>