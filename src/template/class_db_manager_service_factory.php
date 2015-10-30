<?php
echo <<<PHPCODE
<?php
/**
 * class file
 *
 * @generator {$this->getGeneratorName()}
 * @date {$this->getGenerationDate()}
 */
namespace {$this->getNamespaceName()}\\{$this->getSubnamespaceName()};

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Service factory for service '{$this->getDbManagerServiceName()}'
 */
class {$this->getDbManagerServiceFactoryClassName()} implements FactoryInterface
{
    public function createService(ServiceLocatorInterface \$sm)
    {
        \$service = new {$this->getDbManagerClassName()}(\$sm->get('db'));
        return \$service;
    }
}
PHPCODE;
