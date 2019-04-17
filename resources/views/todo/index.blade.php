@extends('layouts.master')
@section('content')

<section class="content">
    <header class="content__title">
        <div class="page-head">
            <h1>Todo Lists</h1>
            <small>Welcome to the unique Material Design admin web app experience!</small>
        </div>

        <div class="actions">
            <a href="" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item">Refresh</a>
                    <a href="" class="dropdown-item">Manage Widgets</a>
                    <a href="" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>



</section>
@endsection
