<?php
//get_called_class — the "Late Static Binding" class name

class foos {
    static public function test() {
        var_dump(get_called_class());
    }
}

class barrrr extends foos {
    
}

foos::test();
barrrr::test();

?>

