<?php 

    namespace App\Http\Livewire;

    use App\Models\User;
    use App\Models\Telepon;
    use Livewire\Component;
    use Livewire\WithPagination;

    class Users extends Component{
        use WithPagination;
        public $modalFormVisible;
        public $modalConfirmDeleteVisible;
        public $modelId;
        public $name;
        public $email;
        public $role;
        public $phone;

        /**
        *   Put yout custom public property here!
        */

        /**
        * The validation rules
        * 
        * @return void
        */
        public function rules()
        {
            return[
                'name' => 'required',
                'email' => 'required',
                'role' => 'required',
            ];
        }

        /**
        * Loads the model data 
        * of this component
        * 
        * @return void
        */
        public function loadModel(){
            $data = User::find($this->modelId);
            //Assign the vaiables here
            $this->name = $data->name;
            $this->email = $data->email;
            $this->role = $data->role;
            $this->phone = $data->nomor_telepon;
        }

        /**
        * The data for the model mapped
        * in this component
        * 
        * @return void
        */
        public function modelData(){
            return[
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->role,
            ];
        }

        /**
        * The create function
        * 
        * @return void
        */
        public function create(){
            $this->validate();
            User::create($this->modelData());
            $this->modalFormVisible = false;
            $this->reset();
        }

        /**
        * The read function
        * 
        * @return void
        */
        public function read()
        {
            return User::paginate(5);
        }

        /**
        * The update function
        * 
        * @return void
        */
        public function update(){
            $this->validate();
            User::find($this->modelId)->update($this->modelData());
            $this->modalFormVisible = false;
        }

        /**
        * The delete function
        * 
        * @return void
        */
        public function delete(){
            User::destroy($this->modelId);
            $this->modalConfirmDeleteVisible = false;
            $this->resetPage();
        }
        
        /**
        * Show the create modal
        * 
        * @return void
        */
        public function createShowModal()
        {
            $this->resetValidation();
            $this->reset();
            $this->modalFormVisible = true;
        }

        /**
        * Show the form modal 
        * in update mode
        * 
        * @return void
        */
        public function updateShowModal($id)
        {
            $this->resetValidation();
            $this->reset();
            $this->modalFormVisible = true;
            $this->modelId = $id;
            $this->loadModel();
        }

        /**
        * Show the delete confirmation modal
        * 
        * @return void
        */
        public function deleteShowModal($id)
        {
            $this->modelId = $id;
            $this->modalConfirmDeleteVisible = true;
        }

        public function render()
        {
            $telepon = Telepon::where('id_users', true);
            $data = User::find(3)->get();

            return view('livewire.users', [
                'data' => $data,
                'telepon' => $telepon,
            ]);
        }
    }        
