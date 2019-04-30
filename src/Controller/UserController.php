<?php
/**
 * @file
 * Boldizsar\RabIT\Controller\UserController;
 */
namespace Boldizsar\RabIT\Controller;

use Boldizsar\RabIT\Model\User;

Class UserController {

    /** @var string $template */
    protected $template;

    /** @var User $user */
    public $user;

    /**
     * Class constructor
     */
    public function __construct($template)
    {
        $this->user = new User();
        $this->template = $template;
    }

    /**
     * Return a template
     */
    public function render()
    {
        $title = 'Users';
        $list = $this->user->fetchAll();
        $routes = ['Home' => '/'];

        include $this->template;
        return;
    }
}