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
			'NhomBds',
			'PhapLy',
			'Huong',
			'ViTri',
			'SoTang',
			'LoaiCongTrinh',
			'MucXay',
			'LoaiBds',
			'TinVip',
			'DiemTot',
			'DiemXau'
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

		$phapLyList = $this->PhapLy->find('all', array(
						'conditions' => array(
								'PhapLy.DELETE_YMD IS NULL'
						))
		);
		$this->set('phapLyList', $phapLyList);

		$phapLyList = $this->PhapLy->find('all', array(
						'conditions' => array(
								'PhapLy.DELETE_YMD IS NULL'
						))
		);
		$this->set('phapLyList', $phapLyList);

		$huongList = $this->Huong->find('all', array(
						'conditions' => array(
								'Huong.DELETE_YMD IS NULL'
						))
		);
		$this->set('huongList', $huongList);

		$viTriList = $this->ViTri->find('all', array(
						'conditions' => array(
								'ViTri.DELETE_YMD IS NULL'
						))
		);
		$this->set('viTriList', $viTriList);

		$soTangList = $this->SoTang->find('all', array(
						'conditions' => array(
								'SoTang.DELETE_YMD IS NULL'
						))
		);
		$this->set('soTangList', $soTangList);

		$soTangList = $this->SoTang->find('all', array(
						'conditions' => array(
								'SoTang.DELETE_YMD IS NULL'
						))
		);
		$this->set('soTangList', $soTangList);


		$loaiCongTrinhList = $this->LoaiCongTrinh->find('all', array(
						'conditions' => array(
								'LoaiCongTrinh.DELETE_YMD IS NULL'
						))
		);
		$this->set('loaiCongTrinhList', $loaiCongTrinhList);

		$mucXayList = $this->MucXay->find('all', array(
						'conditions' => array(
								'MucXay.DELETE_YMD IS NULL'
						))
		);
		$this->set('mucXayList', $mucXayList);

		$loaiBdsList = $this->LoaiBds->find('all', array(
						'conditions' => array(
								'LoaiBds.DELETE_YMD IS NULL'
						))
		);
		$this->set('loaiBdsList', $loaiBdsList);

		$tinVipList = $this->TinVip->find('all', array(
						'conditions' => array(
								'TinVip.DELETE_YMD IS NULL'
						))
		);
		$this->set('tinVipList', $tinVipList);

		$diemTotList = $this->DiemTot->find('all', array(
						'conditions' => array(
								'DiemTot.DELETE_YMD IS NULL'
						))
		);
		$this->set('diemTotList', $diemTotList);

		$diemXauList = $this->DiemXau->find('all', array(
						'conditions' => array(
								'DiemXau.DELETE_YMD IS NULL'
						))
		);
		$this->set('diemXauList', $diemXauList);


		return $this->render ( '/bdsNews' );
	}

	public function add() {
		return $this->render ( '/bdsNews/add' );
	}

}