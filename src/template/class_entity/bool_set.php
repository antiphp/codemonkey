<?php
echo <<<PHP

    public function set{$property['method']}(\${$property['property']} = true)
    {
        if (\${$property['property']} !== null) {
            \${$property['property']} = (int)(bool)\${$property['property']};
        }
        \$this->{$property['property']} = \${$property['property']};
    }
PHP;
