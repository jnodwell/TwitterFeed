<?php
/**
 * jnodwell_TwitterFeed
 *
 * @category    TwitterFeed
 * @package     jnodwell_TwitterFeed
 * @copyright   Copyright (c) 2016 nodwell.net
 * @author      jennifer@nodwell.net
 */

namespace jnodwell\TwitterFeed\Block;

use Magento\Config\Block\System\Config\Form\Field;

/**
 * Color
 *
 * @category    jnodwell
 * @package     jnodwell_TwitterFeed
 */
class Color extends Field {

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context, array $data = []
    ) {
        parent::__construct($context, $data);
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
        $html = $element->getElementHtml();
        $value = $element->getData('value');

        $html .= '<script type="text/javascript">
            require(["jquery"], function ($) {
                $(document).ready(function () {
                    var $el = $("#' . $element->getHtmlId() . '");
                    $el.css("backgroundColor", "'. $value .'");

                    // Attach the color picker
                    $el.ColorPicker({
                        color: "'. $value .'",
                        onChange: function (hsb, hex, rgb) {
                            $el.css("backgroundColor", "#" + hex).val("#" + hex);
                        }
                    });
                });
            });
            </script>';
        return $html;
    }

}