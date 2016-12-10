<?php
/**
 * jnodwell_TwitterFeed
 *
 * @category    TwitterFeed
 * @package     jnodwell_TwitterFeed
 * @copyright   Copyright (c) 2016 nodwell.net
 * @author      jennifer@nodwell.net
 */

namespace jnodwell\TwitterFeed\Model\Config\Source;

/**
 * jnodwell\TwitterFeed\Model\Config\Source\Size
 *
 * @category    jnodwell
 * @package     jnodwell_TwitterFeed
 */
class Size implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            'large' => 'Large',
            'small' => 'Small',
        ];
    }
}