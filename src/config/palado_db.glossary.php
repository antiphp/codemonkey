<?php
return array(
    'name' => 'palado_db/glossary',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'Glossary',
    'is_abstract' => true,
    'class_name' => 'Glossary',
    
    'property_name' => 'glossary',
    'list_property_name' => 'glossaries',
    
    'route_name' => 'glossary',
    'url_name' => 'glossary',
    'database_table_name' => 'glossary',
    'manager_service_name' => 'glossaryManager',
    'db_manager_service_name' => 'glossaryDbManager',
    'controller_service_name' => 'glossary',
    'to_string_method_name' => 'getTerm',
    
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
    
    'display_name' => 'glossary term',
    'list_display_name' => 'glossary terms',
    
    'properties' => array(
        array(
            'key' => 'id',
            'property' => 'id',
            'type' => 'id',
            'method' => 'Id',
            'ignore_in_form' => true,
        ),
        array(
            'key' => 'term',
            'property' => 'term',
            'type' => 'string',
            'method' => 'Term',
        ),
        array(
            'key' => 'explanation',
            'property' => 'explanation',
            'type' => 'string',
            'method' => 'Explanation',
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