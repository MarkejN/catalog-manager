<?php

ClassLoader::addNamespace( 'CatalogManager' );

ClassLoader::addClasses([

    'CatalogManager\tl_module' => 'system/modules/catalog-manager/classes/tl_module.php',
    'CatalogManager\Toolkit' => 'system/modules/catalog-manager/library/alnv/Toolkit.php',
    'CatalogManager\tl_catalog' => 'system/modules/catalog-manager/classes/tl_catalog.php',
    'CatalogManager\Text' => 'system/modules/catalog-manager/library/alnv/Fields/Text.php',
    'CatalogManager\Radio' => 'system/modules/catalog-manager/library/alnv/Fields/Radio.php',
    'CatalogManager\Select' => 'system/modules/catalog-manager/library/alnv/Fields/Select.php',
    'CatalogManager\Hidden' => 'system/modules/catalog-manager/library/alnv/Fields/Hidden.php',
    'CatalogManager\Upload' => 'system/modules/catalog-manager/library/alnv/Fields/Upload.php',
    'CatalogManager\Number' => 'system/modules/catalog-manager/library/alnv/Fields/Number.php',
    'CatalogManager\CSVBuilder' => 'system/modules/catalog-manager/library/alnv/CSVBuilder.php',
    'CatalogManager\SQLBuilder' => 'system/modules/catalog-manager/library/alnv/SQLBuilder.php',
    'CatalogManager\DCABuilder' => 'system/modules/catalog-manager/library/alnv/DCABuilder.php',
    'CatalogManager\YAMLParser' => 'system/modules/catalog-manager/library/alnv/YAMLParser.php',
    'CatalogManager\CatalogView' => 'system/modules/catalog-manager/library/alnv/CatalogView.php',
    'CatalogManager\Checkbox' => 'system/modules/catalog-manager/library/alnv/Fields/Checkbox.php',
    'CatalogManager\Textarea' => 'system/modules/catalog-manager/library/alnv/Fields/Textarea.php',
    'CatalogManager\GeoCoding' => 'system/modules/catalog-manager/library/alnv/Maps/GeoCoding.php',
    'CatalogManager\DCACallbacks' => 'system/modules/catalog-manager/library/alnv/DCACallbacks.php',
    'CatalogManager\DateInput' => 'system/modules/catalog-manager/library/alnv/Fields/DateInput.php',
    'CatalogManager\DCAPermission' => 'system/modules/catalog-manager/library/alnv/DCAPermission.php',
    'CatalogManager\OptionsGetter' => 'system/modules/catalog-manager/library/alnv/OptionsGetter.php',
    'CatalogManager\SQLQueryHelper' => 'system/modules/catalog-manager/library/alnv/SQLQueryHelper.php',
    'CatalogManager\TemplateHelper' => 'system/modules/catalog-manager/library/alnv/TemplateHelper.php',
    'CatalogManager\tl_catalog_fields' => 'system/modules/catalog-manager/classes/tl_catalog_fields.php',
    'CatalogManager\SQLQueryBuilder' => 'system/modules/catalog-manager/library/alnv/SQLQueryBuilder.php',
    'CatalogManager\FrontendEditing' => 'system/modules/catalog-manager/library/alnv/FrontendEditing.php',
    'CatalogManager\DCABuilderHelper' => 'system/modules/catalog-manager/library/alnv/DCABuilderHelper.php',
    'CatalogManager\CatalogWizard' => 'system/modules/catalog-manager/library/alnv/Widgets/CatalogWizard.php',
    'CatalogManager\CatalogController' => 'system/modules/catalog-manager/library/alnv/CatalogController.php',
    'CatalogManager\ReviseRelatedTables' => 'system/modules/catalog-manager/library/alnv/ReviseRelatedTables.php',
    'CatalogManager\I18nCatalogTranslator' => 'system/modules/catalog-manager/library/alnv/I18nCatalogTranslator.php',
    'CatalogManager\ModuleUniversalView' => 'system/modules/catalog-manager/library/alnv/Modules/ModuleUniversalView.php',
    'CatalogManager\UserPermissionExtension' => 'system/modules/catalog-manager/library/alnv/UserPermissionExtension.php',
    'CatalogManager\MemberPermissionExtension' => 'system/modules/catalog-manager/library/alnv/MemberPermissionExtension.php',
    'CatalogManager\FrontendEditingPermission' => 'system/modules/catalog-manager/library/alnv/FrontendEditingPermission.php',
    'CatalogManager\CatalogManagerInitializer' => 'system/modules/catalog-manager/library/alnv/CatalogManagerInitializer.php'
]);

TemplateLoader::addFiles([

    'catalog_teaser' => 'system/modules/catalog-manager/templates',
    'catalog_master' => 'system/modules/catalog-manager/templates',
    'mod_catalog_view' => 'system/modules/catalog-manager/templates',
    'form_catalog_default' => 'system/modules/catalog-manager/templates',
    'form_catalog_grouped' => 'system/modules/catalog-manager/templates'
]);