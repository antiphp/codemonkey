<?php
echo <<<PHP

    public function set{$property['method']}(\${$property['property']})
    {
        \${$property['property']} = (string)\${$property['property']};
        \${$property['property']} = trim(\${$property['property']});
        if (\${$property['property']} === '') {
            \${$property['property']} = null;
        }
        \$this->{$property['property']} = \${$property['property']};
    }
PHP;
