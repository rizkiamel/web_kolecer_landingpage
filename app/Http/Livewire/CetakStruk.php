<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;
use Livewire\WithPagination;
use PDF;

class CetakStruk extends Component
{

    /**
     * The read function
     * 
     * @return void
     */
    public function read()
    {
        return Page::paginate(5);
    }

    public function createPDF(){
        //retrieve all records from db 
        $data = Page::all();
        //share data to view
        //view()->share('admin.cetak', $this->dataaa);
        $pdf = PDF::loadView('admin.cetak', ['data' => $data])->setOptions(['defaultFont' => 'sans-serif'])->output();
        //$pdf = PDF::loadView('admin.cetak', ['data' => $data])->setPaper('A4', 'portrait')->stream();
        //download PDF file with download method
        return response()->streamDownload(fn()=>print($pdf), "test1.pdf");
    }

    public function render()
    {
        return view('livewire.cetak-struk', [
            'data' => $this->read(),
        ]);
    }
}
