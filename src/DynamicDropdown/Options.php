<?php

namespace App\DynamicDropdown;

use Pimcore\Model\DataObject\ClassDefinition\DynamicOptionsProvider\SelectOptionsProviderInterface;

/**
 * Need to provide App\DyanmicDropdown\CustomOptions in options provider class
 */
class Options implements SelectOptionsProviderInterface
{
    public function getDefaultValue($context, $fieldDefinition)
    {
        return "db_value_1";
    }

    function getOptions($context, $fieldDefinition)
    {
        return [
            ["value" => "4gb", "key" => "4gb"],
            ["value" => "6gb", "key" => "6gb"],
            ["value" => "8gb", "key" => "8gb"],
            ["value" => "16gb", "key" => "16gb"]
        ];
    }

    function hasStaticOptions($context, $fieldDefinition)
    {
        return true;
    }
}
