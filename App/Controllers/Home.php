<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 * 
 * PHP version 7.4
 */
class Home extends \Core\Controller
{
    /**
     * Before filter
     * 
     * @return void
     */
    protected function before()
    {
        echo "(before)";
    }

    /**
     * After filter
     * 
     * @return void
     */
    protected function after()
    {
        echo "(after)";
    }
    /**
     * Show the index page
     * 
     * @return void
     */
    public function indexAction()
    {
        // echo ' Hello from the index action in the Home controller! ';
        // View::render('Home/index.php', [
        //     'name'    => 'Dave',
        //     'colours' => ['red', 'green', 'blue']
        // ]);
        View::renderTemplate('Home/index.html', [
            'name'    => 'Brandon',
            'hobbies' => ['Basketball', 'informatic', 'CrossFit']
        ]);
    }
}
