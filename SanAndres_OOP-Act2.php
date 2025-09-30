<?php
echo "<h1>Problem 1: Vehicles</h1>";

class Vehicle {
    public $brand;
    public $year;
    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }
    public function drive() {
        echo "The vehicle is moving.<br>";
    }
}

class Car extends Vehicle {
    public $num_doors;
    public function __construct($brand, $year, $num_doors) {
        $this->brand = $brand;
        $this->year = $year;
        $this->num_doors = $num_doors;
    }
    public function drive() {
        echo "The car is driving on the road.<br>";
    }
}

class Bicycle extends Vehicle {
    public $type;
    public function __construct($brand, $year, $type) {
        $this->brand = $brand;
        $this->year = $year;
        $this->type = $type;
    }
    public function drive() {
        echo "The bicycle is being pedaled.<br>";
    }
}

$car = new Car("Mazda", 1990, 2);
$bike = new Bicycle("BMC", 2022, "Mountain");
$car->drive();
$bike->drive();

#─────────────────────────────── ⋆⋅☆⋅⋆ ───────────────────────────────

echo "<h1>Problem 2: Employees</h1>";

class Employee {
    public $name;
    public $salary;
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function work() {
        echo "Employee is working.<br>";
    }
}

class Teacher extends Employee {
    public $subject;
    public function __construct($name, $salary, $subject) {
        $this->name = $name;
        $this->salary = $salary;
        $this->subject = $subject;
    }
    public function work() {
        echo "Teaching {$this->subject}.<br>";
    }
}

class Developer extends Employee {
    public $language;
    public function __construct($name, $salary, $language) {
        $this->name = $name;
        $this->salary = $salary;
        $this->language = $language;
    }
    public function work() {
        echo "Coding in {$this->language}.<br>";
    }
}

$teacher = new Teacher("Shota Aizawa", 30000, "Physics");
$dev = new Developer("Shinso Hitoshi", 40000, "PHP");
$teacher->work();
$dev->work();

#─────────────────────────────── ⋆⋅☆⋅⋆ ───────────────────────────────

echo "<h1>Problem 3: Shapes</h1>";

class Shape {
    public $color;
    public $filled;
    public function __construct($color, $filled) {
        $this->color = $color;
        $this->filled = $filled;
    }
    public function area() {
        echo "Area formula not defined.<br>";
    }
}

class Circle extends Shape {
    public $radius;
    public function __construct($color, $filled, $radius) {
        $this->color = $color;
        $this->filled = $filled;
        $this->radius = $radius;
    }
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    public $length;
    public $width;
    public function __construct($color, $filled, $length, $width) {
        $this->color = $color;
        $this->filled = $filled;
        $this->length = $length;
        $this->width = $width;
    }
    public function area() {
        return $this->length * $this->width;
    }
}

$circle = new Circle("Pink", true, 4);
$rect = new Rectangle("Green", false, 6, 7);
echo "<b>Circle area:</b> " . $circle->area() . "<br>";
echo "<b>Rectangle area:</b> " . $rect->area() . "<br>";

#─────────────────────────────── ⋆⋅☆⋅⋆ ───────────────────────────────

echo "<h1>Problem 4: Bank Accounts</h1>";

class BankAccount {
    public $account_number;
    public $balance;
    public function __construct($account_number, $balance = 0) {
        $this->account_number = $account_number;
        $this->balance = $balance;
    }
    public function deposit($amount) {
        $this->balance += $amount;
        echo "<b>Deposited:</b> $amount | <b>Balance:</b> {$this->balance}<br>";
    }
    public function withdraw($amount) {
        $this->balance -= $amount;
        echo "<b>Withdrew:</b> $amount | <b>Balance:</b> {$this->balance}<br>";
    }
}

class SavingsAccount extends BankAccount {
    public $interest_rate;
    public function __construct($account_number, $balance, $interest_rate) {
        $this->account_number = $account_number;
        $this->balance = $balance;
        $this->interest_rate = $interest_rate;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            echo "Withdrawal denied! Your withdrawal request is more than your balance.<br>";
        } else {
            $this->balance -= $amount;
            echo "<b>Withdrew:</b> $amount | <b>Balance:</b> {$this->balance}<br>";
        }
    }
}

