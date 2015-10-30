<?php
return array(
    'name' => 'palado_db/marketing_milestone',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'MarketingMilestone',
    'is_abstract' => true,
    'class_name' => 'MarketingMilestone',
    
    'property_name' => 'marketingMilestone',
    'list_property_name' => 'marketingMilestones',
    
    'route_name' => 'marketing-milestone',
    'url_name' => 'marketing-milestone',
    'database_table_name' => 'marketing_milestone',
    'manager_service_name' => 'marketingMilestoneManager',
    'db_manager_service_name' => 'marketingMilestoneDbManager',
    'controller_service_name' => 'marketing-milestone',
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
    
    'display_name' => 'marketing milestone',
    'list_display_name' => 'marketing milestones',
    
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