<?php
#San Andres, Kathea Kim Anjie S. | BSCS 2A | OOP Act 1 | September 02, 2025

echo "<p><b>San Andres, Kathea Kim Anjie S. | BSCS 2A | OOP Act 1 | September 02, 2025</b>";

# 1st Class: A window! ⊞ ⋆☀︎｡ ദ്ദി(˵ •̀ ᴗ - ˵ ) ✧
class window {
    public $material;
    public $color;
    public $size;
    public $shape;

    function __construct($material, $color, $size, $shape) {
    $this->material = $material;
    $this->color = $color;
    $this->size = $size;
    $this->shape = $shape;
    }

    public function set_material ($newMaterial){
    $this->material = $newMaterial;
    }
    
    public function get_material(){
    return $this->material;
    }

    public function set_color($newColor){
    $this->color = $newColor;
    }

    public function get_color(){
    return $this->color;
    }

    public function set_size ($newSize){
    $this->size = $newSize;
    }

    public function get_size(){
    return $this->size;
    }   

    public function set_shape ($newShape){
    $this->shape = $newShape;
    }   

    public function get_shape(){
    return $this->shape;
    }
}

$window = new window("wood", "green", "large", "circle");
echo "<b><p>Class #1: A Window! ⊞ ⋆☀︎｡ ദ്ദി(˵ •̀ ᴗ - ˵ ) ✧</b>";
echo "<br>Window";
echo "<br> Material: " . $window->material;
echo "<br> Color: " . $window->color;
echo "<br> Size: " . $window->size;
echo "<br> Shape: " . $window->shape;

# Using the set and get methods to update the window attributes
$window->set_color("pink");
$window->set_material("quartz");
echo "<br> Updated Color: " . $window->get_color();
echo "<br> Updated Material: " . $window->get_material();

# ☆★☆★☆★☆☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆☆★☆★☆★☆☆★☆★☆★☆☆★☆★☆★☆  

# 2nd Class: A Door! ┈➤🚪(•̀ᴗ•́)و (Not much attributes because I dont want it to be similar to window class)
class door {
    public $lockType;
    public $isLocked = false;
    public $isOpen = false;

    function __construct($lockType, $isLocked, $isOpen){
        $this->lockType = $lockType;
        $this->isLocked = $isLocked;
        $this->isOpen = $isOpen;
    }

    public function lock(){
        $this->isLocked = true;
        echo "<br> The door is locked.";
    }

    public function unlock(){
        $this->isLocked = false;
        echo "<br> The door is now unlocked.";
    }

    public function open(){
        if(!$this->isLocked){
            $this->isOpen = true;
            echo "<br> The door is now open.";
        } else {
            echo "<br> The door is locked. Unlock it first please.";
        }
    }

    public function close(){
        $this->isOpen = false;
        echo "<br> The door is closed!";
    }
}

$door = new door("Finger Print", false, false);
echo "<p><b>Class #2: A Door! ┈➤🚪(•̀ᴗ•́)و </b>";
echo "<br> Door";
echo "<br> Lock Type: " . $door->lockType;
echo "<br> Is the door Locked? " . ($door->isLocked ? "Yes" : "No");
echo "<br> Is the door Open? " . ($door->isOpen ? "Yes" : "No");

#to unlock, open, close, and lock the door (ᵕ—ᴗ—)
$door->unlock();
$door->open();  
echo "<br> Is the door Open? " . ($door->isOpen ? "Yes" : "No");
$door->close();
$door->lock();
echo "<br> Is the door Locked? " . ($door->isLocked ? "Yes" : "No");

# ☆★☆★☆★☆☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆☆★☆★☆★☆☆★☆★☆★☆☆★☆★☆★☆  

# 3rd Class: Heroes from MHA! (˶ˆᗜˆ˵)
class hero {
    public $heroName;
    public $realName;
    public $quirk;
    public $rank;

public function __construct($HeroName, $RealName, $Quirk, $Rank) {
    $this->heroName = $HeroName;
    $this->realName = $RealName;
    $this->quirk = $Quirk;
    $this->rank = $Rank;
}

    public function fight_villain (){
        echo "<br>Im gonna explode all you villains! woosh boogsh bam! ⋆✴︎˚｡⋆";
    }
    
    public function save_people (){
        echo "<br>Fear not for I am here! ᕙ( •̀ ᗜ •́ )ᕗ";
    }
}

