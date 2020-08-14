<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;

class OrderController extends Controller
{

    public function all()
    {
        return Order::all();
    }

    public function show($id)
    {
        return Order::find($id);
    }

    public function getListOrderDetail($id)
    {
        return DB::table('order_details')->where('id_order',$id)->get();
    }

    public function updateStatus(Request $request,$id)
    {
        $data = Order::where('id',$id)->update($request->all());
        return response()->json($data,200);
    }

    public function getOrderUser($id)
    {
        return Order::where('id_user',$id)->get();
    }

    public function store(Request $request,$id,$totalprice,$name,$address,$phone)
    {
        $atribu = $request->all();

        foreach($atribu as $value){
           $this_product = DB::table('products')->where('id', $value['id'])->first();
            if($this_product->quantity < $value['number']){
                    return "Xin lỗi quý khách sản phẩm $this_product->name_product hiện số lượng chỉ còn $this_product->quantity sản phẩm";
            }
        }

        $user = DB::table('user')->where('id',$id)->first();
        $id_order = DB::table('orders')->insertGetId(
            [
                'id_user'=>$id,
                'name'=> $name,
                'address'=> $address,
                'phonenumber'=> $phone,
                'total_price'=> $totalprice,
                'order_date'=>date("Y-m-d"),
            ]
        );
        foreach($atribu as $product){
          $this_product = DB::table('products')->where('id', $product['id'])->first();
          $soluongMoi = $this_product->quantity - $product['number'];
          $update =   DB::table('products')->where('id', $product['id'])->update(['quantity' => $soluongMoi]);
           
          DB::table('order_details')->insert(
                [
                    'id_order'=>$id_order,
                    'quantity_product'=>$product['number'],
                    'name_product'=>$product['number'],
                    'price_each'=>$product['price'],
                    'id_product'=>$product['id'],
                ]
            );
        }

        return 'Ok';
    }



    public function getTotalDashboard()
    {
        $data = [];
        $data['order'] = DB::table('orders')->get();
        $data['product'] = DB::table('products')->get();
        $data['user'] = DB::table('user')->get();
        $data['contact'] = DB::table('contacts')->where('status',1)->get();

        $result=[count($data['order']),count($data['product']),count($data['user']),count($data['contact'])];
        return $result;
    }


    public function delete($id)
    {
        $data = DB::table('orders')->where('id',$id)->delete();
        return response()->json($data,200);
    }


}
