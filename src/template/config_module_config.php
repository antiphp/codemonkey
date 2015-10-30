<?php
echo <<<PHPCODE
<?php
/**
 * config file
 *
 * @generator {$this->getGeneratorName()}
 * @date {$this->getGenerationDate()}
 */
return array(
    'service_manager' => array(
        'factories' => array(
            '{$this->getDbManagerServiceName()}' => '{$this->getNamespaceName()}\\{$this->getSubnamespaceName()}\\{$this->getDbManagerServiceFactoryClassName()}',
        ),
        'aliases' => array(
            '{$this->getManagerServiceName()}' => '{$this->getDbManagerServiceName()}',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            '{$this->getControllerServiceName()}' => '{$this->getNamespaceName()}\\{$this->getSubnamespaceName()}\\{$this->getControllerClassName()}',
        ),
    ),
    'router' => array(
        'routes' => array(
            '{$this->getRouteName()}' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/{$this->getUrlName()}',
                    'defaults' => array(
                        'controller' => '{$this->getControllerServiceName()}',
                        'action' => 'list'
                    )
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'create' => array(
                        'type' => 'literal',
                        'options' => array(
                            'route' => '/create',
                            'defaults' => array(
                                'controller' => '{$this->getControllerServiceName()}',
                                'action' => 'create'
                            )
                        ),
                    ),
                    'view' => array(
                        'type' => 'segment',
                        'options' => array(
                            'route' => '/:id[/:name]',
                            'defaults' => array(
                                'controller' => '{$this->getControllerServiceName()}',
                                'action' => 'view'
                            ),
                            'constraints' => array(
                                'id' => '\d+',
                                'name' => '.*'
                            ),
                        ),
                    ),
                    'edit' => array(
                        'type' => 'segment',
                        'options' => array(
                            'route' => '/:id/edit[/:name]',
                            'defaults' => array(
                                'controller' => '{$this->getControllerServiceName()}',
                                'action' => 'edit'
                            ),
                            'constraints' => array(
                                'id' => '\d+',
                                'name' => '.*'
                            ),
                        ),
                    ),
                    'delete' => array(
                        'type' => 'segment',
                        'options' => array(
                            'route' => '/:id/delete[/:name]',
                            'defaults' => array(
                                'controller' => '{$this->getControllerServiceName()}',
                                'action' => 'delete'
                            ),
                            'constraints' => array(
                                'id' => '\d+',
                                'name' => '.*'
                            ),
                        ),
                    ),
                )
            ),
        ),
    ),
    // end of router/routes
    
    'forms' => array(
        '{$this->getRouteName()}/create' => {$this->getVariableName()}Form = array(
            'type' => '{$this->getNamespaceName()}\Form\Form',
            'elements' => array(
                \$csrfElement = array(
                    'spec' => array(
                        'name' => 'token',
                        'type' => 'Zend\Form\Element\Csrf',
                        'attributes' => array(
                            'type' => 'hidden'
                        ),
                        'options' => array(
//                             'csrf_options' => array(
//                                 'timeout' => 12 * 60 * 60,
//                             )
                        )
                    )
                ),

PHPCODE;
foreach ($this->getProperties() as $property) {
    if (isset($property['ignore_in_form']) && $property['ignore_in_form']) {
        continue;
    }
    echo <<<PHPCODE
                array(
                    'spec' => array(
                        'name' => '{$property['key']}',
                        'attributes' => array(
                            'type' => 'text',
                            'class' => 'form-control'
                        ),
                        'options' => array(
                            'label' => '{$this->getTranslationPrefix()}.{$property['key']}',
                            'label_attributes' => array(
                                'class' => 'control-label col-sm-2'
                            )
                        )
                    )
                ),

PHPCODE;
}
echo <<<PHPCODE
                array(
                    'spec' => array(
                        'name' => 'submit_form',
                        'attributes' => array(
                            'class' => 'btn btn-success',
                            'type' => 'submit',
                            'value' => 'common.submit_button',
                        ),
                    )
                ),
            ),
            'input_filter' => array(
                'token' => array(
                    'required' => true
                ),

PHPCODE;
foreach ($this->getProperties() as $property) {
    if (isset($property['ignore_in_form']) && $property['ignore_in_form']) {
        continue;
    }
    echo <<<PHPCODE
                '{$property['key']}' => array(
                    'required' => true
                ),

PHPCODE;
}
echo <<<PHPCODE
            )
        ),
        '{$this->getRouteName()}/edit' => {$this->getVariableName()}Form,
        '{$this->getRouteName()}/delete' => array(
            'type' => '{$this->getNamespaceName()}\Form\Form',
            'elements' => array(
                \$csrfElement,
                array(
                    'spec' => array(
                        'name' => 'confirmation',
                        'type' => 'hidden',
                        'attributes' => array(
                            'id' => 'confirm-delete',
                            'value' => '0'
                        ),
                    ),
                ),
                array(
                    'spec' => array(
                        'name' => 'submit_button',
                        'type' => 'button',
                        'attributes' => array(
                            'id' => 'submit_button',
                            'onclick' => "$('input#confirm-delete').val(1);return true",
                            'type' => 'submit',
                            'class' => 'btn btn-danger',
                        ),
                        'options' => array(
                            'label' => 'common.confirm_delete_button'
                        )
                    ),
                ),
            ),
            'input_filter' => array(
                'token' => array(
                    'required' => true
                ),
                'confirmation' => array(
                    'required' => true
                )
            )
        ),
    )
);

PHPCODE;
