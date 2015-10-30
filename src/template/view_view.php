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
<h1><?php echo sprintf(\$this->translate('{$this->getTranslationPrefix()}.view.headline_html'), \$this->escapeHtml(\$this->{$this->getPropertyName()}->{$this->getToStringMethodName()}())); ?></h1>
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
        class="btn btn-sm btn-primary"
        href="<?php echo \$this->url('{$this->getRouteName()}/edit', \$this->{$this->getPropertyName()}->getArrayCopy()); ?>">
        <?php echo \$this->escapeHtml(\$this->translate('common.edit_button'))?></a>
    <a
        class="btn btn-sm btn-primary"
        href="<?php echo \$this->url('{$this->getRouteName()}/delete', \$this->{$this->getPropertyName()}->getArrayCopy()); ?>">
        <?php echo \$this->escapeHtml(\$this->translate('common.delete_button'))?></a>
</div>
<hr />
<table class="table table-hover">
    <colgroup>
        <col width="25%" />
        <col width="*" />
    </colgroup>
    <tbody>

PHPCODE;
foreach ($this->getProperties() as $property) {
    echo <<<PHPCODE
        <tr class="{$property['key']}">
            <th>
                <?php echo \$this->escapeHtml(\$this->translate('{$this->getTranslationPrefix()}.{$property['key']}')); ?>

            </th>
            <td>
                <?php echo \$this->escapeHtml(\$this->{$this->getPropertyName()}->get{$property['method']}()); ?>

            </td>
        </tr>

PHPCODE;
}
echo <<<PHPCODE
    </tbody>
</table>
PHPCODE;
