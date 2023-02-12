<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - ProcessorBrand [select]
 * - Processor [select]
 * - ProcessorGeneration [select]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'Processor',
   'name' => 'Processor',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1675969759,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '',
   'implementsInterfaces' => '',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => false,
   'showVariants' => false,
   'fieldDefinitions' => 
  array (
  ),
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => 'pimcore_root',
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
         'name' => 'Processor',
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
                    'key' => 'Core i5',
                    'value' => 'Core i5',
                  ),
                  3 => 
                  array (
                    'key' => 'Core i7',
                    'value' => 'Core i7',
                  ),
                  4 => 
                  array (
                    'key' => 'Core i9',
                    'value' => 'Core i9',
                  ),
                  5 => 
                  array (
                    'key' => 'Ryzen 5 Quad Core',
                    'value' => 'Ryzen 5 Quad Core',
                  ),
                  6 => 
                  array (
                    'key' => 'Ryzen 5 Quad Core',
                    'value' => 'Ryzen 5 Quad Core',
                  ),
                  7 => 
                  array (
                    'key' => '',
                    'value' => '',
                  ),
                  8 => 
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
                    'key' => '3rd gen',
                    'value' => '3rd gen',
                  ),
                  1 => 
                  array (
                    'key' => '4rd gen',
                    'value' => '4rd gen',
                  ),
                  2 => 
                  array (
                    'key' => '5rd gen',
                    'value' => '5rd gen',
                  ),
                  3 => 
                  array (
                    'key' => '7rd gen',
                    'value' => '7rd gen',
                  ),
                  4 => 
                  array (
                    'key' => '8rd gen',
                    'value' => '8rd gen',
                  ),
                  5 => 
                  array (
                    'key' => '9rd gen',
                    'value' => '9rd gen',
                  ),
                  6 => 
                  array (
                    'key' => '10th gen',
                    'value' => '10 gen',
                  ),
                  7 => 
                  array (
                    'key' => '11th gen',
                    'value' => '11th gen',
                  ),
                  8 => 
                  array (
                    'key' => '12th gen',
                    'value' => '12th gen',
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
   'icon' => 'data:image/jpeg;base64,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',
   'previewUrl' => '',
   'group' => 'Product Laptop ',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'previewGeneratorReference' => '',
   'compositeIndices' => 
  array (
  ),
   'generateTypeDeclarations' => true,
   'showFieldLookup' => false,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'enableGridLocking' => false,
   'deletedDataComponents' => 
  array (
  ),
   'blockedVarsForExport' => 
  array (
  ),
   'activeDispatchingEvents' => 
  array (
  ),
));
