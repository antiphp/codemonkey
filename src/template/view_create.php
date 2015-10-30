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
<h1><?php echo \$this->escapeHtml(\$this->translate('{$this->getTranslationPrefix()}.create.headline')); ?></h1>
<div class="btn-group">
    <a
        class="btn btn-sm btn-primary"
        href="<?php echo \$this->url('{$this->getRouteName()}'); ?>">
        <?php echo \$this->escapeHtml(\$this->translate('common.list_button'))?></a>
</div>
<div class="btn-group">
    <a
        class="btn btn-sm btn-primary disabled"
        href="#">
        <?php echo \$this->escapeHtml(\$this->translate('common.view_button'))?></a>
    <a
        class="btn btn-sm btn-primary disabled"
        href="#">
        <?php echo \$this->escapeHtml(\$this->translate('common.edit_button'))?></a>
    <a
        class="btn btn-sm btn-primary disabled"
        href="#">
        <?php echo \$this->escapeHtml(\$this->translate('common.delete_button'))?></a>
</div>
<hr />
<form action="" class="form-horizontal" method="post">
    <div class="panel panel-default">
        <div class="panel-body">
<?php include __DIR__ . '/_form.php'; ?>
            
        </div>
        <div class="panel-footer">
            <?php echo \$this->formSubmit(\$this->form->get('submit_form')); ?>
            
        </div>
    </div>
</form>
PHPCODE;
