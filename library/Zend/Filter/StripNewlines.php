<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Filter
 */

namespace Zend\Filter;

/**
 * @category   Zend
 * @package    Zend_Filter
 */
class StripNewlines extends AbstractFilter
{

    /**
     * Defined by Zend\Filter\FilterInterface
     *
     * Returns $value without newline control characters
     *
     * @param  string $value
     * @return string
     */
    public function filter ($value)
    {
        return str_replace(array("\n", "\r"), '', $value);
    }
}
