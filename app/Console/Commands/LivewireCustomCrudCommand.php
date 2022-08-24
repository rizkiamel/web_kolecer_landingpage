<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;

class LivewireCustomCrudCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:livewire:crud {nameOfTheClass? : The name of the class}, 
    {nameOfTheModelClass? : The name of the model class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a custom livewire CRUD';

    /****
     * Our Costume class properties here
     */
    protected $nameOfTheClass;
    protected $nameOfTheModelClass;
    protected $file;

    /**
     * Create a new command here
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->file = new Filesystem();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //Gather all parameters
        $this->gatherParameters();
        //Generate the livewire class file
        $this->generateLivewireCrudClassFile();
        //Generate the livewire view file
        $this->generateLivewireCrudViewFile();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function gatherParameters(){
        $this->nameOfTheClass = $this->argument('nameOfTheClass');
        $this->nameOfTheModelClass = $this->argument('nameOfTheModelClass');

        //if you didn't input the name of the class
        if(!$this->nameOfTheClass){
            $this->nameOfTheClass = $this->ask('Enter class name');
        }

        //if you didn't input the name of the class
        if(!$this->nameOfTheModelClass){
            $this->nameOfTheModelClass = $this->ask('Enter model name');
        }

        //convert to studly case
        $this->nameOfTheClass = Str::studly($this->nameOfTheClass);
        $this->nameOfTheModelClass = Str::studly($this->nameOfTheModelClass);

        $this->info($this->nameOfTheClass. ' ' .$this->nameOfTheModelClass);
    }

    /**
     * Generates the crud class file
     *
     * @return void
     */
    protected function generateLivewireCrudClassFile(){
        //set the origin and destination for the livewire class file
        $fileOrigin = base_path('/stubs/custom.livewire.crud.stub');
        $fileDestination =  base_path('/app/Http/Livewire/'.$this->nameOfTheClass.'.php');

        if($this->file->exists($fileDestination)){
            $this->info('This class file already exists: '.$this->nameOfTheClass.'.php');
            $this->info('Aborting class file creation');
            return false;
        }

        //Get the original content of the file
        $fileOriginalString = $this->file->get($fileOrigin);

        //Replace the strings specified in the array sequentially
        $replaceFileOriginalString = Str::replaceArray('{{}}', 
            [
                $this->nameOfTheModelClass, //Name of the model class
                $this->nameOfTheClass, // Name of the class
                $this->nameOfTheModelClass, //Name of the model class
                $this->nameOfTheModelClass, //Name of the model class
                $this->nameOfTheModelClass, //Name of the model class
                $this->nameOfTheModelClass, //Name of the model class
                $this->nameOfTheModelClass, //Name of the model class
                Str::kebab($this->nameOfTheClass) // From "Foobar" to "foo-bar"
            ],
            $fileOriginalString
        );

        //put the content into the destination directory
        $this->file->put($fileDestination, $replaceFileOriginalString);
        $this->info('Livewire class field created: '.$fileDestination);
    }

    protected function generateLivewireCrudViewFile(){
        //set the origin and destination for the livewire class file
        $fileOrigin = base_path('/stubs/custom.livewire.crud.view.stub');
        $fileDestination =  base_path('/resources/views/livewire/'.Str::kebab($this->nameOfTheClass).'.blade.php');

        if($this->file->exists($fileDestination)){
            $this->info('This view file already exists: '.Str::kebab($this->nameOfTheClass).'.php');
            return false;
            $this->info('Aborting view file creation');
            return false;
        }
        
        //Copy file to destination
        $this->file->copy($fileOrigin, $fileDestination);
        $this->info('Livewire view file created: '. $fileDestination);

    }
}
