<?php
abstract class American {

    /** @var string */
    protected $name;

    abstract public function getName();

    public function selfIntroduction() {
        echo "My name is " . $this->name . "\n";
    }
}

class Alice extends American {
    protected $name = "Alice";

    public function getName()
    {
        echo $this->name . "\n";
    }
}

class Bob extends American {
    protected $name = "Bob";

    public function getName()
    {
        echo $this->name . "\n";
    }
}

$alice = new Alice();

$bob = new Bob();

$alice->getName();
$alice->selfIntroduction();

$bob->getName();
$bob->selfIntroduction();