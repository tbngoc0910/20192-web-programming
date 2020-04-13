<?php
    Class Page{
        private $page;
        private $title;
        private $year;
        private $copyright;
        
        function __construct($title, $year,$copyright) {
            $this->title = $title;
            $this->year = $year;
            $this->copyright = $copyright;
            $this->addHeader();
        }


        private function addHeader() {
            $this->page = "<header><h1>".$this->title."</h1></header>";
        }
        public function addContent($content){
            $this->page = $this->page."<div><p>".$content."</p></div>";
        }
        private function addFooter() {
            $this->page = $this->page."<footer><div>
                 	&copy".$this->year." ".$this->copyright
                       ."</div></footer>";
        }
        public function get(){
            $this->addFooter();
            return $this->page;
        }
    }
