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
 * @method \sherlock\components\queries\CustomScore query() query(\sherlock\components\QueryInterface $value)
 * @method \sherlock\components\queries\CustomScore params() params(array $value)
 * @method \sherlock\components\queries\CustomScore script() script(string $value)
 * @method \sherlock\components\queries\CustomScore lang() lang(string $value) Default: "mvel"

 */
class CustomScore extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['lang'] = "mvel";

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'custom_score' => 
  array (
    'query' => $this->params["query"],
    'params' => $this->params["params"],
    'script' => $this->params["script"],
    'lang' => $this->params["lang"],
  ),
);
		return $ret;
	}
}

?>