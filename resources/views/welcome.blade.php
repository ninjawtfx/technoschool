@extends('layouts.master')
@section('title')
    TechnoSchool
    @endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Регистрация</h3>
            <form action="{{  route('signup') }}}" method="post">
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="first_name">Имя</label>
                    <input class="form-control" type="text" name="first_name" id="first_name">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input class="form-control" type="text" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Регистрация</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}}">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Войти</h3>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input class="form-control" type="text" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>
    @endsection