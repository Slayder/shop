<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

/**
 * Class Search
 *
 * @property CI_DB_active_record db
 */

class Search extends REST_Controller {
  protected $rest_format = 'json';

  public function __construct()
  {
    parent::__construct();
  }

  public function goods_get()
  {
    $this->response(
      array(
        'status' => true,
        'data'   => array(array('key1', 'value1'), array('key2', 'value2')),
      )
    );
  }
}

/* End of file archive.php */
/* Location: ./application/controllers/api/archive.php */
