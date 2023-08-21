<?php

namespace App\Exports;

use App\ProductStoreReport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use DB;
use Session;

class ProductStoreExport implements FromArray
{
    public function array(): array
    {
        
        $productID = Session::get('ProductID');

        $storeDetailsByID = DB::table('store_details')
                ->join('products', 'products.id', '=', 'store_details.product_id')
                ->select('store_details.created_at','store_details.product_quantity','products.product_name')
                ->where("store_details.product_id","=",$productID)
                ->first();

        $productDestributionByID = DB::table('requistion_details')
                ->select('requistion_details.requistion_id','requistion_details.granted_quantity','requistion_details.created_at')
                ->where("requistion_details.product_id","=",$productID)
                ->get();

        $product_storeArr1=[];
        $product_storeArr2=[];
        $product_storeArr3=[];
        $product_storeArr4=[];

        $product_storeArr1[]=array('sl','Date','Product Name','Product Qty');
        $product_storeArr3[]=array('sl','Staff Name','Granted Date','Granted Qty', 'Remaining Qty');

        $product_storeArr2[]=array(
            'sl'=>'#',
            'Date'=>$storeDetailsByID->created_at,
            'Product Name'=>$storeDetailsByID->product_name,
            'Product Qty'=>$storeDetailsByID->product_quantity,
        );

        //dd($product_storeArr);

        $remainingQty='';
        if(empty($remainingQty)){
            $totalQty = $storeDetailsByID->product_quantity;
        }
        foreach ($productDestributionByID as $key => $value) {

            $requistionID =  $value->requistion_id;
            $memberName = DB::table('requistions')
                    ->join('users', 'users.id', '=', 'requistions.member_id')
                    ->select('users.name')
                    ->where("requistions.id","=",$requistionID)
                    ->get();
            $membersName = $memberName[0]->name;
            if(empty($remainingQty)){
                $remainingQty = $totalQty - $value->granted_quantity;
            }else{
                $remainingQty -= $value->granted_quantity;
            }

            $product_storeArr4[]=array(
                'sl'=>(++$key),
                'Staff Name'=>$membersName,
                'Granted Date'=>$value->created_at,
                'Granted Qty'=>$value->granted_quantity,
                'Remaining Qty'=>$remainingQty,
            );
        }

        $result = array_merge($product_storeArr1, $product_storeArr2, $product_storeArr3, $product_storeArr4);
        // echo '<pre>';
        // print_r($result);
        // exit();
        return $result;
    }


}//ProductStoreExport
