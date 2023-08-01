@extends('layouts.adminlte')

@section('content')
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-xs-12">
                @include('pages.users.table')
            </div>
        </div>
        <!-- /.row (main row) -->
    </section>
@endsection
