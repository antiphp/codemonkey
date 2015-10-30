<?php
echo <<<PHPCODE
<?php
/**
 * template
 *
 * @generator {$this->getGeneratorName()}
 * @date {$this->getGenerationDate()}
 */
?>
<h1><?php echo sprintf(\$this->translate('{$this->getTranslationPrefix()}.delete.headline_html'), \$this->escapeHtml(\$this->{$this->getPropertyName()}->{$this->getToStringMethodName()}())); ?></h1>
<div class="btn-group">
    <a
        class="btn btn-sm btn-primary"
        href="<?php echo \$this->url('{$this->getRouteName()}'); ?>">
        <?php echo \$this->escapeHtml(\$this->translate('common.list_button'))?></a>
</div>
<div class="btn-group">
    <a
        class="btn btn-sm btn-primary"
        href="<?php echo \$this->url('{$this->getRouteName()}/view', \$this->{$this->getPropertyName()}->getArrayCopy()); ?>">
        <?php echo \$this->escapeHtml(\$this->translate('common.view_button'))?></a>
    <a
        class="btn btn-sm btn-primary"
        href="<?php echo \$this->url('{$this->getRouteName()}/edit', \$this->{$this->getPropertyName()}->getArrayCopy()); ?>">
        <?php echo \$this->escapeHtml(\$this->translate('common.edit_button'))?></a>
    <a
        class="btn btn-sm btn-primary disabled"
        href="#">
        <?php echo \$this->escapeHtml(\$this->translate('common.delete_button'))?></a>
</div>
<hr />
<form action="" method="post">
    <div class="panel panel-default">
        <div class="panel-body">
            <?php echo \$this->formElement(\$this->form->get('token')); ?>
                        
            <?php echo \$this->formElement(\$this->form->get('confirmation')); ?>
        
            <?php echo sprintf(
                \$this->translate('{$this->getTranslationPrefix()}.delete.confirmation_message_html'),
                \$this->{$this->getPropertyName()}->{$this->getToStringMethodName()}()
            ); ?>
            
        </div>
        <div class="panel-footer">
            <?php echo \$this->formElement(\$this->form->get('submit_button')); ?>
            <a class="btn btn-default" href="<?php echo \$this->url('{$this->getRouteName()}/view', \$this->{$this->getPropertyName()}->getArrayCopy()); ?>">
                <?php echo \$this->escapeHtml(\$this->translate('common.cancel_button')); ?></a>
        </div>
    </div>
</form>
PHPCODE;
