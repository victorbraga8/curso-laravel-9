<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $model;
    
    public function __construct(User $user)
    {   
        $this->model = $user;    
    }

    public function index(Request $request){

        // $users = User::where('name', 'LIKE', "%{$request->search}%")->get();        
        $search = $request->search;
        // $users = $this->model->getUsers(search: $request->get('search', ''));                          
        $users = $this->model->getUsers($search);
 
        return view('users.index', ['users'=> $users]);
    }

    public function show($id){
        // $user = User::where('id'[], $id)->first();
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }
        return view('users.show', ['users'=> $user]);
    }

    public function create(){

        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request){
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = $this->model->create($data);

        return redirect()->route('users.index');
        // return redirect()->route('users.show', $user->id);
    }

    public function edit($id){
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }else{
            return view('users/edit', ['user'=>$user]);
        }
    }

    public function update(StoreUpdateUserFormRequest $request, $id){
        
        // $data = $request->all();
        // $data['password'] = bcrypt($data['password']);
        // $user = User::create($data);
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');    
        }else{
            $data = $request->only('name','email');
            
            if($request->password){
                $data['password'] = bcrypt($request->password);
            }

            $user->update($data);
            
            return redirect()->route('users.index');
        }
        
    }

    public function delete($id){
        // $user = User::where('id'[], $id)->first();
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }else{
            $user->delete();            
        }        
        return redirect()->route('users.index');
    }
}
