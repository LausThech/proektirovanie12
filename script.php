<?php

interface product
{
function name();
function price();
function rating();
}


interface user
{
function login();
function password();
}


class TV implements product
{
public $name;
public $price;
public $rating;
function __construct($name, $price, $rating)
{
$this->name = $name;
$this->price = $price;
$this->rating = $rating;
}
function name()
{
return $this->name;
}
function price()
{
return $this->price;
}
function rating()
{
return $this->rating;
}
}


class laptop implements product
{
public $name;
public $price;
public $rating;
function __construct($name, $price, $rating)
{
$this->name = $name;
$this->price = $price;
$this->rating = $rating;
}
function name()
{
return $this->name;
}
function price()
{
return $this->price;
}
function rating()
{
return $this->rating;
}
}


class telephone implements product
{
public $name;
public $price;
public $rating;
function __construct($name, $price, $rating)
{
$this->name = $name;
$this->price = $price;
$this->rating = $rating;
}
function name()
{
return $this->name;
}
function price()
{
return $this->price;
}
function rating()
{
return $this->rating;
}
}

class admin implements user
{
public $login;
public $password;
function __construct($login, $password)
{
$this->login = $login;
$this->password = $password;
}
function login()
{
return $this->login;
}
function password()
{
return $this->password;
}

}


class moderator implements user
{
public $login;
public $password;
function __construct($login, $password)
{
$this->login = $login;
$this->password = $password;
}
function login()
{
return $this->login;
}
function password()
{
return $this->password;
}
}


class userWR implements user
{
public $login;
public $password;
function __construct($login, $password)
{
$this->login = $login;
$this->password = $password;
}
function login()
{
return $this->login;
}
function password()
{
return $this->password;
}
}


class accounting implements product,user
{
public $name;
public $price;
public $rating;
public $login;
public $password;
function __construct($login,$password , $name, $price, $rating)
{
$this->name = $name;
$this->price = $price;
$this->rating = $rating;
$this->login = $login;
$this->password = $password;
}
function user()
{
echo "Покупающий пользователь: ".$this->login."<br>";
}
function name()
{
echo "Покупаемый предмет: ".$this->name."<br>";
}
function price()
{
echo "Цена: ".$this->price."<br>";
}
function rating()
{
echo "Рейтинг: ".$this->rating."<br>";
}
function login()
{
echo "Логин: ".$this->login."<br>";
}
function password()
{
echo "Пароль: ".$this->password;
}

}
$TV = new TV("Телевизор","23000","4.5");
$laptop = new laptop("Ноутбук","15000","4.8");
$telephone = new telephone("Телефон","12000","4.4");
$admin = new admin("Tom","admin");
$moderator = new moderator("Bob","123456");
$userWR = new userWR("Sam","qwerty");


if($_POST['name'] == $laptop->name() && $_POST['password']==$admin->password() && $_POST['login']== $admin->login())
{
$deal = new accounting($admin->login(), $admin->password(), $laptop->name(), $laptop->price(), $laptop->rating());
$deal->name(); $deal->price(); $deal->rating(); $deal->login(); $deal->password(); 
}


if($_POST['name'] == $laptop->name() && $_POST['password']==$moderator->password() && $_POST['login']== $moderator->login())
{
$deal = new accounting($moderator->login(), $moderator->password(), $laptop->name(), $laptop->price(), $laptop->rating());
$deal->name(); $deal->price(); $deal->rating(); $deal->login(); $deal->password(); 
}


if($_POST['name'] == $laptop->name() && $_POST['password']==$userWR->password() && $_POST['login']== $userWR->login())
{
$deal = new accounting($userWR->login(), $userWR->password(), $laptop->name(), $laptop->price(), $laptop->rating());
$deal->name(); $deal->price(); $deal->rating(); $deal->login(); $deal->password(); 
}


if($_POST['name'] == $TV->name() && $_POST['password']==$admin->password() && $_POST['login']== $admin->login())
{
$deal = new accounting($admin->login(), $admin->password(), $TV->name(), $TV->price(), $TV->rating());
$deal->name(); $deal->price(); $deal->rating(); $deal->login(); $deal->password(); 
}


if($_POST['name'] == $TV->name() && $_POST['password']==$moderator->password() && $_POST['login']== $moderator->login())
{
$deal = new accounting($moderator->login(), $moderator->password(), $TV->name(), $TV->price(), $TV->rating());
$deal->name(); $deal->price(); $deal->rating(); $deal->login(); $deal->password(); 
}


if($_POST['name'] == $TV->name() && $_POST['password']==$userWR->password() && $_POST['login']== $userWR->login())
{
$deal = new accounting($userWR->login(), $userWR->password(), $TV->name(), $TV->price(), $TV->rating());
$deal->name(); $deal->price(); $deal->rating(); $deal->login(); $deal->password(); 
}


if($_POST['name'] == $telephone->name() && $_POST['password']==$admin->password() && $_POST['login']== $admin->login())
{
$deal = new accounting($admin->login(), $admin->password(), $telephone->name(), $telephone->price(), $telephone->rating());
$deal->name(); $deal->price(); $deal->rating(); $deal->login(); $deal->password();
}

if($_POST['name'] == $telephone->name() && $_POST['password']==$moderator->password() && $_POST['login']== $moderator->login())
{
$deal = new accounting($moderator->login(), $moderator->password(), $telephone->name(), $telephone->price(), $telephone->rating());
$deal->name(); $deal->price(); $deal->rating(); $deal->login(); $deal->password(); 
}


if($_POST['name'] == $telephone->name() && $_POST['password']==$userWR->password() && $_POST['login']== $admin->login())
{
$deal = new accounting($userWR->login(), $userWR->password(), $telephone->name(), $telephone->price(), $telephone->rating());
$deal->name(); $deal->price(); $deal->rating(); $deal->login(); $deal->password(); 
}

?>