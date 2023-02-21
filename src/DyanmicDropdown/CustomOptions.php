<?php

namespace App\DyanmicDropdown;

use Pimcore\Model\DataObject\ClassDefinition\DynamicOptionsProvider\SelectOptionsProviderInterface;

/**
 * Need to provide App\DyanmicDropdown\CustomOptions in options provider class
 */
class CustomOptions implements SelectOptionsProviderInterface
{
    public function getDefaultValue($context, $fieldDefinition)
    {
        return "db_value_1";
    }

    function getOptions($context, $fieldDefinition)
    {
        return [
            ["value" => "db_value_1", "key" => "Spotify"],
            ["value" => "db_value_2", "key" => "Apple Music"],
        ];
    }

    function hasStaticOptions($context, $fieldDefinition)
    {
        return true;
    }
}
