<?php

class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
    public function info()
    {
        echo "Name $this->name<br>" . PHP_EOL;
        echo "Price $this->price<br>" . PHP_EOL;
        echo "<br>";
    }
}

class ProductDummy extends Product
{

    public function info()
    {
        echo "Name $this->name<br>" . PHP_EOL;
        echo "Price $this->price<br>" . PHP_EOL;
    }

}