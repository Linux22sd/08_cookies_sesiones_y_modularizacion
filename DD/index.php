<?php
require "./vendor/autoload.php";

class Usuario {
    protected $name;
    protected $cursos= [];

    function __construct(string $name){
        $this->name = $name;

        for($i=0; $i<4; $i++){
            $this->cursos[$i] = new Curso();
        }
    }
}


class Curso{
    protected $nivel = 4;
    protected $description = 'PHP';

    public function getInfo() : string{
        return $this->description;
    }
}

$cursosDisponibles = [
    'backend' => 'PHP',
    'frontend' => [
        'area1' => 'JavaScript',
        'area2' => 'HTML',
        'area3' => 'CSS'
    ],

    'cursos' => [
        new Usuario('Luis'),
        new Usuario('Pedro'),
        new Usuario('Juan')
    ]
];

// echo "<pre>";
// print_r($cursosDisponibles);
// echo "</pre>";

dd($cursosDisponibles);


?>