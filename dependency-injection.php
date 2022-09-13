<?php


class TwitterClient{

    public  function getTweets($handle){

        return[
          'this is a tweet',
            'Another Tweet'
        ];
    }
}

class  Paginator{

}


class TwitterManager{

    protected  $twitterClient;
    protected $paginator;

    public function __construct(TwitterClient  $twitterClient,Paginator $paginator)
    {
        $this->twitterClient=$twitterClient;
        $this->paginator=$paginator;
    }

    public  function  getTweetsByUser(){

    }
    public  function getHandle($handle){
        return $this->paginator->paginate( $this->twitterClient->getTweets($handle),10);
    }
}




$twitterClient=new TwitterClient();

$paginator=new Paginator();
$twitterManager=new TwitterManager($twitterClient,$paginator);

echo  $twitterManager->getHandle('ahmed');

