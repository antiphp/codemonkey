<?php
echo <<<PHP

    public function get{$property['method']}()
    {
        if (\$this->{$property['property']} === null) {
            \$this->{$property['property']} = new \DateTime('now');
        }
        return \$this->{$property['property']};
    }
PHP;
