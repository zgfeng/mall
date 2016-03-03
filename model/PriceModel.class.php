<?php
//价格区间实体类
class PriceModel extends Model {
	public function __construct() {
		parent::__construct();
		$this->_fields = array('id','price_left','price_right');
		$this->_tables = array(DB_FREFIX.'price');
		$this->_check = new PriceCheck();
		list(
				$this->_R['id'],
				$this->_R['price_left'],
				$this->_R['price_right']
		) = $this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['price_left']) ? $_POST['price_left'] : null,
				isset($_POST['price_right']) ? $_POST['price_right'] : null
		));
	}
	
	public function findAll() {
		return parent::select(array('id','price_left','price_right'), 
												array('limit'=>$this->_limit, 'order'=>'price_left ASC,price_right ASC'));
	}
	
	public function findAllNav() {
		$_allPrice =  parent::select(array('id','price_left','price_right'), 
												array('order'=>'price_left ASC,price_right ASC'));
		foreach ($_allPrice as $_value) {
			$_value->value = $_value->price_left.' - '.$_value->price_right;
		}
		return $_allPrice;
	}
	
	public function total() {
		return parent::total();
	}
	
	public function add() {
		$_where = array("price_left='{$this->_R['price_left']}' AND price_right='{$this->_R['price_right']}'");
		if (!$this->_check->addCheck($this, $_where)) $this->_check->error();
		$_addData = $this->getRequest()->filter($this->_fields);
		return parent::add($_addData);
	}
}
?>