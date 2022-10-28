<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $formCat =[
        'nombre' =>'required|min_length[3]|max_length[255]',
        'descripcion' =>'required|min_length[3]|max_length[255]',
    ];
    public $formVentas =[
        'id' =>'required|integer|min_length[1]|max_length[1]',
        'cantidad' =>'required|integer|min_length[1]|max_length[10]',
    ];

    public $formProd =[
        'nombre' =>'required|min_length[3]|max_length[255]',
        'referencia' =>'required|min_length[1]|max_length[10]',
        'precio' =>'required|min_length[1]|max_length[10]',
        'peso' =>'required|min_length[1]|max_length[10]',
        'categoria' =>'required|min_length[1]|max_length[10]',
        'stock' =>'required|min_length[1]|max_length[10]',
    ];


    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
}
