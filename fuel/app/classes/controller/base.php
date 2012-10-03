<?php

class Controller_Base extends Controller_Template
{

	public $template = 'windows';

	 /**
     * Your before method
     */
    public function before()
    {
        parent::before(); // Without this line, templating won't work!

        // do stuff
    }

    /**
     * Make after() compatible with Controller_Template by adding $response as a parameter
     */
    public function after($response)
    {
        $response = parent::after($response); // not needed if you create your own response object

        // do stuff

        return $response; // make sure after() returns the response object
    }
}
