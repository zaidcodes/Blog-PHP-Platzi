<?php
namespace App\Controllers\Admin;

class IndexController{

    function getIndex(){
        return render('../views/admin/index.php');
    }

}