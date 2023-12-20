<?php
namespace APP\Controllers;

// ...
use App\Controllers\BaseController;
use App\Models\UserModel;

class Page extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function home()
    {        
        $db = \Config\Database::connect();
        // table users
        $query = $db->table('users')
        ->select('name, role');
        $data['users']=$query->get()->getResult();

        // table inbound
        $queryInbound=$db->table('inbound')
        ->selectSum('qty','total_qty');
        $data['inbound']=$queryInbound->get()->getResult();
        
        return view('home',$data);

    }

    public function put_away(){
        $db = \Config\Database::connect();
        $query = $db->table('putaway')
        ->select('no_put_away,MAX(putaway.date_processed) as date_process')
        ->select('users.name as processed_by_name, users_approve.name as approve_by_name')
        ->join('users', 'putaway.processed_by = users.id_user')
        ->join('users as users_approve', 'putaway.approve_by = users_approve.id_user')
        ->groupBy('no_put_away');

        $data['details']=$query->get()->getResult();
        return view('put_away',$data);
    }

    // Dalam metode about pada Page Controller
    public function scan_inbound()
    {
        // Mengambil semua data inbound
        $db = \Config\Database::connect();
        $query = $db->table('inbound')
            ->select('no_inbound, MAX(inbound.date_process) as date_process')
            ->select('users.name as processed_by_name, users_approve.name as approve_by_name')
            ->join('users', 'inbound.processed_by = users.id_user')
            ->join('users as users_approve', 'inbound.approve_by = users_approve.id_user')
            ->groupBy('no_inbound');

        $data['users'] = $query->get()->getResult();


        // Memuat view untuk menampilkan data pengguna
        return view('scan_inbound', $data);
    }


    public function detail_inbound($no_inbound)
    {
        $db = \Config\Database::connect();

        $query = $db->table('inbound')
            ->select('*')
            ->where('no_inbound', $no_inbound);

        $data['details'] = $query->get()->getResult();


        return view('detail_inbound', $data);
    }
    public function detail_put_away($no_put_away)
    {
        $db = \Config\Database::connect();

        $query = $db->table('putaway')
            ->select('inbound.sku, inbound.qty, inbound.brand, inbound.article, putaway.binlock')
            ->join('inbound', 'putaway.processed_by = inbound.processed_by', 'right')
            ->where('no_put_away', $no_put_away);

            $data['details'] = $query->get()->getResult();
            $data['no_put_away'] = $no_put_away;


        return view('detail_put_away', $data);
    }


}
