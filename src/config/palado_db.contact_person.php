<?php
return array(
    'name' => 'palado_db/contact_person',
    
    'namespace_name' => 'PaladoDb',
    'subnamespace_name' => 'ContactPerson',
    'is_abstract' => true,
    'class_name' => 'ContactPerson',
    
    'property_name' => 'person',
    'list_property_name' => 'persons',
    
    'route_name' => 'contact-person',
    'url_name' => 'contact-person',
    'database_table_name' => 'contact_person',
    'manager_service_name' => 'contactPersonManager',
    'db_manager_service_name' => 'contactPersonDbManager',
    'controller_service_name' => 'contact-person',
    'to_string_method_name' => 'getPerson',
    'translation_prefix' => 'contact-person',
    
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
    
    'display_name' => 'contact person',
    'list_display_name' => 'contact persons',
    
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
            'key' => 'gender',
            'property' => 'gender',
            'type' => 'string',
            'method' => 'Gender',
        ),
        array(
            'key' => 'firstname',
            'property' => 'firstname',
            'type' => 'string',
            'method' => 'Firstname',
        ),
        array(
            'key' => 'lastname',
            'property' => 'lastname',
            'type' => 'string',
            'method' => 'Lastname',
        ),
        array(
            'key' => 'position',
            'property' => 'position',
            'type' => 'string',
            'method' => 'Position',
        ),
        array(
            'key' => 'email',
            'property' => 'email',
            'type' => 'email',
            'method' => 'Email',
        ),
        array(
            'key' => 'mobile',
            'property' => 'mobile',
            'type' => 'string',
            'method' => 'Mobile',
        ),
        array(
            'key' => 'phone',
            'property' => 'phone',
            'type' => 'string',
            'method' => 'Phone',
        ),
        array(
            'key' => 'description',
            'property' => 'description',
            'type' => 'string',
            'method' => 'Description',
        ),
        array(
            'key' => 'contact_id',
            'property' => 'contactId',
            'type' => 'id',
            'method' => 'ContactId',
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