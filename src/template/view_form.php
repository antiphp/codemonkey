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
        <?php echo \$this->formElement(\$this->form->get('token')); ?>


PHPCODE;
foreach ($this->getProperties() as $property) {
    if (isset($property['ignore_in_form']) && $property['ignore_in_form']) {
        continue;
    }
    echo <<<PHPCODE
        <div class="form-group">
            <?php echo \$this->formLabel(\$element = \$this->form->get('{$property['key']}')); ?>

            <div class="col-sm-10">
                <?php echo \$this->formElement(\$element); ?>

                <?php echo \$this->formErrors(\$element); ?>

            </div>
        </div>

PHPCODE;
}