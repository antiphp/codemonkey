<?php
echo <<<PHPCODE
<?php
/**
 * template
 *
 * @generator {$this->getGeneratorName()}
 * @date {$this->getGenerationDate()}
 */
\$this->loadResource('custom.clickable-table-rows');
?>
<h1><?php echo \$this->escapeHtml(\$this->translate('{$this->getTranslationPrefix()}.list.headline')); ?></h1>
<div class="btn-group">
    <a
        class="btn btn-sm btn-primary disabled"
        href="<?php echo \$this->url('{$this->getRouteName()}'); ?>">
        <?php echo \$this->escapeHtml(\$this->translate('common.list_button'))?></a>
</div>
<div class="btn-group">
    <a
        class="btn btn-sm btn-primary"
        href="<?php echo \$this->url('{$this->getRouteName()}/create'); ?>">
        <span class="fa fa-plus"></span>
        <?php echo \$this->escapeHtml(\$this->translate('common.create_button'))?></a>
</div>
<hr />
<?php if (count(\$this->{$this->getListPropertyName()}) === 0): ?>
<div class="empty"><?php echo \$this->escapeHtml(\$this->translate('{$this->getTranslationPrefix()}.list.empty')); ?></div>
<?php else: ?>
<table class="table table-hover">
    <thead>
        <tr>

PHPCODE;
foreach ($this->getProperties() as $property) {
    echo <<<PHPCODE
            <th><?php echo \$this->escapeHtml(\$this->translate('{$this->getTranslationPrefix()}.{$property['key']}')); ?></th>

PHPCODE;
}
echo <<<PHPCODE
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
<?php foreach (\$this->{$this->getListPropertyName()} as {$this->getVariableName()}): ?>
        <tr class="clickable">

PHPCODE;
foreach ($this->getProperties() as $property) {
    echo <<<PHPCODE
            <td><?php echo \$this->escapeHtml({$this->getVariableName()}->get{$property['method']}()); ?></td>

PHPCODE;

}
$count = count($this->getProperties()) + 1;
echo <<<PHPCODE
            <th>
                <div class="btn-group pull-right">
                    <a
                        class="btn btn-xs btn-default default-click"
                        href="<?php echo \$this->url('{$this->getRouteName()}/view', {$this->getVariableName()}->getArrayCopy()); ?>">
                        <?php echo \$this->escapeHtml(\$this->translate('common.view')); ?></a>
                    <div
                        class="btn btn-xs btn-default dropdown-toggle"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <span class="caret"></span></div>
                    <ul class="dropdown-menu">
                        <li>
                            <a
                                href="<?php echo \$this->url('{$this->getRouteName()}/view', {$this->getVariableName()}->getArrayCopy()); ?>">
                                <?php echo \$this->escapeHtml(\$this->translate('common.view')); ?></a>
                        </li>
                        <li>
                            <a
                                href="<?php echo \$this->url('{$this->getRouteName()}/edit', {$this->getVariableName()}->getArrayCopy()); ?>">
                                <?php echo \$this->escapeHtml(\$this->translate('common.edit')); ?></a>
                        </li>
                        <li>
                            <a
                                href="<?php echo \$this->url('{$this->getRouteName()}/delete', {$this->getVariableName()}->getArrayCopy()); ?>">
                                <?php echo \$this->escapeHtml(\$this->translate('common.delete')); ?></a>
                        </li>
                    </ul>
                </div>
            </th>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
PHPCODE;
