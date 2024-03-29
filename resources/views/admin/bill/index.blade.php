@extends('admin.widget.index')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Đơn hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 15%; text-align: center;">Tên khách hàng</th>
                            <th style="width: 15%; text-align: center;">Ngày đặt hàng</th>
                            <th style="width: 5%; text-align: center;">Đơn giá</th>
                            <th style="width: 25%; text-align: center;">Trạng thái</th>
                            <th style="width: 15%; text-align: center;">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bills as $bill)
                        <tr>
                            <td style="width: 15%;" class="text-center"><span class="badge badge-success">
                                    {{$bill->customer->name}}</span></td>
                            <td style="width: 15%;" class="text-center"><span class="badge" style="white-space: nowrap; width: 200px; border: 1px solid #000000;
                 overflow: hidden; text-overflow: clip;">
                                    {{$bill->date_order}}</span></td>
                            <td style="width: 5%;" class="text-center"><span class="badge badge-success">
                                    {{$bill->total}}</span></td>
                            <td style="width: 25%;" class="text-center">
                            @if($bill->status == 0)
                                Đang xử lý
                            @elseif($bill->status == 1)
                                Đang giao hàng
                            @else
                                Hoàn thành
                            @endif
                            </td>
                            <td style="width: 15%;">
                                <a class="btn btn-sm btn-primary" href="{{ route('bills.show', $bill->id) }}"
                                    title="">Xem</a>
                                <!-- <a class="btn btn-sm btn-primary" href="{{ route('bills.edit', $bill->id) }}"
                                    title="">Sửa</a> -->
                                <form action="{{ route('bills.destroy', $bill->id) }}" class="form-delete" role="form"
                                    method="post" style="display: inline">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Xóa" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <div class="export">
                        <a href="#" class="btn btn-info export" id="printButton"> Xuất file PDF </a>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>
<div style="display: none;">
    <div id="list-order">
        <h3>Công ty May 10</h3>
        <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 15%; text-align: center;">Tên khách hàng</th>
                    <th style="width: 15%; text-align: center;">Ngày đặt hàng</th>
                    <th style="width: 5%; text-align: center;">Đơn giá</th>
                    <th style="width: 25%; text-align: center;">Ghi chú</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bills as $bill)
                <tr>
                    <td style="width: 15%;" class="text-center"><span class="badge badge-success">
                            {{$bill->customer->name}}</span></td>
                    <td style="width: 15%;" class="text-center"><span class="badge" style="white-space: nowrap; width: 200px; border: 1px solid #000000;
         overflow: hidden; text-overflow: clip;">
                            {{$bill->date_order}}</span></td>
                    <td style="width: 5%;" class="text-center"><span class="badge badge-success">
                            {{$bill->total}}</span></td>
                    <td style="width: 25%;" class="text-center"><span class="badge badge-success">
                            {{$bill->note}}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection