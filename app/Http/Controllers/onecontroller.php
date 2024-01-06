<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\onemodel;
use App\Models\regmodel;
use App\Models\buyermodel;
use App\Models\categorymodel;
use App\Models\submodel;
use DB;
use App\Models\addproductmodel;
use App\Models\addcartmodel;
use App\Models\ordertbmodel;
use App\Models\orderproducttbmodel;
use Stripe;
use App\Models\trackingmodel;

class onecontroller extends Controller
{

    public function welcomehome()
    {
        $data=addproductmodel::limit(3)->get();
        $datas=addproductmodel::limit(6)->get();
        return view('welcomehome',['result'=>$data,'res'=>$datas]);

    }
   public function show()
   {
    return view('admin');
   }
   public function insert(Request $request)
{
$name=$request->input('name');
$email=$request->input('em');
$ph=$request->input('ph');
$user=$request->input('user');
$pass=$request->input('pass');
$data=array('Name'=>$name,'Email'=>$email,'Phone'=>$ph,'UserName'=>$user,'Password'=>$pass);
onemodel::create($data);
echo "success";
}
public function display()
{
    return view('login');
}

public function login(Request $request)
{
    $request->validate([
        'user'=>'required|regex:/^[a-z A-Z]+$/|min:2',
        'pass'=>'required',
    ]);
    $user=$request->input('user');
    $pass=$request->input('pass');
    $data=onemodel::where('UserName',$user)->where('Password',$pass)->first(); 
    if($data)
    {
        $id=$data->id;
        $email=$data->Email;
        $name=$data->Name;
        $request->session()->put('username',$user);
        $request->session()->put('email',$email);
        $request->session()->put('name',$name);
        $request->session()->put('id',$id);
        return redirect('home');
    }
    else
    {
        $dat=regmodel::where('Username',$user)->where('Password',$pass)->where('Status','Approved')->first();
        if($dat)
        {
            $request->session()->put('username',$user);
            $id=$dat->id;
            $name=$dat->Name;
            // $request->session()->put('name',$name);
            $request->session()->put('id',$id);
          return redirect('sellerhome');
        }
        else
        {
       $datas=buyermodel::where('Username',$user)->where('Password',$pass)->where('Status','Approved')->first();
     if($datas)
     {
        $request->session()->put('username',$user);
        $id=$datas->id;
        $request->session()->put('id',$id);
        // return back()->with('message','login successfully');

        return redirect('buyerhome');
     }
     else
     {
        return redirect('login');
     }
         
        }
    
    }
    
   
}
public function newhome()
{
    return view('admin/home');
}

public function sellerhome()
{
    return view('seller/sellerhome');
}
public function buyerhome(Request $request)
{ 
    $sess=$request->session()->get('id');
    $data=addcartmodel::where('Buyer_id',$sess)->count();
   
    return view('buyer/buyerhome',['result'=>$data]);
}


public function sellerreg()
{
    return view('seller/sellerreg');
}

public function registerinsert(Request $request)
{
   $request->validate([
'name'=>'required',
'email'=>'required',
'phone'=>'required|regex:/^[0-9]+$/|min-10|max-10',
'username'=>'required',
'password'=>'required|regex:/^[0-9 a-z A-Z]+$/|min-8|max-8',
   ]);
  $name=$request->input('name');
  $email=$request->input('em');
  $ph=$request->input('ph');
  $user=$request->input('user');
  $pass=$request->input('pass');
  $photo=$request->file('photo');
  $file=time().'.'.$photo->getclientOriginalExtension();
  $dest_path=public_path('images');
  $data=array('Name'=>$name,'Email'=>$email,'Phone'=>$ph,'Username'=>$user,'Password'=>$pass,'Photo'=>$file,'Status'=>'pending');
 regmodel::create($data);
 $photo->move($dest_path,$file);
echo "success";

}

public function viewseller(Request $request)
{
   $data=regmodel::get();
   return view('admin/viewseller',['result'=>$data]);
    
}

public function details(Request $request,$id)
{
    $sess=$request->session()->get('id');
    $data=regmodel::where('id',$id)->first();
    return view('admin/details',['result'=>$data]);
}

public function approve(Request $request,$id)
{
$dat=$request->input('app');
if($dat=='Reject')
{
  $data=array('Status'=>'Rejected');
}
else
{
$data=array('Status'=>'Approved');
}
regmodel::where('id',$id)->update($data);
return redirect('viewseller');
}


public function viewprofile(Request $request)
{
    $sess=$request->session()->get('id');
    $data=regmodel::where('id',$sess)->get();
    return view('seller/viewprofile',['result'=>$data]);
}

public function editprofile(Request $request)
{
  $sess=$request->session()->get('id');
  $data=regmodel::where('id',$sess)->first();
  return view('seller/editprofile',['result'=>$data]);
}
public function updateprofile(Request $request)
{
    $sess=$request->session()->get('id');
    $name=$request->input('name');
    $em=$request->input('em');
    $ph=$request->input('ph');
    $user=$request->input('user');
    $pass=$request->input('pass');
    $photo=$request->file('photo');
    
    if($photo)
    {
        $file=time().'.'.$photo->getclientOriginalExtension();
    $dest_path=public_path('images');
        $data=array('Name'=>$name,'Email'=>$em,'Phone'=>$ph,'Username'=>$user,'Password'=>$pass,'Photo'=>$file);
  
       $photo->move($dest_path,$file); 
     } 
    else
    {
        $data=array('Name'=>$name,'Email'=>$em,'Phone'=>$ph,'Username'=>$user,'Password'=>$pass);
    }
    
    regmodel::where('id',$sess)->update($data);

    return redirect('viewprofile');

}



public function buyerregister()
{
    return view('buyer/buyerregister');
}
public function buyerinsert(Request $request)
{
    $request->validate([
        'name'=>'required|regex:/^[a-z A-Z]+$/|min:3',
        'email'=>'required|regex:/^[a-z A-Z 0-9]+$/',
        'phone'=>'required|regex:/^[0-9]+$/|min:10|max:10',
        'username'=>'required|regex:/^[a-z A-Z]+$/|min:3',
        'password'=>'required|regex:/^[a-z A-Z 0-9]+$/|min:8',
    ]);
$name=$request->input('name');

$em=$request->input('email');
$ph=$request->input('phone');
$user=$request->input('username');
$pass=$request->input('password');
$photo=$request->file('photo');
$file=time().'.'.$photo->getclientOriginalExtension();
$dest_path=public_path('images');
$data=array('Name'=>$name,'Email'=>$em,'Phone'=>$ph,'Username'=>$user,'Password'=>$pass,'Photo'=>$file,'Status'=>'Pending');

buyermodel::create($data);
$photo->move($dest_path,$file);
echo "success";
}


public function viewbuyer(Request $request)
{
  
    $data=buyermodel::get();
    return view('admin/viewbuyer',['result'=>$data]);
}



public function editbuyer(Request $request,$id)
{
  
    $data=buyermodel::where('id',$id)->first();
    return view('admin/editbuyer',['result'=>$data]);
}
public function updatebuyer(Request $request,$id)
{
    $dat=$request->input('app');
    if($dat=='Approve')
    {
        $data=array('Status'=>'Approved');
    }
    else
    {
        $data=array('Status'=>'Rejected');
    }
buyermodel::where('id',$id)->update($data);
return redirect('viewbuyer');
}



public function viewbuyerprofile(Request $request)
{
    $sess=$request->session()->get('id');
    $data=buyermodel::where('id',$sess)->get();
    return view('buyer/viewbuyerprofile',['result'=>$data]);
}


public function editbuyerprofile(Request $request)
{
    $sess=$request->session()->get('id');
    $data=buyermodel::where('id',$sess)->first();
    return view('buyer/editbuyerprofile',['result'=>$data]);
}

public function updatebuyerprofile(Request $request,$id)
{
    $name=$request->input('name');
    $em=$request->input('email');
    $ph=$request->input('phone');
    // $user=$request->input('username');
    // $pass=$request->input('password');
       $photo=$request->file('photo');
    if($photo)
    {
      
    $file=time().'.'.$photo->getclientOriginalExtension();
    $dest_path=public_path('images');
    $data=array('Name'=>$name,'Email'=>$em,'Phone'=>$ph,'Photo'=>$file);
      $photo->move($dest_path,$file);
}
    else
    {
        $data=array('Name'=>$name,'Email'=>$em,'Phone'=>$ph);
    }
   
    buyermodel::where('id',$id)->update($data);
 
    return redirect('viewbuyerprofile')->with('message','updated successfully');
}

public function addcategory()
{
    return view('admin/addcategory');
}

public function categoryinsert(Request $request)
{
    $cate=$request->input('category');
    $data=array('Category_name'=>$cate);
    categorymodel::create($data);
    echo "success";
}

public function viewcategory()
{
    $data=categorymodel::get();
    return view('admin/viewcategory',['result'=>$data]);
}

public function editcategory(Request $request,$id)
{
    $data=categorymodel::where('id',$id)->first();
    return view('admin/editcategory',['result'=>$data]);
}
public function updatecategory(Request $request,$id)
{
    $cate=$request->input('category');
    $data=array('Category_name'=>$cate);
    categorymodel::where('id',$id)->update($data);
    return redirect('viewcategory');
}
public function deletecategory($id)
{
    $data=categorymodel::where('id',$id)->delete();
    return redirect('viewcategory');
}

public function subcategory()
{
    $data=categorymodel::get();
    return view('admin/subcategory',['result'=>$data]);
}
public function subcategoryinsert(Request $request)
{
    $sub=$request->input('sub');
    $cate=$request->input('cate');
    $data=array('Category_id'=>$cate,'Subcategory'=>$sub);
    submodel::create($data);
   return redirect('subcategory');
}
public function viewsubcategory(Request $request)
{
   
    $data=submodel::join('categoryadd_tb','categoryadd_tb.id','=','subcategory_tb.Category_id')->select('categoryadd_tb.*','subcategory_tb.*','subcategory_tb.id as sid')->get();

    return view('admin/viewsubcategory',['result'=>$data]);
}
public function editsub(Request $request,$id)
{
    $data=submodel::join('categoryadd_tb','categoryadd_tb.id','=','subcategory_tb.Category_id')->select('categoryadd_tb.*','subcategory_tb.*','subcategory_tb.id as sid')-> where('subcategory_tb.id',$id)->first();
   
    return view('admin/editsub',['result'=>$data]);
}
Public function updatesub(Request $request,$id)
{
    
   $cate=$request->input('cate');
   $subcate=$request->input('subcate');
   $data=array('Subcategory'=>$subcate);
   submodel::where('id',$id)->update($data);
   return redirect('viewsubcategory');
}
public function deletesub($id)
{
    $data=submodel::where('id',$id)->delete();
    return redirect('viewsubcategory');
}
 

public function addproduct()
{
    $data=categorymodel::get();
    return view('seller/addproduct',['result'=>$data]);
}

public function subcategoryajax(Request $request)
{
    $var=$request->input('cat');
    $data=submodel::where('Category_id',$var)->get();
     return response()->json($data);
}

public function addproductinsert(Request $request)
{
    $sess=$request->session()->get('id');
    $name=$request->input('productname');
    $cate=$request->input('category');
    $subcate=$request->input('subcategory');
    $pr=$request->input('price');
    $qua=$request->input('quantity');
    $photo=$request->file('photo');
    
    $file=time().'.'.$photo->getClientOriginalExtension();
    
    $dest_path=public_path('images');
    $data=array('Seller_id'=>$sess,'Product_Name'=>$name,'Category'=>$cate,'Subcategory'=>$subcate,'Price'=>$pr,'Quantity'=>$qua,'Photo'=>$file);
    addproductmodel::create($data);
    $photo->move($dest_path,$file);
    return back()->with('message','Added Successfully');
    return redirect('addproduct');
}

public function viewproduct(Request $request)
{
    $sess=$request->session()->get('id');
    $data=addproductmodel::join('categoryadd_tb','categoryadd_tb.id','=','addproduct_tb.Category')->join('subcategory_tb','subcategory_tb.id','=','addproduct_tb.Subcategory')->select('addproduct_tb.*','categoryadd_tb.*','subcategory_tb.*','addproduct_tb.id as aid')->where('addproduct_tb.Seller_id',$sess)->get();
   
    return view('seller/viewproduct',['result'=>$data]);
}


public function editproduct(Request $request,$id)
{

    $data=addproductmodel::join('categoryadd_tb','categoryadd_tb.id','=','addproduct_tb.Category')->join('subcategory_tb','subcategory_tb.id','=','addproduct_tb.Subcategory')->select('addproduct_tb.*','categoryadd_tb.*','subcategory_tb.*','addproduct_tb.id as aid')->where('addproduct_tb.id',$id)->first();
    return view('seller/editproduct',['result'=>$data]);
}
public function updateproduct(Request $request,$id)
{
   
    $name=$request->input('productname');
    $cate=$request->input('category');
    $subc=$request->input('subcategory');
    $pr=$request->input('price');
    $qua=$request->input('quantity');
    $photo=$request->file('photo');
   
    if($photo)
    {
        $file=time().'.'.$photo->getClientOriginalExtension();
        $dest_path=public_path('images');
        $data=array('Product_Name'=>$name,'Category'=>$cate,'Subcategory'=>$subc,'Price'=>$pr,'Quantity'=>$qua,'Photo'=>$file);
       $photo->move($dest_path,$file);
      
    }
    else
    {
        $data=array('Product_Name'=>$name,'Category'=>$cate,'Subcategory'=>$subc,'Price'=>$pr,'Quantity'=>$qua);
        
    }
   
    addproductmodel::where('id',$id)->update($data);
    return redirect('viewproduct');
}
public function deleteproduct($id)
{
    $data=addproductmodel::where('id',$id)->delete();
    return redirect('viewproduct');
}




public function viewbuyerproduct( Request $request)
{
$sess=$request->session()->get('id');
   $data=addproductmodel::get();
   $datas=addcartmodel::where('Buyer_id',$sess)->count();

  
    return view('buyer/viewbuyerproduct',['result'=>$data,'res'=>$datas]);
}

public function buyerproductdetails(Request $request,$id)
{
    
  
    $sess=$request->session()->get('id');
   $data=addproductmodel::join('subcategory_tb','subcategory_tb.id','=','addproduct_tb.Subcategory')->join('categoryadd_tb','categoryadd_tb.id','=','addproduct_tb.Category')->select('addproduct_tb.*','subcategory_tb.*','categoryadd_tb.*','addproduct_tb.id as pid')->where('addproduct_tb.id',$id)->first();
  $datas=addcartmodel::where('Buyer_id',$sess)->count();
   return view('buyer/buyerproductdetails',['result'=>$data,'res'=>$datas]);
   

}



public function updatetocart(Request $request,$id)
{
    $sess=$request->session()->get('id');
    $request->validate([
'quantity'=>'required',
    ]);
    
   if($sess)

   {
    $qua=$request->input('quantity');
    
    $data=array('Product_id'=>$id,'Quantity'=>$qua,'Buyer_id'=>$sess);
    addcartmodel::create($data);
    // return redirect('viewcart');
    return redirect('viewcart')->with('message','added to cart');

   }
   else
   {
    //  return redirect('welcomehome'); 
    return back()->with('message','please login to continue');

   }
   
    //  return back()->with('message','Please login to continue');
}
public function logout(Request $request)

{
  $request->session()->forget('username');
  $request->session()->forget('id');
  return redirect('login');
}

public function viewcart(Request $request)
{
    $sess=$request->session()->get('id');
    $data=addcartmodel::join('addproduct_tb','addproduct_tb.id','=','addcart_tb.Product_id')->select('addproduct_tb.*','addcart_tb.*','addcart_tb.Quantity as qua')->where('addcart_tb.Buyer_id',$sess)->get();
    return view('buyer/viewcart',['result'=>$data]);
}
public function btnajax(Request $request,$id)
{
   $dat=addcartmodel::where('id',$id)->first();
   $quantity=$dat->Quantity;
    $qua=$request->input('sub');
  
    if($qua=='-')
    {
    $data=array('Quantity'=>$quantity-1);
    addcartmodel::where('addcart_tb.id',$id)->update($data);
    }
    else
    {
        $datas=array('Quantity'=>$quantity+1);
        addcartmodel::where('addcart_tb.id',$id)->update($datas);
    }
   
    
    return redirect('viewcart');
    
   
}
public function remove($id)
{
  addcartmodel::where('id',$id)->delete();
  return redirect('viewcart');
}



public function cartproceed(Request $request)
{
    $sess=$request->session()->get('id');
  $data=addcartmodel::join('addproduct_tb','addproduct_tb.id','=','addcart_tb.Product_id')->select('addcart_tb.*','addproduct_tb.*','addcart_tb.Quantity as qua')->where('addcart_tb.Buyer_id',$sess)->get();

    return view('buyer/cartproceed',['result'=>$data]);
}

public function cartproceedinsert(Request $request)
{
    $request->validate([
       'name'=>'required|regex:/^[a-z A-Z]+$/|min:2',
       'house'=>'required|regex:/^[0-9]+$/|min:3',
       'pin'=>'required|regex:/^[0-9]+$/|min:6|max:6',
       'district'=>'required',
       'state'=>'required',
       'mobile'=>'required|regex:/^[0-9]+$/|min:10|max:10',
       'landmark'=>'required',

    ]);
    $sess=$request->session()->get('id');
    $name=$request->input('name');
    $house=$request->input('house');
    $pin=$request->input('pin');
    $dist=$request->input('district');
    $state=$request->input('state');
    $ph=$request->input('mobile');
    $land=$request->input('landmark');
    
    $total=$request->input('total');
  
    $data=array('buyer_id'=>$sess,'Name'=>$name,'House_no'=>$house,'pin'=>$pin,'District'=>$dist,'State'=>$state,'Mobile'=>$ph,'Landmark'=>$land,'Total'=>$total,'Status'=>'Pending');
     $dat=ordertbmodel::create($data);
$id=$dat['id'];
$datas=addcartmodel::join('addproduct_tb','addproduct_tb.id','=','addcart_tb.Product_id')->select('addcart_tb.*','addproduct_tb.*','addcart_tb.Quantity as qua')->where('addcart_tb.Buyer_id',$sess)->get();
foreach($datas as $val)
{
    $d=array('Order_id'=>$id,'product_id'=>$val['Product_id'],'quantity'=>$val['qua'],'price'=>$val['Price']*$val['qua'],'status'=>'pending');
   orderproducttbmodel::create($d);

}
addcartmodel::where('Buyer_id',$sess)->delete();

return view('buyer/stripe',['result'=>$total]);

}

public function myorders(Request $request)
{
    $sess=$request->session()->get('id');
    $data=ordertbmodel::where('buyer_id',$sess)->get();
    // $data=orderproducttbmodel::join('addproduct_tb','addproduct_tb.id','=','order_product_tb.product_id')->join('order_tb','order_tb.id','=','order_product_tb.Order_id')->where('order_tb.buyer_id',$sess)->get();
    return view('buyer/myorders',['result'=>$data]);
}


public function orderedprodetails(Request $request,$id)
{
    
   
    // $data=orderproducttbmodel::join('order_tb','order_tb.id','=','order_product_tb.Order_id')->join('addproduct_tb','addproduct_tb.id','=','order_product_tb.product_id')->where('order_tb.buyer_id',$id)->first();
   
    // return view('buyer/orderedprodetails',['result'=>$data]);
    $data=orderproducttbmodel::join('order_tb','order_tb.id','=','order_product_tb.Order_id')->join('addproduct_tb','addproduct_tb.id','=','order_product_tb.product_id')->where('order_product_tb.Order_id',$id)->get();
   $datas=ordertbmodel::where('id',$id)->first();

    return view('buyer/orderedprodetails',['result'=>$data,'res'=>$datas]);
    
}

public function vieworders(Request $request)
{
   $sess=$request->session()->get('id');
//  $data=ordertbmodel::join('order_product_tb','order_product_tb.Order_id','=','order_tb.id')->join('addproduct_tb','addproduct_tb.id','=','order_product_tb.product_id')->join('seller_reg_tb','seller_reg_tb.id','=','addproduct_tb.Seller_id')->select('order_tb.*','order_product_tb.*','addproduct_tb.*','seller_reg_tb.*','order_tb.Name as buyername')->where('seller_reg_tb.id',$sess)->get();
 $data=ordertbmodel::join('order_product_tb','order_product_tb.Order_id','=','order_tb.id')->join('addproduct_tb','addproduct_tb.id','=','order_product_tb.product_id')->where('addproduct_tb.Seller_id',$sess)->get();
 
//  $datas=ordertbmodel::get();
// $total=0;
//  foreach($data as $d)
//  {
//      $total=$total+$d['price'];
    
//  }
// print_r($total);000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000
// exit;
 return view('seller/vieworders',['result'=>$data]); 
}


public function vieworderdetails(Request $request,$id)
{
    $sess=$request->session()->get('id');
  $data=orderproducttbmodel::join('addproduct_tb','addproduct_tb.id','=','order_product_tb.product_id')->join('order_tb','order_tb.id','=','order_product_tb.Order_id')->where('order_product_tb.Order_id',$id)->where('addproduct_tb.Seller_id',$sess)->get();


  return view('seller/vieworderdetails',['result'=>$data]);
}

public function detailsapprove(Request $request,$id)
{
 $sub=$request->input('sub');

 if($sub=='Approve')
 {
    $data=array('Status'=>'Approved');
 }
 else
 {
$data=array('Status'=>'Rejected');
 }
ordertbmodel::where('id',$id)->update($data);
 return redirect('vieworders');

}


public function changepassword()
{
    return view('buyer/changepassword');
}
public function changepasswordupdate(Request $request)
{
    $sess=$request->session()->get('id');
    $request->validate([
        'currentpassword'=>'required',
        'newpassword'=>'required',
        'confirmpassword'=>'same:newpassword',
    ]);
$cur=$request->input('currentpassword');
$new=$request->input('newpassword');
$data=buyermodel::where('id',$sess)->where('Password',$cur)->first();
if($data)
{
    $datas=array('Password'=>$new);
    buyermodel::where('id',$sess)->update($datas);
    return back()->with('message','Password changed');
}
else
{
    return back()->with('error','Current password is invalid');
}
}

