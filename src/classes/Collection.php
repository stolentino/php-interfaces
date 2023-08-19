<?php

class Collection implements CollectionInterface{
    protected $repo;
    public $collection;

    public function __construct(RepositoryInterface $repo, $id = null, $field = 'id'){
        $this->repo = $repo;
        if(!empty($id)){
            $this->collection = $this->repo->find('posts', $id, $field);
        }else{
            $this->collection = $this->repo->all('posts');
        }
    }

    public function shortDescription(){
        if(strlen($this->current()->details) < 510){
            return strip_tags($this->current()->details);
        }

        return strip_tags(
            substr(
                $this->current()->details,
                0,
                strpos($this->current()->details, ' ', 500)
            )
        ) . '...';
    }

    public function current(){
        //var_dump(__METHOD__);
        return current($this->collection);
    }
    public function key(){
        //var_dump(__METHOD__);
        return key($this->collection);
    }
    public function next(){
        //var_dump(__METHOD__);
        return next($this->collection);
    }
    public function rewind(){
        //var_dump(__METHOD__);
        return reset($this->collection);
    }
    public function valid(){
        //var_dump(__METHOD__);
        return key($this->collection) !== null;
    }
    public function count(){
        //var_dump(__METHOD__);
        return count($this->collection);
    }
}