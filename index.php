<?php


use Todo\Models\Task;

interface  TaskStorageInterface
{

    public function get($id);

    public function store(Task $task);
}

class  MySqlDatabaseTaskStorage implements TaskStorageInterface
{

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function store(Task $task)
    {
        // TODO: Implement store() method.
    }
}


class  FileTaskStorage implements TaskStorageInterface
{

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function store(Task $task)
    {
        // TODO: Implement store() method.
    }
}


abstract class  Service
{

    abstract public function getRedirectUrl();
}


class FacebookService extends Service
{

    public function getRedirectUrl()
    {
        return 'uri';
    }
}

class TwitterService extends Service
{

    public function getRedirectUrl()
    {
        return 'uri';
    }
}

class GoogleService extends Service
{

    public function getRedirectUrl()
    {
        return 'uri';
    }
}


class Calculator
{
    protected $total = 0;

    public function add(array $values)
    {

        foreach ($values as $value) {
            $this->total += $value;
        }

    }

    public function total()
    {
        return $this->total;
    }
}

$calculator = new Calculator();

$calculator->add([7, 8, 9]);


interface  ItemInterface{

    public  function setCost(float  $cost);
    public  function getCost();
}

class  Item implements  ItemInterface
{
    protected $cost = 0;

    public function setCost(float $cost)
    {

        $this->cost = $cost;
    }


    public function getCost()
    {

        return $this->cost;
    }


}


class  Cart
{

    protected $items = [];

    public function add(ItemInterface $item)
    {

        $this->items[] = $item;
    }

    public function total()
    {
        $total = 0;

        foreach ($this->items as $item) {

            $total = $total+ $item->getcost();
        }
        return $total;
    }
}


$item1 = new Item();

$item1->setCost(80);

$item2 = new Item();

$item2->setCost(180);


$cart = new Cart();

$cart->add($item1);
$cart->add($item2);

echo  $cart->total();

