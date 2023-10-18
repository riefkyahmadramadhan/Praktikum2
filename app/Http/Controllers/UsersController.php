<!-- /* 
6706220142
RIEFKY AHMAD RAMADHAN
D3IF-4603
*/ -->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatables\UsersDataTable;
 
class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }
}
