<?php
return array(
    'name' => 'palado_db/attachment',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'Attachment',
    'is_abstract' => true,
    'class_name' => 'Attachment',
    
    'property_name' => 'attachment',
    'list_property_name' => 'attachments',
    
    'route_name' => 'attachment',
    'url_name' => 'attachment',
    'database_table_name' => 'attachment',
    'manager_service_name' => 'attachmentManager',
    'db_manager_service_name' => 'attachmentDbManager',
    'controller_service_name' => 'attachment',
    'to_string_method_name' => 'getDisplayName',
    
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
    
    'display_name' => 'attachment',
    'list_display_name' => 'attachments',
    
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
            'ignore_in_form' => false,
        ),
        array(
            'key' => 'display_name',
            'property' => 'displayName',
            'type' => 'string',
            'method' => 'DisplayName',
        ),
        array(
            'key' => 'path',
            'property' => 'path',
            'type' => 'string',
            'method' => 'Path',
        ),
        array(
            'key' => 'mime_type',
            'property' => 'mimeType',
            'type' => 'string',
            'method' => 'MimeType',
        ),
        array(
            'key' => 'file_size',
            'property' => 'fileSize',
            'type' => 'uint',
            'method' => 'FileSize',
        ),
        array(
            'key' => 'image',
            'property' => 'image',
            'type' => 'bool',
            'method' => 'Image',
        ),
        array(
            'key' => 'editor_id',
            'property' => 'editorId',
            'type' => 'id',
            'method' => 'EditorId',
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