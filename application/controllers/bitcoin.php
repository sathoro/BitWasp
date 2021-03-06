<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bitcoin Panel Controller
 *
 * This class handles requesting a password from a user to access a
 * restricted page. 
 * 
 * @package		BitWasp
 * @subpackage	Controllers
 * @category	Bitcoin
 * @author		BitWasp
 * 
 */
class Bitcoin extends CI_Controller {

	/**
	 * Constructor
	 *
	 * @access	public
	 * @see		Models/Bitcoin_Model
	 * @see		Libraries/Bw_Bitcoin
	 */
	public function __construct() {
		parent::__construct();
		$this->load->library('bw_bitcoin');
		$this->load->model('bitcoin_model');
	}

};
/* End of File: Bitcoin.php */
