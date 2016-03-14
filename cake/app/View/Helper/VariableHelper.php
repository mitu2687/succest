<?php
class VariableHelper extends AppHelper{

public function lists($data){
	$a=print_r($data,true);
return print "<pre>".$a."</pre>";
}

}