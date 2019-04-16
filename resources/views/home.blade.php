@extends('layouts.master')

@section('content')

<section class="content">
                <header class="content__title">
                    <div class="page-head">
                    <h1>Dashboard</h1>
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


                 <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Form controls</h4>
                            <h6 class="card-subtitle">Textual form controls like <code>&lt;input&gt;</code>s, <code class="highlighter-rouge">&lt;select&gt;</code>s, and <code>&lt;textarea&gt;</code>s are styled with the <code>.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more.</h6>

                            <form class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="email" class="form-control" placeholder="David Smith">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="name@example.com">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <div class="form-group">
                                        <label>Example select</label>
                                        <div class="select">
                                            <select class="form-control">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Example textarea</label>
                                        <textarea class="form-control"></textarea>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </form>

                            <br>
                            <br>

                            <h3 class="card-body__title">Sizing</h3>
                            <p>Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg" placeholder="Large">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Default">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-sm" placeholder="Small">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="select">
                                            <select class="form-control form-control-lg">
                                                <option>Large</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="select">
                                            <select class="form-control">
                                                <option>Default</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="select">
                                            <select class="form-control form-control-sm">
                                                <option>Small</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                            </select>
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>

                            <h3 class="card-body__title">Readonly</h3>
                            <p>Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input’s value. Read-only inputs appear lighter (just like disabled inputs), but retain the standard cursor.</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Readonly Textual Input" readonly>
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <div class="form-group mb-0">
                                        <textarea class="form-control" readonly placeholder="Readonly Textarea"></textarea>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
@endsection
