<?php
echo <<<PHP

    public function set{$property['method']}(\${$property['property']})
    {
        if (\${$property['property']} !== null) {
            \${$property['property']} = (int)\${$property['property']};
        }
        \$this->{$property['property']} = \${$property['property']};
    }
PHP;
