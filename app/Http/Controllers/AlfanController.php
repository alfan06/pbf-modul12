<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AlfanController extends Controller{
    public function index(){
        $nama = 'Alfan Noufal Nasruddin';
        return view('Alfan', ['nama' => $nama]);
    }
}