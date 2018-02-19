<?php
App::uses ( 'AppController', 'Controller' );

/**
 * WatchController
 */
class BDSNewsController extends AppController {
	public $uses = array (
			'BDSNews'
	);
	
	/**
	 * Displays a view Results
	 */
	public function index() {
		return $this->render ( '/bdsNews' );
	}
}