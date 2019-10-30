<?php

class Missing extends Controller {
    function __construct() {
        parent::__construct();
        echo 'File Not Found';

        $this->view->msg = 'That page does not exist.';
        $this->view->render('missing/index');
    }
}

?>