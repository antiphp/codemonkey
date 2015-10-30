<?php
echo <<<PHP

    public function get{$property['method']}()
    {
        return \$this->{$property['property']};
    }
PHP;
