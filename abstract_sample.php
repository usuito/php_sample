<?php
abstract class American {

    /** @var string */
    protected $name;

    public function selfIntroduction() {
        echo "My name is " . $this->name . "\n";
    }
}

class Alice extends American {

    /** @var string */
    protected $name = 'Alice';
}

class Bob extends American {

    /** @var string */
    protected $name = 'Bob';
}


$alice = new Alice();

$bob = new Bob();

$alice->selfIntroduction();
$bob->selfIntroduction();