 public function changepasswordadmi()
 {
    return view('admin/changepasswordadmi');
 }
public function passwordupdateadmin(Request $request)
{
    $sess=$request->session()->get('id');
    $request->validate([
      'currentpassword'=>'required',
      'newpassword'=>'required',
      'confirmpassword'=>'same:newpassword',

    ]);

    $new=$request->input('newpassword');
    $cur=$request->input('currentpassword');
    $data=DB::table('admin_tb')->where('id',$sess)->where('Password',$cur)->first();
    if($data)
    {
        $datas=array('Password'=>$new);
        DB::table('admin_tb')->where('id',$sess)->update($datas);

    }
    else
    {
        return back()->with('error','Current Password is Invalid');
    }
}


public function changepasswordseller()
{
    return view('seller/changepasswordseller');
}


public function updatepasswordseller(Request $request)
{
$sess=$request->session()->get('id');
$request->validate([
'currentpassword'=>'required',
'newpassword'=>'required',
'confirmpassword'=>'same:newpassword',


]);
$cur=$request->input('currentpassword');
$new=$request->input('newpassword');
$data=regmodel::where('id',$sess)->where('Password',$cur)->first();
if($data)
{
    $datas=array('Password'=>$new);
    regmodel::where('id',$sess)->update($datas);
    return back()->with('message','Password changed successfully');

}
else
{
    return back()->with('error','Current Password is Invalid');
    
}
}

public function forgotpassword()
{
    return view('forgotpassword');
}


public function usernamecheck(Request $request)
{

    $user=$request->input('username');
    
    $data=DB::table('admin_tb')->where('Username',$user)->first();
    if($data)
    {
        $request->session()->put('username',$user);
        $id=$data->id;
        $request->session()->put('id',$id);

        return view('emailcheck');
    }
    else
    {

        $datas=regmodel::where('Username',$user)->first();
        if($datas)
        {
            $request->session()->put('username',$user);
        $id=$datas->id;
        $request->session()->put('id',$id);
            return view('emailcheck');
        }
        else
        {
           $dat=buyermodel::where('Username',$user)->first();
           if($dat)
           {
            $request->session()->put('username',$user);
        $id=$dat->id;
        $request->session()->put('id',$id);
            return view('emailcheck');
           }
           else
           {
            return back()->with('error','Invalid Username');
           }
        }

    
    }
}



public function emailcheck()
{
    return view('emailcheck');
}

public function updateemail(Request $request)

{
    // $request->validate([
    //     'email'=>'required',
    //     'phone'=>'required',
    // ]);
   $sess=$request->session()->get('id');
   $email=$request->input('email');
   $ph=$request->input('phone');
// print_r($sess);
// exit;
  $data=DB::table('admin_tb')->where('id',$sess)->where('Email',$email)->where('Phone',$ph)->first();
  if($data)
  {
   $request->session()->put('table','admin_tb');
    return view('updatepassword');
  }
  else
  {
    $datas=regmodel::where('id',$sess)->where('Email',$email)->where('Phone',$ph)->first();
    if($datas)
    {
     $request->session()->put('table','seller_reg_tb');
        return view('updatepassword');
    }
    else
    {
        $dat=buyermodel::where('id',$sess)->where('Email',$email)->where('Phone',$ph)->first();
        if($dat)
        {
            $request->session()->put('table','buyerregister_tb');
            return view('updatepassword');
        }
        else
        {
            return redirect('emailcheck')->with('error','Invalid');
           
        }
    }
  }
}
 
