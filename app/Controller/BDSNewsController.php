<?php
App::uses ( 'AppController', 'Controller' );

/**
 * WatchController
 */
class BDSNewsController extends AppController {
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array(
			'TUser',
			'TCustomer',
			'BDSNews',
			'DanhDau',
			'TinhTrang',
			'LoaiTin',
			'DayList',
			'NhomBds'
	);
	
	/**
	 * Displays a view Results
	 */
	public function index() {

		$customer = $this->TCustomer->find('all', array(
						'conditions' => array(
								'TCustomer.DELETE_YMD IS NULL'
						))
		);
		$this->set('customerlist', $customer);

		$danhDau = $this->DanhDau->find('all', array(
						'conditions' => array(
								'DanhDau.DELETE_YMD IS NULL'
						))
		);
		$this->set('danhDaulist', $danhDau);
		//var_dump($danhDau);

		$tinhTrang = $this->TinhTrang->find('all', array(
						'conditions' => array(
								'TinhTrang.DELETE_YMD IS NULL'
						))
		);
		$this->set('tinhTranglist', $tinhTrang);

		$loaiTin = $this->LoaiTin->find('all', array(
						'conditions' => array(
								'LoaiTin.DELETE_YMD IS NULL'
						))
		);
		$this->set('loaiTinlist', $loaiTin);

		$dayList = $this->DayList->find('all', array(
						'conditions' => array(
								'DayList.DELETE_YMD IS NULL'
						))
		);
		$this->set('dayList', $dayList);

		$nhomBdsList = $this->NhomBds->find('all', array(
						'conditions' => array(
								'NhomBds.DELETE_YMD IS NULL'
						))
		);
		$this->set('nhomBdsList', $nhomBdsList);


		return $this->render ( '/bdsNews' );
	}

	public function add() {
		return $this->render ( '/bdsNews/add' );
	}

}