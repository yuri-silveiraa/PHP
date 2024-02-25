<?php

class Post // classe
{
    private $id;

    private $likes;

    private $comments = [];

    private $autor;

    public function __construct($qtLikes)
    {
        $this->likes = $qtLikes;
    }

    public function aumentarLikes()
    {
        $this->likes++;
    }

    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    public function getLikes()
    {
        return $this->likes;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}

$post1 = new Post(6);  // objeto

$post1->aumentarLikes();
echo $post1->getLikes();

class Foto extends Post
{
    private $url;

    public function __construct()
    {
        $this->getId();
    }

    public function getUrl()
    {
        return $this->url;
    }
}
$foto = new Foto();
$foto->setId(2);
echo "\n".'Id da foto: '.$foto->getId();

interface Forma
{
    public function getTipo();

    public function getArea();
}

class Quadrado implements Forma
{
    private int $altura;

    private int $largura;

    public function __construct(int $a, int $l)
    {
        $this->altura = $a;
        $this->largura = $l;
    }

    public function getTipo()
    {
        return 'quadrado';
    }

    public function getArea()
    {
        return $this->altura * $this->largura;
    }
}

class Circulo implements Forma
{
    private int $raio;

    public function __construct(int $r)
    {
        $this->raio = $r;
    }

    public function getTipo()
    {
        return 'Circulo';
    }

    public function getArea()
    {
        return "\n".($this->raio ^ 2) * pi();
    }
}
$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(4);

$objetos = [
    $quadrado,
    $circulo,
];

foreach ($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();

    echo "\n".'area: '.$area.' tipo: '.$tipo;
}
