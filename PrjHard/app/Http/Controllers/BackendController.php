<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    function GetAddProduct()
    {
        echo "Đây là trang thêm sản phẩm";
    }
    function GetAddVariant()
    {
        echo "Đây là trang thêm thay đổi";
    }
    function GetAttr()
    {
        echo "Đây là trang attr";
    }
    function GetCategory()
    {
        echo "Đây là trang thêm danh mục";
    }
    function GetComment()
    {
        echo "Đây là trang bình luận";
    }
    function GetDetailOrder()
    {
        echo "Đây là trang chi tiết sản phẩm";
    }
    function GetEditCategory()
    {
        echo "Đây là trang chỉnh sửa danh mục";
    }
    function GetEditProduct()
    {
        echo "Đây là trang chỉnh sửa sản phẩm";
    }
    function GetEditUser()
    {
        echo "Đây là trang chỉnh sửa người dùng";
    }
    function GetIndex()
    {
        echo "Đây là trang chủ";
    }
    function GetListProduct()
    {
        echo "Đây là trang danh sách sản phẩm";
    }
    function GetListUser()
    {
        echo "Đây là trang danh sách người đùng";
    }
    function GetLogin()
    {
        echo "Đây là trang đăng nhập";
    }
    function GetOrder()
    {
        echo "Đây là trang mua hàng";
    }
    function GetProcessed()
    {
        echo "Đây là trang xử lý";
    }
}
