@extends('backend.layouts.default_layout')
@section('title') Customers @parent @endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>รายการลูกค้า</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('backend/dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Customers</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    {{-- {!! Session::get('success') !!} --}}

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a name="" id="" class="btn btn-success" href="{{-- route('products.create') --}}" role="button">
                    <i class="fas fa-plus"></i> &nbsp;เพิ่มลูกค้าใหม่
                </a>
            </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body p-0 text-sm">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 10%">
                            Name
                        </th>
                        <th style="width: 10%">
                            Telephone
                        </th>
                        <th style="width: 5%">
                            Brand
                        </th>
                        <th style="width: 10%">
                            Model
                        </th>
                        <th style="width: 10%">
                            Need
                        </th>
                        <th style="width: 10%">
                            Salecontact
                        </th>
                        <th style="width: 10%">
                            Branch
                        </th>
                        <th style="width: 1%" class="text-right">
                            Status
                        </th>
                        <th class="text-right">
                            Manage
                        </th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div class="mt-3" style="padding-left: 40%;">{{-- $products->links() --}}</div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
@endsection
