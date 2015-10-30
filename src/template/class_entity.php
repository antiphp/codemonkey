<?php
echo <<<SOURCECODE
<?php
/**
 * class file
 *
 * @generator {$this->getGeneratorName()}
 * @date {$this->getGenerationDate()}
 */
namespace {$this->getNamespaceName()}\\{$this->getSubnamespaceName()};


SOURCECODE;
if ($this->isAbstract()) {
    echo 'abstract ';
}
echo <<<SOURCECODE
class {$this->getGeneratedClassName()}
{

SOURCECODE;

foreach ($this->getProperties() as $property) {
    echo <<<SOURCECODE
    private \${$property['property']};

SOURCECODE;
}
echo <<<SOURCECODE
    
    public function exchangeArray(array \$data)
    {
SOURCECODE;
foreach ($this->getProperties() as $property) {
    echo <<<SOURCECODE

        if (array_key_exists('{$property['key']}', \$data)) {
            \$this->set{$property['method']}(\$data['{$property['key']}']);
        }
SOURCECODE;
}
echo <<<SOURCECODE

    }
    
    public function getArrayCopy()
    {
        return array(

SOURCECODE;
foreach ($this->getProperties() as $property) {
    echo <<<SOURCECODE
            '{$property['key']}' => \$this->get{$property['method']}()
SOURCECODE;
    if ($property['type'] === 'date') {
        echo "->format('c')";
    }
    echo ",", PHP_EOL;
}

echo <<<SOURCECODE
        );
    }
    
SOURCECODE;

foreach ($this->getProperties() as $property) {
    require __DIR__ . '/class_entity/' . $property['type'] . '_set.php';
    echo PHP_EOL;
    require __DIR__ . '/class_entity/' . $property['type'] . '_get.php';
    echo PHP_EOL;
    require __DIR__ . '/class_entity/' . $property['type'] . '_has.php';
    echo PHP_EOL;
}

echo <<<SOURCECODE
}

SOURCECODE;
