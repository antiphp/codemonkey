<?php
namespace Antiphp\Codemonkey\Generator;

class GenerateTemplate
{
    private $config = array();
    
    public function __invoke($templateFile)
    {
        if (!is_file($templateFile)) {
            throw new \RuntimeException(sprintf('Template [%s] not found', $templateFile));
        }
        ob_start();
        include $templateFile;
        return ob_get_clean();
    }
    
    public function has($name)
    {
        return array_key_exists($name, $this->config);
    }
    
    public function get($name)
    {
        if (!array_key_exists($name, $this->config)) {
            throw new \InvalidArgumentException(sprintf('Config property [%s] not set', $name));
        }
        return $this->config[$name];
    }
    
    public function setConfig(array $config)
    {
        $this->config = $config;
    }
    
    public function getConfig()
    {
        return $this->config;
    }
    
    public function hasConfig()
    {
        return $this->config;
    }
    
    /** output **/
    
    public function getGeneratorName()
    {
        return 'antiphp/codemonkey';
    }
    
    public function getGenerationDate()
    {
        return date('c');
    }
    
    public function getAuthor()
    {
        if (!$this->has('author')) {
            return 'Christian Reinecke <christian.reinecke@gameforge.com>';
        }
        return $this->get('author');
    }
    
    public function getTemplateDir()
    {
        if (!$this->has('template_dir')) {
            return __DIR__ . '/../../template';
        }
        return $this->get('template_dir');
    }
    
    public function getNamespaceName()
    {
        return $this->get('namespace_name');
    }
    
    public function getSubnamespaceName()
    {
        return $this->get('subnamespace_name');
    }
    
    public function isAbstract()
    {
        return $this->has('is_abstract') && $this->get('is_abstract');
    }
    
    public function getClassName()
    {
        return $this->get('class_name');
    }
    
    public function getGeneratedClassName()
    {
        if ($this->has('generated_class_name')) {
            return $this->get('generated_class_name');
        }
        return $this->getClassName() . 'Generated';
    }
    
    public function getManagerServiceName()
    {
        if ($this->has('manager_service_name')) {
            return $this->get('manager_service_name');
        }
        return $this->getDbManagerServiceName();
    }
    
    public function getListPropertyName()
    {
        return $this->get('list_property_name');
    }
    
    public function getListVariableName()
    {
        if ($this->has('list_variable_name')) {
            return $this->get('list_variable_name');
        }
        return '$' . $this->getListPropertyName();
    }
    
    public function getVariableName()
    {
        if ($this->has('variable_name')) {
            return $this->get('variable_name');
        }
        return '$' . $this->getPropertyName();
    }
    
    public function getPropertyName()
    {
        return $this->get('property_name');
    }
    
    public function getTranslationPrefix()
    {
        if ($this->has('translation_prefix')) {
            return $this->get('translation_prefix');
        }
        return $this->getDatabaseTableName();
    }
    
    public function getRouteName()
    {
        return $this->get('route_name');
    }
    
    public function getControllerClassName()
    {
        if ($this->has('controller_class_name')) {
            return $this->get('controller_class_name');
        }
        return $this->getClassName() . 'Controller';
    }
    
    public function getProperties()
    {
        return $this->get('properties');
    }
    
    public function getListClassName()
    {
        if ($this->has('list_class_name')) {
            return $this->get('list_class_name');
        }
        return $this->getClassName() . 'List';
    }
    
    public function getGeneratedListClassName()
    {
        if ($this->has('generated_list_class_name')) {
            return $this->get('generated_list_class_name');
        }
        return $this->getListClassName() . 'Generated';
    }
    
    public function getDbManagerClassName()
    {
        if ($this->has('db_manager_class_name')) {
            return $this->get('db_manager_class_name');
        }
        return $this->getClassName() . 'DbManager';
    }
    
    public function getDisplayName()
    {
        return $this->get('display_name');
    }
    
    public function getListDisplayName()
    {
        if ($this->has('list_display_name')) {
            return $this->get('list_display_name');
        }
        return $this->getDisplayName() . ' list';
    }
    
    public function getDatabaseTableName()
    {
        return $this->get('database_table_name');
    }
    public function getDbManagerServiceName()
    {
        return $this->get('db_manager_service_name');
    }
    
    public function getDbManagerServiceFactoryClassName()
    {
        if ($this->has('db_manager_service_factory_class_name')) {
            return $this->get('db_manager_service_factory_class_name');
        }
        return $this->getDbManagerClassName() . 'ServiceFactory';
    }
    
    public function getControllerServiceName()
    {
        return $this->get('controller_service_name');
    }
    
    public function getUrlName()
    {
        return $this->get('url_name');
    }
    
    public function getToStringMethodName()
    {
        return $this->get('to_string_method_name');
    }
}