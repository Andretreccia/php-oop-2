<?php
/* Provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... */

/* $c = new CreditCard(..); 
$user->insertCreditCard($c); */

class User
{
    public  $username;
    protected $name;
    protected $surname;
    protected $email;
    protected $address;
    protected $password;

    function __construct(string $username, string $name, string $surname, string $email, string $address, string $password)
    {
        $this->username = $username;
        $this->name =  $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->address = $address;
        $this->password = $password;
    }

    public function insertCreditCard($pippo)
    {
        $this->creditCard = $pippo;
    }
}

class Product
{
    public $name;
    public $category;
    public $price;
    private $stock;
}

class CreditCard
{
    protected $number;
    protected $ccv;
    protected $espiration;

    function __construct(int $number, int $ccv, string $espiration)
    {
        $this->number = $number;
        $this->ccv = $ccv;
        $this->espiration = $espiration;
    }
}

class UserPremium extends User
{
    protected $discount;
    protected $fastShip;

    function __construct(int $discount, bool $fastShip, string $username, string $name, string $surname,  string $email, string $address, string $password)
    {
        parent::__construct($username, $name, $surname, $email, $address, $password);
        $this->discount = $discount;
        $this->fastShip = $fastShip;
    }
}


$user = new User('Andreatreccia', 'Andrea', 'Bellatreccia', 'pippo@peppe.it', 'via qualcosa 1', 'lamiapasswordsicura');

var_dump($user);
$creditCard = new CreditCard(12345678990, 555, '01/12/2012');

$user->insertCreditCard($creditCard);

var_dump($user);
/* class payment extends User{

} */