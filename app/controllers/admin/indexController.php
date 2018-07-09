<?php
namespace app\controllers\admin;

class IndexController{

    function getIndex(){
        return render('../views/admin/index.php');
    }

}