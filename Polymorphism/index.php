<?php

class Animal {
    
    public function makeSound() {
        return "Some animal sound";
    }
}

// Dog
class Dog extends Animal {
   
    public function makeSound() {
        return "Gau gau";
    }
}

// Cat
class Cat extends Animal {
    
    public function makeSound() {
        return "Meow";
    }
}

// Cow
class Cow extends Animal {
    
    public function makeSound() {
        return "Humba humba";
    }
}

function animalSound(Animal $animal) {
    echo get_class($animal) . " makes the sound: " . $animal->makeSound() . "\n";
}

$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

animalSound($dog); 
animalSound($cat); 
animalSound($cow); 

?>
