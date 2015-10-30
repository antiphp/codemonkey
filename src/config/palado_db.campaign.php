<?php
return array(
    'name' => 'palado_db/contact_comment',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'ContactComment',
    'is_abstract' => true,
    'class_name' => 'ContactComment',
    
    'property_name' => 'comment',
    'list_property_name' => 'comments',
    
    'translation_prefix' => 'contact-comment',
    'route_name' => 'contact-comment',
    'url_name' => 'contact-comment',
    'database_table_name' => 'contact_comment',
    'manager_service_name' => 'contactCommentManager',
    'db_manager_service_name' => 'contactCommentDbManager',
    'controller_service_name' => 'contact-comment',
    
    'entity' => true,
    'entity_list' => true,
    'db_manager' => true,
    'db_manager_service_factory' => true,
    'controller' => true,
    'module_config' => true,
    
    'display_name' => 'contact comment',
    'list_display_name' => 'contact comments',
    
    
    'properties' => array(
        array(
            'key' => 'id',
            'property' => 'id',
            'type' => 'id',
            'method' => 'Id',
        ),
        array(
            'key' => 'partner_id',
            'property' => 'partnerId',
            'type' => 'id',
            'method' => 'PartnerId',
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
        ),
        array(
            'key' => 'edited',
            'property' => 'edited',
            'type' => 'date',
            'method' => 'Edited',
        ),
        array(
            'key' => 'created',
            'property' => 'created',
            'type' => 'date',
            'method' => 'Created',
        ),
    )
);