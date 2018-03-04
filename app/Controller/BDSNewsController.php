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
			'DiemXau',
			'Province',
			'District',
			'Ward',
			'Street'
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
		
		$provinceList = $this->Province->find('all', array(
						'conditions' => array(
								'Province.PROVINCE_STATUS = 1'
						))
		);
		$this->set('provinceList', $provinceList);
		
		$paraNews = $this->request->query;
		if(isset($paraNews['id'])){
			$bdsNewsId = $paraNews['id'];
			$bdsNews = $this->BDSNews->find('first', array(
						'conditions' => array(
								'BDSNews.DELETE_YMD IS NULL',
								'BDSNews.BDSNEWS_ID =' . $bdsNewsId
						))
			);
			if($bdsNews != null){
				$this->set('bdsNews', $bdsNews);
				
				$provinceCode = $bdsNews['BDSNews']['PROVINCE_CODE']; 
				$districtList = $this->District->find('all', array(
						'conditions' => array(
								'District.DISTRICT_STATUS = 1',
								'District.PROVINCE_CODE =' . $provinceCode
						))
				);
				$this->set('districtList', $districtList);
				
				$districtCode = $bdsNews['BDSNews']['DISTRICT_CODE'];
				$wardList = $this->Ward->find('all', array(
						'conditions' => array(
								'Ward.WARD_STATUS = 1',
								'Ward.DISTRICT_CODE =' . $districtCode
						))
				);
				$this->set('wardList', $wardList);
				
				$wardCode = $bdsNews['BDSNews']['WARD_CODE'];
				$streetList = $this->Street->find('all', array(
						'conditions' => array(
								'Street.STREET_STATUS = 1',
								'Street.DISTRICT_CODE =' . $districtCode 
						))
				);
				$this->set('streetList', $streetList);
			}
			
//			var_dump($bdsNews);
//			die;
			return $this->render ( '/bdsNews' );
		}
		return $this->render ( '/createBdsNews' );
	}

	public function doGetDistricts(){
		$this->ajaxAction();
		$data = $_POST ['dataInput'];
		$provinceCode = $data[0];
		$districtList = $this->District->find('all', array(
						'conditions' => array(
								'District.DISTRICT_STATUS = 1',
								'District.PROVINCE_CODE =' . $provinceCode 
						))
		);
		if(!empty($districtList)){
			$res['success'] = false;
			$res['districtList'] = $districtList;
			return json_encode($res);
		}
		$res['success'] = true;
		$res['districtList'] = $districtList;
		return json_encode($res);
	}
	
	public function doGetWards(){
		$this->ajaxAction();
		$data = $_POST ['dataInput'];
		$districtCode = $data[0];
		$wardList = $this->Ward->find('all', array(
						'conditions' => array(
								'Ward.WARD_STATUS = 1',
								'Ward.DISTRICT_CODE =' . $districtCode 
						))
		);
		if(!empty($wardList)){
			$res['success'] = false;
			$res['wardList'] = $wardList;
			return json_encode($res);
		}
		$res['success'] = true;
		$res['wardList'] = $wardList;
		return json_encode($res);
	}
	
	public function doGetStreets(){
		$this->ajaxAction();
		$data = $_POST ['dataInput'];
		$districtCode = $data[0];
		$streetList = $this->Street->find('all', array(
						'conditions' => array(
								'Street.STREET_STATUS = 1',
								'Street.DISTRICT_CODE =' . $districtCode 
						))
		);
		if(!empty($streetList)){
			$res['success'] = false;
			$res['streetList'] = $streetList;
			return json_encode($res);
		}
		$res['success'] = true;
		$res['streetList'] = $streetList;
		return json_encode($res);
	}
	
	public function add() {
		
		return $this->render ( '/bdsNews' );
	}
	
	public function doAddBDSNews() {
		
		$this->Session->setFlash($this->messages['OPERATION_SUCCESS'], 'message', array('message_type' => RwsConstant::MSG_SUCCESS));
		return $this->render ( '/bdsNews' );
	}
	
	public function doUpdateBDSNews() {
		
		$this->Session->setFlash($this->messages['OPERATION_SUCCESS'], 'message', array('message_type' => RwsConstant::MSG_SUCCESS));
		return $this->render ( '/bdsNews' );
	}

}