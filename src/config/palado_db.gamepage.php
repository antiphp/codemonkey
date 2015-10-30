<?php
return array(
    'name' => 'palado_db/gamepage',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'GamePage',
    'is_abstract' => true,
    'class_name' => 'GamePage',
    
    'property_name' => 'gamepage',
    'list_property_name' => 'gamepages',
    
    'route_name' => 'gamepage',
    'url_name' => 'gamepage',
    'database_table_name' => 'gamepage',
    'manager_service_name' => 'gamepageManager',
    'db_manager_service_name' => 'gamepageDbManager',
    'controller_service_name' => 'gamepage',
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
    
    'display_name' => 'game page',
    'list_display_name' => 'game pages',
    
    'properties' => array(
        array(
            'key' => 'id',
            'property' => 'id',
            'type' => 'id',
            'method' => 'Id',
            'ignore_in_form' => true,
        ),
        array(
            'key' => 'name',
            'property' => 'name',
            'type' => 'string',
            'method' => 'Name',
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