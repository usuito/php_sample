<?php
abstract class American {

    abstract protected function getName();

    public function selfIntroduction() {
        echo "My name is " . $this->getName() . "\n";
    }
}

class Alice extends American {

    protected function getName()
    {
        echo "Alice\n";
    }
}

class Bob extends American {

    protected function getName()
    {
        echo "Bob\n";
    }
}

$alice = new Alice();

$bob = new Bob();

$alice->selfIntroduction();
$bob->selfIntroduction();