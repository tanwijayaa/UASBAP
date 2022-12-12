@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Form Voucher {{ $formvoucher->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/formvoucher') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/formvoucher/' . $formvoucher->id . '/edit') }}" title="Edit formvoucher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/formvoucher' . '/' . $formvoucher->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete formvoucher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $formvoucher->id }}</td>
                                    </tr>
                                    <tr><th> Judul </th><td> {{ $formvoucher->Judul }} </td></tr><tr><th> Deskripsi </th><td> {{ $formvoucher->Deskripsi }} </td></tr><tr><th> Status </th><td> {{ $formvoucher->Disable }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
