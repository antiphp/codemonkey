<?php
echo <<<PHP

    public function has{$property['method']}()
    {
        return \$this->{$property['property']} !== null;
    }
PHP;
