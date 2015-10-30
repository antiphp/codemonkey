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

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Sql\Sql;

class {$this->getDbManagerClassName()}
{
    private \$db;
    
    public function __construct(AdapterInterface \$db)
    {
        \$this->db = \$db;
    }
    
    public function get(\$id)
    {
        try {
            {$this->getListVariableName()} = \$this->getList(array('id' => \$id));
            {$this->getVariableName()} = {$this->getListVariableName()}->get(\$id);
            return {$this->getVariableName()};
        } catch (\Exception \$e) {
            throw new \RuntimeException('Could not retrieve {$this->getDisplayName()}', 0, \$e);
        }
    }
    
    public function getList(array \$filters, array \$orders = array(), \$limit = 0)
    {
        try {
            if (array_key_exists('id', \$filters) && count(\$filters['id']) === 0) {
                unset(\$filters['id']);
            }
        
            \$sql = new Sql(\$this->db);
            
            \$select = \$sql->select();
            \$select->from('{$this->getDatabaseTableName()}');
            \$select->where(\$filters);
            \$select->order(\$orders);
            if (\$limit > 0) {
                \$select->limit(\$limit);
            }
            
            \$statement = \$sql->prepareStatementForSqlObject(\$select);
            \$results = \$statement->execute();
            
            {$this->getListVariableName()} = new {$this->getListClassName()}();
            foreach (\$results as \$result) {
                {$this->getVariableName()} = new {$this->getClassName()}();
                {$this->getVariableName()}->exchangeArray(\$result);
                
                {$this->getListVariableName()}->append({$this->getVariableName()});
            }
            return {$this->getListVariableName()};
        } catch (\Exception \$e) {
            throw new \RuntimeException('Could not retrieve {$this->getListDisplayName()}', 0, \$e);
        }
    }
    
    public function getAll()
    {
        try {
            {$this->getListVariableName()} = \$this->getList(array());
            return {$this->getListVariableName()};
        } catch (\Exception \$e) {
            throw new \RuntimeException('Could not retrieve all {$this->getListDisplayName()}', 0, \$e);
        }
    }
    
    public function create({$this->getClassName()} {$this->getVariableName()})
    {
        try {
            {$this->getVariableName()}->setEdited('now');
            {$this->getVariableName()}->setCreated('now');
    
            \$values = {$this->getVariableName()}->getArrayCopy();
            if (empty(\$values['id'])) {
                unset(\$values['id']);
            }
            
            \$sql = new Sql(\$this->db);
            
            \$insert = \$sql->insert();
            \$insert->into('{$this->getDatabaseTableName()}');
            \$insert->values(\$values);
            
            \$statement = \$sql->prepareStatementForSqlObject(\$insert);
            \$results = \$statement->execute();
            
            {$this->getVariableName()}->setId(\$results->getGeneratedValue());
        } catch (\Exception \$e) {
            throw new \RuntimeException('Could not create {$this->getDisplayName()}', 0, \$e);
        }
    }
    
    public function update({$this->getClassName()} {$this->getVariableName()})
    {
        try {
            {$this->getVariableName()}->setEdited('now');
    
            \$values = {$this->getVariableName()}->getArrayCopy();
            unset(\$values['id']);
            
            \$sql = new Sql(\$this->db);
            
            \$update = \$sql->update();
            \$update->table('{$this->getDatabaseTableName()}');
            \$update->set(\$values);
            \$update->where(
                array(
                    'id' => {$this->getVariableName()}->getId()
                )
            );
            
            \$statement = \$sql->prepareStatementForSqlObject(\$update);
            \$results = \$statement->execute();
        } catch (\Exception \$e) {
            throw new \RuntimeException(sprintf('Could not update {$this->getDisplayName()} [%u]', {$this->getVariableName()}->getId()), 0, \$e);
        }
    }
    
    public function delete({$this->getClassName()} {$this->getVariableName()})
    {
        try {
            \$sql = new Sql(\$this->db);
            
            \$delete = \$sql->delete();
            \$delete->from('{$this->getDatabaseTableName()}');
            \$delete->where(
                array(
                    'id' => {$this->getVariableName()}->getId()
                )
            );
            
            \$statement = \$sql->prepareStatementForSqlObject(\$delete);
            \$results = \$statement->execute();
            
            \$affectedRows = \$results->getAffectedRows();
            \$deleted = \$affectedRows === 1;
            
            if (\$deleted) {
                {$this->getVariableName()}->setId(null);
            }
        } catch (\Exception \$e) {
            throw new \RuntimeException(sprintf('Could not delete {$this->getDisplayName()} [%u]', {$this->getVariableName()}->getId()), 0, \$e);
        }
    }
}

PHPCODE;