$kaachan = new hero("Dynamight", "Bakugo Katsuki", "Nitroglycerin Sweat/Explosion", "No.4 Pro Hero");
echo "<p><b>Class #3: Heroes from MHA! (˶ˆᗜˆ˵)</b>";
echo "<br> Hero 1:";
echo "<br> Hero Name: " . $kaachan->heroName;
echo "<br> Real Name: " . $kaachan->realName;
echo "<br> Quirk: " . $kaachan->quirk;
echo "<br> Rank: " . $kaachan->rank;

$kaachan->fight_villain();
echo "<br>";

$deku = new hero("Deku", "Midoriya Izuku", "Quirkless/Power Suit", "No.3 Pro Hero");
echo "<p> Hero 2:";
echo "<br> Hero Name: " . $deku->heroName;
echo "<br> Real Name: " . $deku->realName;
echo "<br> Quirk: " . $deku->quirk;
echo "<br> Rank: " . $deku->rank;

$deku->save_people();
echo "<br>";

# ☆★☆★☆★☆☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆☆★☆★☆★☆☆★☆★☆★☆☆★☆★☆★☆  

# 4th Class: My cats meow meow /ᐠ˵- ⩊ -˵マ
class cat {
    public $name;
    public $age;
    public $breed;
    public $isHungry = true;
    public $personality;

    public function __construct($name, $age, $breed, $IsHungry, $personality) {
        $this->name = $name;
        $this->age = $age;
        $this->breed = $breed;
        $this->isHungry = $IsHungry;
        $this->personality = $personality;
    }

    public function meow (){
        echo "<br>Meowwwwwwwwww! ≽^-⩊-^≼";
    }

    public function purr (){
        echo "<br>Purrrrrrrrrrrr! /ᐠ ◞ ᆺ ◟マ";
    }
 
    public function hungry(){
        if(!$this->isHungry){
            $this->meow = true;
            echo "<br> The cat is meowing";
        } else {
            echo "<br> The cat is NOT meowing";
        }
    }
}

$callisto = new cat("Callisto", "2 years old", "Tilapia cat", true, "Nonchalant");
echo "<p><b>Class #4: My Cats! meow meow /ᐠ˵- ⩊ -˵マ</b>";
echo "<br> Cat 1:";
echo "<br> Name: " . $callisto->name;
echo "<br> Age: " . $callisto->age;
echo "<br> Breed: " . $callisto->breed;
echo "<br> Is the cat Hungry? " . ($callisto->isHungry ? "Yes" : "No");
echo "<br> Personality: " . $callisto->personality;

$Nana = new cat("Nana", "8 months", "Siamese", false, "Playful");
echo "<p> Cat 2:";
echo "<br> Name: " . $Nana->name;
echo "<br> Age: " . $Nana->age;
echo "<br> Breed: " . $Nana->breed;
echo "<br> Is the cat Hungry? " . ($Nana->isHungry ? "Yes" : "No");
echo "<br> Personality: " . $Nana->personality;

# ☆★☆★☆★☆☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆☆★☆★☆★☆☆★☆★☆★☆☆★☆★☆★☆

# 5th Class: Death Note (°ロ°) !
class deathNote {
    public $owner;
    public $newOwner;
    public $color;
    public $size;
    public $material;
    public $name;

    public function __construct($owner, $color, $size, $material) {
        $this->owner = $owner;
        $this->color = $color;
        $this->size = $size;
        $this->material = $material;
    }

    public function write_name ($name){
        echo "<br>The name " . $name . " has been written in the Death Note. (☉_☉)";
    }

    public function get_caught ($name){
        echo "<br>uh oh! " . $this->owner . " got caught by L! better luck next time (O_O)!";
    }

    public function change_owner ($newOwner){
        $this->newOwner = $newOwner;
        echo "<br>The new owner of the Death Note is " . $newOwner . ".";
    }
}

$light = new deathNote("Light Yagami", "Black", "A4", "Leather");
echo "<p><b>Class #5: Death Note! (°ロ°)!</b>";
echo "<br> Owner: " . $light->owner;
echo "<br> Color: " . $light->color;
echo "<br> Size: " . $light->size;
echo "<br> Material: " . $light->material;

$light->write_name("Teru Mikami");
$light->get_caught("Light Yagami");
$light->change_owner("Misa Amane");
echo "<br> New Owner: " . $light->newOwner . " ദ്ദി(•̀ ᗜ <)";

?>