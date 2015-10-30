<?php
return array(
    'name' => 'palado_db/marketing_kit',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'MarketingKit',
    'is_abstract' => true,
    'class_name' => 'MarketingKit',
    
    'property_name' => 'marketingKit',
    'list_property_name' => 'marketingKits',
    
    'route_name' => 'marketing-kit',
    'url_name' => 'marketing-kit',
    'database_table_name' => 'marketing_kit',
    'manager_service_name' => 'marketingKitManager',
    'db_manager_service_name' => 'marketingKitDbManager',
    'controller_service_name' => 'marketing-kit',
    'to_string_method_name' => 'getName',
    
    'class_entity' => true,
    'class_entity_list' => true,
    'class_db_manager' => true,
    'class_db_manager_service_factory' => true,
    'class_controller' => true,
    'config_module_config' => true,
    'view_list' => true,
    'view_create' => true,
    'view_view' => true,
    'view_edit' => true,
    'view_delete' => true,
    'view_form' => true,
    
    'display_name' => 'marketing kit',
    'list_display_name' => 'marketing kits',
    
    'properties' => array(
        array(
            'key' => 'id',
            'property' => 'id',
            'type' => 'id',
            'method' => 'Id',
            'ignore_in_form' => true,
        ),
        array(
            'key' => 'gamepage_id',
            'property' => 'gamepageId',
            'type' => 'id',
            'method' => 'GamepageId',
        ),
        array(
            'key' => 'name',
            'property' => 'name',
            'type' => 'string',
            'method' => 'Name',
        ),
        array(
            'key' => 'description',
            'property' => 'description',
            'type' => 'string',
            'method' => 'Description',
        ),
        array(
            'key' => 'editor_id',
            'property' => 'editorId',
            'type' => 'id',
            'method' => 'EditorId',
            'ignore_in_form' => true,
        ),
        array(
            'key' => 'edited',
            'property' => 'edited',
            'type' => 'date',
            'method' => 'Edited',
            'ignore_in_form' => true,
        ),
        array(
            'key' => 'created',
            'property' => 'created',
            'type' => 'date',
            'method' => 'Created',
            'ignore_in_form' => true,
        ),
    )
);