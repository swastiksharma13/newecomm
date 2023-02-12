<?php

/**
 * Fields Summary:
 * - RamType [select]
 * - RamCapacity [select]
 * - ProcessorBrand [select]
 * - Processor [select]
 * - ProcessorGeneration [select]
 * - OS [select]
 * - ScreenSize [select]
 * - ScreenType [select]
 * - SSD_Capacity [select]
 * - Weight [select]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'LaptopMains',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => '',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Ram',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Ram',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'RamType',
                 'title' => 'Ram Type',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'DDR3',
                    'value' => 'DDR3',
                  ),
                  1 => 
                  array (
                    'key' => 'DDR4',
                    'value' => 'DDR4',
                  ),
                  2 => 
                  array (
                    'key' => 'DDR5',
                    'value' => 'DDR5',
                  ),
                  3 => 
                  array (
                    'key' => 'LPDDR3',
                    'value' => 'LPDDR3',
                  ),
                  4 => 
                  array (
                    'key' => 'LPDDR4',
                    'value' => 'LPDDR4',
                  ),
                  5 => 
                  array (
                    'key' => 'LPDDR5',
                    'value' => 'LPDDR5',
                  ),
                  6 => 
                  array (
                    'key' => '',
                    'value' => '',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'RamCapacity',
                 'title' => 'Ram Capacity',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => '4 GB',
                    'value' => '4 GB',
                  ),
                  1 => 
                  array (
                    'key' => '8 GB',
                    'value' => '8 GB',
                  ),
                  2 => 
                  array (
                    'key' => '16 GB',
                    'value' => '16 GB',
                  ),
                  3 => 
                  array (
                    'key' => '32 GB',
                    'value' => '32 GB',
                  ),
                  4 => 
                  array (
                    'key' => '64 GB',
                    'value' => '64 GB',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Processor',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Processor',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'ProcessorBrand',
                 'title' => 'Processor Brand',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'AMD',
                    'value' => 'AMD',
                  ),
                  1 => 
                  array (
                    'key' => 'Intel',
                    'value' => 'Intel',
                  ),
                  2 => 
                  array (
                    'key' => 'Qualcomm',
                    'value' => 'Qualcomm',
                  ),
                  3 => 
                  array (
                    'key' => 'Media Tek',
                    'value' => 'Media Tek',
                  ),
                  4 => 
                  array (
                    'key' => 'Apple',
                    'value' => 'Apple',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'Processor',
                 'title' => 'Processor',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Core i3',
                    'value' => 'Core i3',
                  ),
                  1 => 
                  array (
                    'key' => 'Core i5',
                    'value' => 'Core i5',
                  ),
                  2 => 
                  array (
                    'key' => 'Core i7',
                    'value' => 'Core i7',
                  ),
                  3 => 
                  array (
                    'key' => 'Core i9',
                    'value' => 'Core i9',
                  ),
                  4 => 
                  array (
                    'key' => 'Ryzen 5 Quad Core',
                    'value' => 'Ryzen 5 Quad Core',
                  ),
                  5 => 
                  array (
                    'key' => 'Ryzen 7 Quad Core',
                    'value' => 'Ryzen 7 Quad Core',
                  ),
                  6 => 
                  array (
                    'key' => 'M1',
                    'value' => 'M1',
                  ),
                  7 => 
                  array (
                    'key' => 'M1 Pro',
                    'value' => 'M1 Pro',
                  ),
                  8 => 
                  array (
                    'key' => 'M2',
                    'value' => 'M2',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'ProcessorGeneration',
                 'title' => 'Processor Generation',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => '3rd Gen',
                    'value' => '3rd Gen',
                  ),
                  1 => 
                  array (
                    'key' => '4th Gen',
                    'value' => '4th Gen',
                  ),
                  2 => 
                  array (
                    'key' => '5th Gen',
                    'value' => '5th Gen',
                  ),
                  3 => 
                  array (
                    'key' => '7th Gen',
                    'value' => '7th Gen',
                  ),
                  4 => 
                  array (
                    'key' => '8th Gen',
                    'value' => '8th Gen',
                  ),
                  5 => 
                  array (
                    'key' => '9th Gen',
                    'value' => '9th Gen',
                  ),
                  6 => 
                  array (
                    'key' => '10th Gen',
                    'value' => '10th Gen',
                  ),
                  7 => 
                  array (
                    'key' => '11th Gen',
                    'value' => '11th Gen',
                  ),
                  8 => 
                  array (
                    'key' => '12th Gen',
                    'value' => '12th Gen',
                  ),
                  9 => 
                  array (
                    'key' => '',
                    'value' => '',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'OS',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Operating System',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'OS',
                 'title' => 'O S',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Windows 10',
                    'value' => 'Windows10',
                  ),
                  1 => 
                  array (
                    'key' => 'Windows 11',
                    'value' => 'Windows 11',
                  ),
                  2 => 
                  array (
                    'key' => 'DOS',
                    'value' => 'DOS',
                  ),
                  3 => 
                  array (
                    'key' => 'Linux',
                    'value' => 'Linux',
                  ),
                  4 => 
                  array (
                    'key' => 'Ubuntu',
                    'value' => 'Ubuntu',
                  ),
                  5 => 
                  array (
                    'key' => 'Mac OS',
                    'value' => 'Mac OS',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Screen',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Screen',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'ScreenSize',
                 'title' => 'Screen Size',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Below 12 Inch',
                    'value' => 'Below 12 Inch',
                  ),
                  1 => 
                  array (
                    'key' => '12 Inch - 12.9 Inch',
                    'value' => '12 Inch - 12.9 Inch',
                  ),
                  2 => 
                  array (
                    'key' => '13 Inch - 13.9 Inch',
                    'value' => '13 Inch - 13.9 Inch',
                  ),
                  3 => 
                  array (
                    'key' => '14 Inch - 14.9 inch',
                    'value' => '14 Inch - 14.9 inch',
                  ),
                  4 => 
                  array (
                    'key' => '15 inch - 15.9 Inch',
                    'value' => '15 inch - 15.9 Inch',
                  ),
                  5 => 
                  array (
                    'key' => '16 Inch - 17.9 Inch',
                    'value' => '16 Inch - 16.9 Inch',
                  ),
                  6 => 
                  array (
                    'key' => 'Above 20 Inch',
                    'value' => 'Above 20 Inch',
                  ),
                  7 => 
                  array (
                    'key' => '',
                    'value' => '',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'ScreenType',
                 'title' => 'Screen Type',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'LED',
                    'value' => 'LED',
                  ),
                  1 => 
                  array (
                    'key' => 'LCD',
                    'value' => 'LCD',
                  ),
                  2 => 
                  array (
                    'key' => 'HD',
                    'value' => 'HD',
                  ),
                  3 => 
                  array (
                    'key' => 'HD Amolded',
                    'value' => 'HD Amolded',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'SSD',
             'type' => NULL,
             'region' => NULL,
             'title' => 'SSD',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'SSD_Capacity',
                 'title' => 'S S D _ Capacity',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => '256 GB',
                    'value' => '256 GB',
                  ),
                  1 => 
                  array (
                    'key' => '512 GB',
                    'value' => '512 GB',
                  ),
                  2 => 
                  array (
                    'key' => '1 TB',
                    'value' => '1 TB',
                  ),
                  3 => 
                  array (
                    'key' => '2 TB',
                    'value' => '2 TB',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'name' => 'Weight',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Weight',
             'width' => '',
             'height' => '',
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'name' => 'Weight',
                 'title' => 'Weight  ',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'fieldtype' => 'select',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' => 
                array (
                ),
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => '1.2 KG or Below',
                    'value' => '1.2 KG or Below',
                  ),
                  1 => 
                  array (
                    'key' => '1.2 KG - 1.5 KG',
                    'value' => '1.2 KG - 1.5 KG',
                  ),
                  2 => 
                  array (
                    'key' => '1.6 KG - 1.8 KG',
                    'value' => '1.6 KG - 1.8 KG',
                  ),
                  3 => 
                  array (
                    'key' => '1.9 KG - 2.1 KG',
                    'value' => '1.9 KG - 2.1 KG',
                  ),
                  4 => 
                  array (
                    'key' => '2.2 KG - 2.6 KG',
                    'value' => '2.2 KG - 2.6 KG',
                  ),
                  5 => 
                  array (
                    'key' => 'Above 2.6 KG',
                    'value' => 'Above 2.6 KG',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'labelWidth' => 0,
             'labelAlign' => 'left',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => NULL,
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'Laptop',
      'fieldname' => 'LaptopMains',
    ),
  ),
));