class CheckingAccount extends BankAccount {
    public $overdraft_limit;
    public function __construct($account_number, $balance, $overdraft_limit) {
        $this->account_number = $account_number;
        $this->balance = $balance;
        $this->overdraft_limit = $overdraft_limit;
    }

    public function withdraw($amount) {
        if ($this->balance - $amount < -$this->overdraft_limit) {
            echo "Withdrawal denied! Overdraft is over the limit.<br>";
        } else {
            $this->balance -= $amount;
            echo "<b>Withdrew:</b> $amount | <b>Balance:</b> {$this->balance}<br>";
        }
    }
}

$savings = new SavingsAccount("S001", 1000, 0.03);
$checking = new CheckingAccount("C001", 500, 200);
$savings->deposit(100);
$savings->withdraw(67);
$savings->withdraw(345);
$checking->withdraw(600);
$checking->withdraw(150);

#─────────────────────────────── ⋆⋅☆⋅⋆ ───────────────────────────────

echo "<h1>Problem 5: Animals</h1>";

class Animal {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function makeSound() {
        echo "Some sound...<br>";
    }
}

class Dog extends Animal {
    public function makeSound() { echo "Woof!<br>"; }
}

class Cat extends Animal {
    public function makeSound() { echo "Meow!<br>"; }
}

class Bird extends Animal {
    public function makeSound() { echo "Chirp!<br>"; }
}

$animals = [
    new Dog("Sky", 7),
    new Cat("Callisto", 2),
    new Bird("Tweety", 5)
];

foreach ($animals as $animal) {
    $animal->makeSound();
}

#─────────────────────────────── ⋆⋅☆⋅⋆ ───────────────────────────────


echo "<h1>Problem 6: Online Store Products</h1>";

class Product {
    public $name;
    public $price;
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getDetails() {
        echo "Product details not available.<br>";
    }
}

class Book extends Product {
    public $author;
    public $pages;
    public function __construct($name, $price, $author, $pages) {
        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
        $this->pages = $pages;
    }
    public function getDetails() {
        echo "<b>Book Name:</b> {$this->name}<br>";
        echo "<b>Author:</b> {$this->author}<br>";
        echo "<b>Pages:</b> {$this->pages}<br>";
        echo "<b>Price:</b> {$this->price}<br><br>";
    }
}

class Clothing extends Product {
    public $size;
    public $color;
    public function __construct($name, $price, $size, $color) {
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->color = $color;
    }
    public function getDetails() {
        echo "<b>Clothing Name:</b> {$this->name}<br>";
        echo "<b>Size:</b> {$this->size}<br>";
        echo "<b>Color:</b> {$this->color}<br>";
        echo "<b>Price:</b> {$this->price}<br>";
    }
}

$book = new Book("Notes From Underground", 300, "Fyodor Dostoevsky", 136);
$shirt = new Clothing("Jirai Kei Shirt", 500, "L", "Pink");
$book->getDetails();
$shirt->getDetails();

#─────────────────────────────── ⋆⋅☆⋅⋆ ───────────────────────────────

echo "<h1>Problem 7: University Members</h1>";

class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce() {
        echo "Hello, I’m a person.<br>";
    }
}

class Student extends Person {
    public $major;
    public function __construct($name, $age, $major) {
        $this->name = $name;
        $this->age = $age;
        $this->major = $major;
    }
    public function introduce() {
        echo "I am a student majoring in {$this->major}.<br>";
    }
}

class Professor extends Person {
    public $department;
    public function __construct($name, $age, $department) {
        $this->name = $name;
        $this->age = $age;
        $this->department = $department;
    }
    public function introduce() {
        echo "I am a professor from the {$this->department} department.<br>";
    }
}

$student = new Student("Midoriya Izuku", 17, "Support Course");
$professor = new Professor("Nemuri Kayama", 30, "Modern Hero Studies");
$student->introduce();
$professor->introduce();



?>
