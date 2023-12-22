<?php 
namespace APP\Controllers;

use App\Controllers\BaseController;


class MasterData extends BaseController{
    public function master()
    {
        return view ("master_data_page/master_page");
    }   
    public function inventory()
    {
        return view ("master_data_page/inventory_page");
    }
    public function stok_opname()
    {
        return view ("master_data_page/stok_opname_page");
    }
    public function barang_in()
    {
        return view ("master_data_page/barang_in_page");
    }
    public function barang_out()
    {
        return view ("master_data_page/barang_out_page");
    }
    public function order_in()
    {
        return view ("master_data_page/order_in_page");
    }


}

