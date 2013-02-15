<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-14
 * Time: 10:42 PM
 * Auto-generated by "generate.php"
 */
namespace sherlock\components\queries;

use sherlock\components;
use sherlock\common\exceptions;


/**
 * @method \sherlock\components\queries\Bool must() must(array $value) Default: array()
 * @method \sherlock\components\queries\Bool must_not() must_not(array $value) Default: array()
 * @method \sherlock\components\queries\Bool should() should(array $value) Default: array()
 * @method \sherlock\components\queries\Bool minimum_number_should_match() minimum_number_should_match(int $value) Default: 2
 * @method \sherlock\components\queries\Bool boost() boost(float $value) Default: 1.0
 * @method \sherlock\components\queries\Bool disable_coord() disable_coord(int $value) Default: 1

 */
class Bool extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['must'] = array();
		$this->params['must_not'] = array();
		$this->params['should'] = array();
		$this->params['minimum_number_should_match'] = 2;
		$this->params['boost'] = 1.0;
		$this->params['disable_coord'] = 1;

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'bool' => 
  array (
    'must' => $this->params["must"],
    'must_not' => $this->params["must_not"],
    'should' => $this->params["should"],
    'minimum_number_should_match' => $this->params["minimum_number_should_match"],
    'boost' => $this->params["boost"],
    'disable_coord' => $this->params["disable_coord"],
  ),
);
		return $ret;
	}
}

?>