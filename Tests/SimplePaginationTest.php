<?php

use SimplePaginator\SimplePaginator;

class SimplePaginationTest extends PHPUnit_Framework_TestCase{

    /** @test */
    function total_records_can_be_determined(){
        $simplePaginator = new SimplePaginator(80,3, 10);

        $this->assertEquals(80, $simplePaginator->totalRecords());
    }

    /** @test */
    function current_page_can_be_determined(){
        $simplePaginator = new SimplePaginator(80,3, 10);

        $this->assertEquals(3, $simplePaginator->currentPage());
    }


    /** @test */
    function contents_per_page_can_be_determined(){
        $simplePaginator = new SimplePaginator(80,3, 10);

        $this->assertEquals(10, $simplePaginator->contentsPerPage());
    }


    /** @test */
    function we_can_determine_the_exact_number_of_records_for_a_given_page(){

        $simplePaginator = new SimplePaginator(83,9, 10);

        $this->assertEquals(3, $simplePaginator->recordsForCurrentPage());
    }



}