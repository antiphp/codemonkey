<?php
echo <<<PHP

    public function set{$property['method']}(\${$property['property']})
    {
        if (is_numeric(\${$property['property']})) {
            \${$property['property']} = date('c', \${$property['property']});
        }
        if (!\${$property['property']} instanceof \DateTime && \${$property['property']} !== null) {
            \${$property['property']} = new \DateTime(\${$property['property']});
        }
        \$this->{$property['property']} = \${$property['property']};
    }
PHP;
