<?php


interface  AuthenticatableInterface
{

    public function getPassword();

    public function setPassword($password);

}


trait  Authenticatable
{


    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public function setPassword($password)
    {
        // TODO: Implement setPassword() method.
    }
}

class  User implements AuthenticatableInterface
{
    use Authenticatable;
}

class  Admin implements AuthenticatableInterface
{

    use Authenticatable;
}

