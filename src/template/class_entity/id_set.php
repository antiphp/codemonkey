<?php
echo <<<PHP

    public function set{$property['method']}(\${$property['property']})
    {
        \${$property['property']} = (int)\${$property['property']};
        if (\${$property['property']} < 1) {
            \${$property['property']} = null;
        }
        \$this->{$property['property']} = \${$property['property']};
    }
PHP;
