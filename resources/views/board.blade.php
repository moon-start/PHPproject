
<!--@yield(‘名稱’)定義一個區塊，用來繼承 @section 定義的內容 -->
<!--匯入網頁的架構 master.blade.php-->
@extends('layouts.master')

<!-- 檔名..? -->
<!-- @extends(‘樣板名稱’) -->
<!-- @include(‘樣板名稱’) -->
<!-- 
@section('foot')
    @include('partials.foot')
@show 
-->

<!-- 定義 -->
<!-- @yield(‘名稱’) -->
<!-- 使用--設定內容 -->
<!-- 1設定  @section(‘名稱’) -->
<!-- 2設定  @section('').........@stop -->
@section('title','客戶列表')
@section('content')
<div class="row justify-content-center">
<div class="col-md-10">
    <div class="card">
    <div class="card-header">客戶列表</div>
    <div class="card-body p-1">
        <table class="table table-hover m-0">
        <thead class="thead-darty">
            <tr>
            <th>客戶編號</th>
            <th>客戶姓名</th>
            <th>客戶電話</th>
            <td>資料處理</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($customers as $customer){
            ?>
            <tr>
                    <td><?php echo $customer->Cusid; ?></td>
                    <td><?php echo $customer->Name; ?></td>
                <td><?php echo $customer->Phone; ?></td>
                <td><a href="{{ action('CustomerController@edit', 
                                ['Cusid'=>$customer->Cusid,
                                'Name'=>$customer->Name,
                                'Address'=>$customer->Address,
                                'Phone'=>$customer->Phone]) }}" class="btn btn-success btn-sm">編輯</a>
                <a href="{{ action('CustomerController@delete', ['Cusid'=>$customer->Cusid]) }}" class="btn btn-danger btn-sm">刪除</a></td>
            </tr>
            <?php }  ?>
        </tbody>
        </table>
    </div>  
    </div>
</div>
</div>
@stop