<?php 
abstract class ProductUser {
    protected $name;
    protected $price;
    protected $rating;
    protected $login;
    protected $password;

    public function __construct($name, $price, $rating, $login, $password) {
        $this->name = $name;
        $this->price = $price;
        $this->rating = $rating;
        $this->login = $login;
        $this->password = $password;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    abstract public function purchase();
}

class Book extends ProductUser {
    public function purchase() {
        echo $this->getLogin() . " купил книгу \"" . $this->getName() . "\" за " . $this->getPrice() . " рублей.<br>";
    }
}

class Movie extends ProductUser {
    public function purchase() {
        echo $this->getLogin() . " купил фильм \"" . $this->getName() . "\" за " . $this->getPrice() . " рублей.<br>";
    }
}

class Music extends ProductUser {
    public function purchase() {
        echo $this->getLogin() . " купил музыку \"" . $this->getName() . "\" за " . $this->getPrice() . " рублей.<br>";
    }
}

$book = new Book("The Catcher in the Rye", 350, 4.5, "customer", "456");
$movie = new Movie("The Godfather", 480, 5, "admin", "123");
$music = new Music("Abbey Road", 65, 4.8, "guest", "");

$book->purchase();
$movie->purchase(); 
$music->purchase(); 
?>