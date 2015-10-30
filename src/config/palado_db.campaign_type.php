<?php
return array(
    'name' => 'palado_db/campaign_type',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'CampaignType',
    'is_abstract' => true,
    'class_name' => 'CampaignType',
    
    'property_name' => 'campaignType',
    'list_property_name' => 'campaignTypes',
    
    'route_name' => 'campaign-type',
    'url_name' => 'campaign-type',
    'database_table_name' => 'campaign_type',
    'manager_service_name' => 'campaignTypeManager',
    'db_manager_service_name' => 'campaignTypeDbManager',
    'controller_service_name' => 'campaign-type',
    'to_string_method_name' => 'getName',
    'translation_prefix' => 'campaign-type',
    
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
    
    'display_name' => 'campaign type',
    'list_display_name' => 'campaign types',
    
    'properties' => array(
        array(
            'key' => 'id',
            'property' => 'id',
            'type' => 'id',
            'method' => 'Id',
            'ignore_in_form' => true,
        ),
        array(
            'key' => 'parent_id',
            'property' => 'parentId',
            'type' => 'id',
            'method' => 'ParentId',
            'ignore_in_form' => false,
        ),
        array(
            'key' => 'name',
            'property' => 'name',
            'type' => 'string',
            'method' => 'Name',
        ),
        array(
            'key' => 'rank',
            'property' => 'rank',
            'type' => 'int',
            'method' => 'Rank',
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