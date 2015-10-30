<?php
echo <<<PHP

    public function set{$property['method']}(\${$property['property']})
    {
        \${$property['property']} = (string)\${$property['property']};
        \${$property['property']} = trim(\${$property['property']});
        if (!filter_var(\${$property['property']}, FILTER_VALIDATE_EMAIL)) {
            \${$property['property']} = null;
        }
        \$this->{$property['property']} = \${$property['property']};
    }
PHP;
