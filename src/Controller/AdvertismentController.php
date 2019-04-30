<?php
/**
 * @file
 * Boldizsar\RabIT\Controller\AdvertismentController;
 */
namespace Boldizsar\RabIT\Controller;

use Boldizsar\RabIT\Model\Advertisment;

Class AdvertismentController {

    /** @var string $template */
    protected $template;

    /** @var Advertisment $advertisment */
    public $advertisment;

    /**
     * Class constructor
     */
    public function __construct($template)
    {
        $this->advertisment = new Advertisment();
        $this->template = $template;
    }

    /**
     * Return a template
     */
    public function render()
    {
        $title = 'Advertisments';
        $list = $this->advertisment->fetchAll();
        $routes = ['Home' => '/'];

        include $this->template;
        return;
    }
}