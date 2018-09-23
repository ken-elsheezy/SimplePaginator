<?php

namespace SimplePaginator;

interface SimplePaginatorInterface{

    public function totalRecords();

    public function currentPage();

    public function contentsPerPage();

    public function startFrom();

    public function recordsForCurrentPage();

    public function totalPages();

}