<?php
namespace Application\Controllers;

use Application\Models\ModelInterface;

class OrderController extends Controller{

	protected $model;

	public function __construct(ModelInterface $model){
		$this->model = $model;
	}

	public function index(){

		$show = $this->model->select(525680097405961222, ['id', 'order_no']);

		$showt = $this->model->getSomeValue();
		print_r($show);
		print_r($showt);
		$data = [
			'o' => 'nihao',
			't' => 'aya',
			's' => 'wo shi shei'
		];

//		$this->assign('o', 'nihao');
//		$this->assign('t', 'aya');

		$this->view('Index', 'index', $data);
	}

}