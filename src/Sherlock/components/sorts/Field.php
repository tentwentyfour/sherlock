<?php
/**
 * @package Sherlock\components\sorts
 */

namespace Sherlock\components\sorts;

use Sherlock\components;

/**
 * @method \Sherlock\components\sorts\Field name() name(\string $value)
 * @method \Sherlock\components\sorts\Field order() order(\string $value) Default: null
 * @method \Sherlock\components\sorts\Field missing() missing(\string $value) Default: null
 * @method \Sherlock\components\sorts\Field ignore_unmapped() ignore_unmapped(\bool $value) Default: null
 */
class Field extends components\BaseComponent implements components\SortInterface
{
    public function __construct($hashMap = null)
    {
        $this->params['order']           = null;
        $this->params['sort_mode']       = null;
        $this->params['order']           = null;
        $this->params['missing']         = null;
        $this->params['ignore_unmapped'] = null;
        $this->params['nested_path']     = null;
        $this->params['nested_filter']   = null;

        parent::__construct($hashMap);
    }


    public function toArray()
    {
        $nf = ($this->params['nested_filter'] instanceof \Sherlock\components\FilterInterface) ? $this->params['nested_filter']->toArray() : null;
        $ret = array(
            $this->params['name'] =>
            array(
                'sort_mode'       => $this->params["sort_mode"],
                'order'           => $this->params["order"],
                'missing'         => $this->params["missing"],
                'ignore_unmapped' => $this->params["ignore_unmapped"],
                'nested_path'     => $this->params["nested_path"],
                'nested_filter'   => $nf,
            ),
        );

        return $ret;
    }

}
