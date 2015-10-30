<?php
echo <<<PHPCODE
<?php
/**
 * config file
 *
 * @generator {$this->getGeneratorName()}
 * @date {$this->getGenerationDate()}
 */
return array(
    '{$this->getTranslationPrefix()}.nav' => '{$this->getDisplayName()}',
);
PHPCODE;
