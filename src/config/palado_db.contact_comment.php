<?php
return array(
    'name' => 'palado_db/contact_comment',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'ContactComment',
    'is_abstract' => true,
    'class_name' => 'ContactComment',
    
    'property_name' => 'comment',
    'list_property_name' => 'comments',
    
    'route_name' => 'contact-comment',
    'url_name' => 'contact-comment',
    'database_table_name' => 'contact_comment',
    'manager_service_name' => 'contactCommentManager',
    'db_manager_service_name' => 'contactCommentDbManager',
    'controller_service_name' => 'contact-comment',
    'to_string_method_name' => 'getComment',
    'translation_prefix' => 'contact-comment',
    
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
    
    'display_name' => 'contact comment',
    'list_display_name' => 'contact comments',
    
    'properties' => array(
        array(
            'key' => 'id',
            'property' => 'id',
            'type' => 'id',
            'method' => 'Id',
            'ignore_in_form' => true,
        ),
        array(
            'key' => 'partner_id',
            'property' => 'partnerId',
            'type' => 'id',
            'method' => 'PartnerId',
        ),
        array(
            'key' => 'date',
            'property' => 'date',
            'type' => 'date',
            'method' => 'Date',
        ),
        array(
            'key' => 'comment',
            'property' => 'comment',
            'type' => 'string',
            'method' => 'Comment',
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