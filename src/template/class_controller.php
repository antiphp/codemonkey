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

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * MVC controller
 *
 * @author {$this->getAuthor()}
 */
class {$this->getControllerClassName()} extends AbstractActionController
{
    public function listAction()
    {
        \$viewModel = new ViewModel();
        
        \$manager = \$this->getServiceLocator()->get('{$this->getManagerServiceName()}');
        {$this->getListVariableName()} = \$manager->getAll();
        
        \$viewModel->{$this->getListPropertyName()} = {$this->getListVariableName()};
        return \$viewModel;
    }
    
    public function createAction()
    {
        \$viewModel = new ViewModel();
        
        {$this->getVariableName()} = new {$this->getClassName()}();
        
        \$form = \$this->createForm();
        \$form->prepare();
        \$form->bind({$this->getVariableName()});
        if (\$this->getRequest()->isPost()) {
            \$form->setData(\$this->getRequest()->getPost());
            if (\$form->isValid()) {
                \$manager = \$this->getServiceLocator()->get('{$this->getManagerServiceName()}');
                \$manager->create({$this->getVariableName()});
                
                \$this->alert()->success('{$this->getTranslationPrefix()}.create.success');
                
                return \$this->redirect()->toRoute('{$this->getRouteName()}/view', array('id' => {$this->getVariableName()}->getId()));
            }
            # else { var_dump(\$form->getMessages()); exit; }
        }
        
        \$viewModel->{$this->getPropertyName()} = {$this->getVariableName()};
        \$viewModel->form = \$form;
        return \$viewModel;
    }
    
    public function viewAction()
    {
        \$viewModel = new ViewModel();
        
        \$manager = \$this->getServiceLocator()->get('{$this->getManagerServiceName()}');
        {$this->getVariableName()} = \$manager->get(\$this->params('id'));
        
        \$viewModel->{$this->getPropertyName()} = {$this->getVariableName()};
        return \$viewModel;
    }
    
    public function editAction()
    {
        \$viewModel = new ViewModel();
        
        \$manager = \$this->getServiceLocator()->get('{$this->getManagerServiceName()}');
        {$this->getVariableName()} = \$manager->get(\$this->params('id'));
        
        \$form = \$this->createForm();
        \$form->prepare();
        \$form->bind({$this->getVariableName()});
        if (\$this->getRequest()->isPost()) {
            \$form->setData(\$this->getRequest()->getPost());
            if (\$form->isValid()) {
                \$manager->update({$this->getVariableName()});
                
                \$this->alert()->success('{$this->getTranslationPrefix()}.edit.success');
                
                return \$this->redirect()->toRoute('{$this->getRouteName()}/view', array('id' => {$this->getVariableName()}->getId()));
            }
            # else { var_dump(\$form->getMessages()); exit; }
        }
        
        \$viewModel->{$this->getPropertyName()} = {$this->getVariableName()};
        \$viewModel->form = \$form;
        return \$viewModel;
    }
    
    public function deleteAction()
    {
        \$viewModel = new ViewModel();
        \$viewModel->setTerminal(\$this->getRequest()->isXmlHttpRequest());
        
        \$manager = \$this->getServiceLocator()->get('{$this->getManagerServiceName()}');
        {$this->getVariableName()} = \$manager->get(\$this->params('id'));
        
        \$form = \$this->createForm();
        if (\$this->getRequest()->isPost()) {
            \$form->setData(\$this->getRequest()->getPost());
            if (\$form->isValid()) {
                // delete
                \$manager->delete({$this->getVariableName()});
                // add notification
                \$this->alert()->success('{$this->getTranslationPrefix()}.delete.success');
                // redirect
                return \$this->redirect()->toRoute('{$this->getRouteName()}');
            }
        }
        
        \$viewModel->form = \$form;
        \$viewModel->{$this->getPropertyName()} = {$this->getVariableName()};
        return \$viewModel;
    }
}

SOURCECODE;
