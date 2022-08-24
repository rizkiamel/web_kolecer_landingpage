<?php 

    namespace App\Http\Livewire;

    use App\Models\Harga;
    use Livewire\Component;
    use Livewire\WithPagination;
    use Notification;
    use App\Notifications\OffersNotification;
    use Illuminate\Support\Facades\Auth;

    class Hargas extends Component{
        use WithPagination;
        public $modalFormVisible;
        public $modalConfirmDeleteVisible;
        public $modelId;

        /**
        *   Put yout custom public property here!
        */
        public $packageName;
        public $price;
        public $renewalFee;

        /**
        * The validation rules
        * 
        * @return void
        */
        public function rules()
        {
            return[
                'packageName' => 'required',
                'price' => 'required',
                'renewalFee' => 'required',
            ];
        }

        /**
        * Loads the model data 
        * of this component
        * 
        * @return void
        */
        public function loadModel(){
            $data = Harga::find($this->modelId);
            //Assign the vaiables here
            $this->packageName = $data->package_name;
            $this->price = $data->price;
            $this->renewalFee = $data->renewal_fee;
        }

        /**
        * The data for the model mapped
        * in this component
        * 
        * @return void
        */
        public function modelData(){
            return[
                'package_name' => $this->packageName,
                'price' => $this->price,
                'renewal_fee' => $this->renewalFee,
            ];
        }

        /**
        * The create function
        * 
        * @return void
        */
        public function create(){
            $this->validate();
            Harga::create($this->modelData());
            $this->modalFormVisible = false;
            $this->reset();
            
            $userSchema = Auth::user();
            $offerData = [
                'user' => Auth::user(),
                'text' => 'Berhasil membuat page baru!',
            ];

            Notification::send($userSchema, new OffersNotification($offerData));
        }

        /**
        * The read function
        * 
        * @return void
        */
        public function read()
        {
            return Harga::paginate(5);
        }

        /**
        * The update function
        * 
        * @return void
        */
        public function update(){
            $this->validate();
            Harga::find($this->modelId)->update($this->modelData());
            $this->modalFormVisible = false;
        }

        /**
        * The delete function
        * 
        * @return void
        */
        public function delete(){
            Harga::destroy($this->modelId);
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
        public function updateShowModal($id){
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
        public function deleteShowModal($id){
            $this->modelId = $id;
            $this->modalConfirmDeleteVisible = true;
        }

        public function render()
        {
            return view('livewire.hargas', [
                'data' => $this->read(),
            ]);
        }
    }        
