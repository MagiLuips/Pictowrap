<?php
    class Forum extends Controller {
        function __construct() {
            parent::__construct();
        }
        function render() {
            //if (isset($this -> user)) {
            //   $this -> view -> render('forum', [
            //        'user' => $this -> user
            //    ]);
            //} else {
                $this -> view -> render('forum');
            //}
        }
    } 

?>