<?php

namespace SimplePaginator;

use SimplePaginator\SimplePaginatorInterface;

class SimplePaginator implements SimplePaginatorInterface{

    private $totalRecords;
    private $currentPage;
    private $contentsPerPage;

    public function __construct($totalRecords, $currentPage = 1, $contentsPerPage){

        $this->totalRecords = $totalRecords;
        $this->currentPage =  $currentPage;
        $this->contentsPerPage = $contentsPerPage;
    }

    public function totalRecords(){
        return $this->totalRecords;
    }

    public function currentPage(){
        return $this->currentPage;
    }

    public function contentsPerPage(){
        return $this->contentsPerPage;
    }

    public function startFrom(){

        return ($this->currentPage - 1) * $this->contentsPerPage;
    }

    public function recordsForCurrentPage(){
        if(($this->startFrom() + $this->contentsPerPage()) > $this->totalRecords){
            return $this->totalRecords - $this->startFrom();
        }
        return $this->contentsPerPage;
    }

    public function totalPages(){
        return ceil($this->totalRecords/$this->contentsPerPage);
    }

}