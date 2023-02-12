<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - RamType [select]
 * - RamCapacity [select]
 */

return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'dao' => NULL,
   'id' => 'Ram',
   'name' => 'Ram',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1675969771,
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
             'name' => 'RAM',
             'type' => NULL,
             'region' => NULL,
             'title' => 'RAM',
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
                    'key' => 'LPDDR5',
                    'value' => 'LPDDR5',
                  ),
                  1 => 
                  array (
                    'key' => 'LPDDR4',
                    'value' => 'LPDDR4',
                  ),
                  2 => 
                  array (
                    'key' => 'LPDDR3',
                    'value' => 'LPDDR3',
                  ),
                  3 => 
                  array (
                    'key' => 'DDR5',
                    'value' => 'DDR5',
                  ),
                  4 => 
                  array (
                    'key' => 'DDR4',
                    'value' => 'DDR4',
                  ),
                  5 => 
                  array (
                    'key' => 'DDR3',
                    'value' => 'DDR3',
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