 public function newforgotpwinsert(Request $request)
 {
    $sess=$request->session()->get('table');
   $id=$request->session()->get('id');
    $request->validate([
      'newpassword'=>'required',
      'confirmpassword'=>'same:newpassword',
    ]);
    $new=$request->input('newpassword');
    $con=$request->input('confirmpassword');
    $data=array('Password'=>$new);
    if($sess=='admin_tb')
    {
    DB::table('admin_tb')->where('id',$id)->update($data);
    }
   
   
       
        elseif($sess=='seller_reg_tb')
        {
            regmodel::where('id',$id)->update($data);
        }
        else
        {
            
        
        
            buyermodel::where('id',$id)->update('$data');
        }
       
        


 
   
 }




 public function vieworderadmi()
 {
    $data=ordertbmodel::get();
   return view('admin/vieworderadmi',['result'=>$data]);
 }
 

public function orderdetailsadmi($id)
{
//    $sess=$request->session()->get('id');
$data=ordertbmodel::where('id',$id)->first();
//    $datas=ordertbmodel::join('order_product_tb','order_product_tb.Order_id','=','order_tb.id')->join('addproduct_tb','addproduct_tb.id','=','order_product_tb.product_id')->where('order_tb.id',$id)->get();
 $datas=orderproducttbmodel::join('addproduct_tb','addproduct_tb.id','=','order_product_tb.product_id')->join('seller_reg_tb','seller_reg_tb.id','=','addproduct_tb.Seller_id')->select('order_product_tb.*','addproduct_tb.*','seller_reg_tb.*','seller_reg_tb.Name as name')->where('order_product_tb.Order_id',$id)->get();

   return view('admin/orderdetailsadmi',['result'=>$data,'res'=>$datas]);
}


public function logoutseller(Request $request)
{
  $request->session()->forget('username');

    return redirect('login');
}
public function stripepost(Request $request)
{
   $sess=$request->session()->get('id');
    $total=$request->input('total');
    

    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    Stripe\Charge::create ([

        "amount" => $total * 100,

        "currency" => "usd",

        "customer" => 1,

        "description" => "Test payment from itsolutionstuff.com.",

        "shipping" => [

          "name" => "Jenny Rosen",

          "address" => [

            "line1" => "510 Townsend St",

            "postal_code" => "98140",

            "city" => "San Francisco",

            "state" => "CA",

            "country" => "US",

          ],

        ]

]); 



Session::flash('success', 'Payment successful!');

       

return back();

}


public function trackingdetails($id)
{
    return view('seller/trackingdetails',['id'=>$id]);
}
public function trackinginsert(Request $request)
{
    
 $det=$request->input('details');
 $date=$request->input('date');
$id=$request->input('orderid');
 $data=array('Order_id'=>$id,'Details'=>$det,'Date'=>$date);
 trackingmodel::create($data);
echo "success";
}


public function trackproduct(Request $request,$id)
{
    $data=trackingmodel::where('Order_id',$id)->get();
    return view('buyer/trackproduct',['result'=>$data]);
}

public function searchajax(Request $request)
{
$text=$request->input('searchtext');
$data=addproductmodel::join('categoryadd_tb','categoryadd_tb.id','=','addproduct_tb.Category')->where('Category_name',$text)->get();
// return view('buyer/viewbuyerproduct',['result'=>$data]);
return response()->json($data);
  }
  public function viewprosearch(Request $request)
  {
    $text=$request->input('tsearch');
    $data=addproductmodel::join('categoryadd_tb','categoryadd_tb.id','=','addproduct_tb.Category')->where('Category_name',$text)->select('addproduct_tb.*','categoryadd_tb.*','addproduct_tb.id as aid')->get();
      return response()->json($data);
    
  }

  public function logoutadmin(Request $request)
  {
    $sess=$request->session()->forget('username');

    return redirect('login');
  }






  public function extra()
  {
    return view('extra');
  }


public function welcomehomeprodetails($id)
{
    $data=addproductmodel::join('categoryadd_tb','categoryadd_tb.id','=','addproduct_tb.Category')->join('subcategory_tb','subcategory_tb.id','=','addproduct_tb.Subcategory')->select('addproduct_tb.*','categoryadd_tb.*','subcategory_tb.*','subcategory_tb.id as sid')->where('addproduct_tb.id',$id)->first();
    return view('welcomehomeprodetails',['result'=>$data]);
}
// public function addcarthome(Request $request)
// {
//     $sess=$request->session()->get('id');
//     if($sess)
//     {
//       return view('buyer/viewcart');
//     }
//     else
//     {
//         return redirect('welcomehome');
//     }
// }













}

