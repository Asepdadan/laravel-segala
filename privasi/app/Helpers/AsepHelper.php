<?php

namespace App\Helpers;

use DB;

Class AsepHelper{


public static function succ_msg($msg=''){

$str = '<div class="alert alert-success">'.$msg.'</div>';
return $str;

}

public static function err_msg($msg=''){

	$str = '<div class="alert alert-danger">'.$msg.'</div>';
	return $str;
}



public static function Helperquery($id=''){

	$str =  DB::select('select * from articles where id = ?', [$id]);
	return $str;
}


}


?>