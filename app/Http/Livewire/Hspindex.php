<?php

namespace App\Http\Livewire;
use App\Models\hsp;
use Livewire\Component;
use Livewire\WithPagination;


class Hspindex extends Component
{
    use WithPagination;

    public $busqueda=''; 
    public $paginacion=10; //->>>>> interes para el manual
    protected $paginationTheme ='bootstrap';
    protected $queryString= 
    [
        'busqueda' => ['except' => ''],
        'paginacion' => ['except' => 10],
    ];

    public function render()
    {
        $mediciones=$this->consulta();
        $mediciones = $mediciones->paginate($this-> paginacion);
        
        if($mediciones->currentPage() >$mediciones->lastPage()  )
        {
            $this->resetPage();
            $mediciones=$this->consulta();
            $mediciones = $mediciones->paginate($this-> paginacion);

 
        }

        $params=[
            'mediciones' => $mediciones,
        ];
        return view('livewire.hspindex', $params);
    }

    private function consulta()
    {
        $query =hsp::orderByDesc('id');
        if($this->busqueda != ''){
            $query -> where('hsp', 'LIKE', '%'.$this->busqueda.'%' );
        }
        return $query;

    }
}
