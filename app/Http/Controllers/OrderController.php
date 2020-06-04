<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class OrderController extends Controller
{
    public function index() {
        if (Auth::check()) {
            $obj = Order::orderBy('created_at','desc')->get();
            return view('admin.order.list')
                ->with('obj', $obj);
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }


    public function search() {
        if (Auth::check()) {
            $start_date = Carbon::parse(Input::get('startDate'))->startOfDay();
            $end_date = Carbon::parse(Input::get('endDate'))->endOfDay();
            if($start_date != null && $end_date != null) {
                $orders = Order::whereDate('created_at', '>=', $start_date)
                    ->whereDate('created_at', '<=', $end_date)
                    ->get();
                $order_details = OrderDetail::all();
                $products = Product::where('status',1)->get();
                return response()->json(['orders' => $orders , 'order_details' => $order_details, 'products' => $products], 200);
            }
            else {
                $orders = Order::all();
                $order_details = OrderDetail::all();
                $products = Product::where('status',1)->get();
                return response()->json(['orders' => $orders , 'order_details' => $order_details, 'products' => $products], 200);
            }
        }
        else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }


    public function destroy($id) {
        if (Auth::check()) {
            $obj = Order::find($id);
            if ($obj == null) {
                return view('404');
            }
            $obj->delete();
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }


    public function changeStatus() {
        if (Auth::check()) {
            $id = Input::get('id');
            $status = Input::get('status');
            $order = Order::find($id);
            if ($order == null) {
                return view('404');
            }
            $order->status = $status;
            $order->save();
            $order_id = $order -> id;
            return Response::json($order_id);
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }
}
