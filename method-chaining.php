<?php


class SearchRequest
{

    protected $query;
    protected $limit;

    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    public function setLimit($limit = 100)
    {
        $this->limit = $limit;
        return $this;
    }


    public function getQuery()
    {
        return $this->query;
    }

    public function getLimit()
    {
        return $this->limit;
    }

}


class SearchService
{

    public function search(SearchRequest $searchRequest)
    {
             var_dump($searchRequest);
    }

}

$service = new SearchService();
$request = new SearchRequest;

$request->setQuery("select * from users");
$request->setLimit(200);
$service->search($request);