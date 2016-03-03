<?php
//会员实体类
class UserModel extends Model {
	public function __construct() {
		parent::__construct();
		$this->_fields = array('id','user','pass','date');
		$this->_tables = array(DB_FREFIX.'user');
		//$this->_check = new AttrCheck();
		list(
				$this->_R['id'],
				$this->_R['user'],
				$this->_R['keep']
		) = $this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['user']) ? $_POST['user'] : null,
				isset($_POST['keep']) ? $_POST['keep'] : null
		));
	}
	
	public function frontReg() {
		//$_where = array("name='{$this->_R['name']}'");
		//if (!$this->_check->addCheck($this, $_where)) $this->_check->error();
		$_addData = $this->getRequest()->filter($this->_fields);
		$_addData['pass'] = sha1($_addData['pass']);
		$_addData['date'] = Tool::getDate();
		return parent::add($_addData);
	}
	
	public function frontLogin() {
		Validate::isNullString($this->_R['keep']) ? setcookie('user', $this->_R['user']) : setcookie('user', $this->_R['user'], time() + 60 * 60 * 24 * 7);
		return true;
	}
	
	public function frontLogout() {
		setcookie('user', '');
		return true;
	}
}
?>