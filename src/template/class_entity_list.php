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

use {$this->getNamespaceName()}\Indexer\IdIndexer;
use {$this->getNamespaceName()}\Indexer\IndexerInterface;


PHPCODE;
if ($this->isAbstract()) {
    echo 'abstract ';
}
echo <<<PHPCODE
class {$this->getGeneratedListClassName()} implements \IteratorAggregate, \Countable
{
    private \${$this->getListPropertyName()} = array();
    private \$indexer;

    public function __clone()
    {
        if (\$this->{$this->getListPropertyName()} !== null) {
            \$this->{$this->getListPropertyName()} = clone \$this->indexer;
        }
    }
    
    public function getIterator()
    {
        return new \ArrayIterator(\$this->{$this->getListPropertyName()});
    }
    
    public function count()
    {
        return count(\$this->{$this->getListPropertyName()});
    }
    
    public function append({$this->getClassName()} {$this->getVariableName()})
    {
        \$index = \$this->index({$this->getVariableName()});
        \$this->{$this->getListPropertyName()}[\$index] = {$this->getVariableName()};
    }

    public function get({$this->getVariableName()})
    {
        \$index = \$this->index({$this->getVariableName()});
        if (!isset(\$this->{$this->getListPropertyName()}[\$index])) {
            throw new \RuntimeException(sprintf('List index [%u] not found', \$index));
        }
        return \$this->{$this->getListPropertyName()}[\$index];
    }
    
    public function has({$this->getVariableName()})
    {
        \$index = \$this->index({$this->getVariableName()});
        return isset(\$this->{$this->getListPropertyName()}[\$index]);
    }
    
    public function getIndexer()
    {
        if (\$this->indexer === null) {
            \$this->indexer = new IdIndexer();
        }
        return \$this->indexer;
    }
    
    public function setIndexer(IndexerInterface \$indexer)
    {
        \$this->indexer = \$indexer;
        
        {$this->getListVariableName()} = array();
        foreach (\$this as {$this->getVariableName()}) {
            \$index = \$this->index({$this->getVariableName()});
            {$this->getListVariableName()}[\$index] = {$this->getVariableName()};
        }
        \$this->{$this->getListPropertyName()} = {$this->getListVariableName()};
    }

    public function slice(\$offset, \$length)
    {
        {$this->getListVariableName()} = new static();
        {$this->getListVariableName()}->setIndexer(\$this->getIndexer());
        foreach (array_slice(\$this->{$this->getListPropertyName()}, \$offset, \$length) as {$this->getVariableName()}) {
            {$this->getListVariableName()}->append({$this->getVariableName()});
        }
        return {$this->getListVariableName()};
    }
    
    protected function index({$this->getVariableName()})
    {
        \$indexer = \$this->getIndexer();
        \$index = \$indexer->index({$this->getVariableName()});
        return \$index;
    }
    
    protected function uasort(\$callback)
    {
        \$data = \$this->{$this->getListPropertyName()};
        uasort(\$data, \$callback);
        
        {$this->getListVariableName()} = new static();
        {$this->getListVariableName()}->setIndexer(\$this->getIndexer());
        foreach (\$data as {$this->getVariableName()}) {
            {$this->getListVariableName()}->append({$this->getVariableName()});
        }
        return {$this->getListVariableName()};
    }
    
    protected function filter(\$callback)
    {
        {$this->getListVariableName()} = new static();
        {$this->getListVariableName()}->setIndexer(\$this->getIndexer());
        foreach (array_filter(\$this->{$this->getListPropertyName()}, \$callback) as {$this->getVariableName()}) {
            {$this->getListVariableName()}->append({$this->getVariableName()});
        }
        return {$this->getListVariableName()};
    }
    
    protected function map(\$callback)
    {
        return array_map(\$callback, \$this->{$this->getListPropertyName()});
    }
}

PHPCODE;
