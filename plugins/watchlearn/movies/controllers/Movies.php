<?php namespace Watchlearn\Movies\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;

class Movies extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
        'Backend\Behaviors\RelationController'
        ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'relation_config.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Watchlearn.Movies', 'main-menu-item');
    }
}
