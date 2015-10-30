<?php
return array(
    'name' => 'palado_db/partner',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'Partner',
    'is_abstract' => true,
    'class_name' => 'Partner',
    
    'property_name' => 'partner',
    'list_property_name' => 'partners',
    
    'route_name' => 'partner',
    'url_name' => 'partner',
    'database_table_name' => 'partner',
    'manager_service_name' => 'partnerManager',
    'db_manager_service_name' => 'partnerDbManager',
    'controller_service_name' => 'partner',
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
    
    'display_name' => 'partner',
    'list_display_name' => 'partners',
    
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
            'key' => 'address',
            'property' => 'address',
            'type' => 'string',
            'method' => 'Address',
        ),
        array(
            'key' => 'email',
            'property' => 'email',
            'type' => 'string',
            'method' => 'Email',
        ),
        array(
            'key' => 'phone',
            'property' => 'phone',
            'type' => 'string',
            'method' => 'Phone',
        ),
        array(
            'key' => 'homepage',
            'property' => 'homepage',
            'type' => 'string',
            'method' => 'Homepage',
        ),
        array(
            'key' => 'description',
            'property' => 'description',
            'type' => 'string',
            'method' => 'Description',
        ),
        array(
            'key' => 'status_id',
            'property' => 'statusId',
            'type' => 'id',
            'method' => 'StatusId',
            'ignore_in_form' => false,
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