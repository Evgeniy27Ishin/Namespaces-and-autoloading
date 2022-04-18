<?php
	namespace Users;
	use \Core\Admin\Data;
	use \Core\User\Data as UserData;

class Page extends Controller
{
    public function __construct()
    {
        $data1 = new Data('1');
        $data2 = new UserData('2');
    }
}
?>