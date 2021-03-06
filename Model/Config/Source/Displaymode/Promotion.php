<?php

/**
 * Content Widgets
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2020 August Ash (https://www.augustash.com)
 */

namespace Augustash\ContentWidgets\Model\Config\Source\Displaymode;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Widget promotion display mode class.
 * @api
 */
class Promotion implements OptionSourceInterface
{
    /**
     * Options getter.
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'background',
                'label' => __('Background')
            ],
            [
                'value' => 'center',
                'label' => __('Center')
            ],
        ];
    }

    /**
     * Get options in "key-value" format.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'background' => __('Background'),
            'center' => __('Center'),
        ];
    }
}
