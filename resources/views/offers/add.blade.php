@extends('layouts.main')
@section('content')
    <div class="container" style="padding-top: 20px">
        <div>
            <form method="post" action=" ">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2" for="type_object">Тип об'єкта</label>
                        <select class="custom-select mr-sm-2" id="type_object" name = "type_object">
                            <option selected></option>
                            <option value="flat">Квартира</option>
                            <option value="house">Особняк</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="price">Ціна</label>
                        <input type="text" class="form-control" name ="price" id="price" placeholder="Вкажіть ціну" value="">
                            <div class="text-danger">
                                <strong></strong>
                            </div>
                    </div>
                    <div class="col">
                        <label class="mr-sm-2" for="type_price">Тип валюти</label>
                        <select class="custom-select mr-sm-2" name="type_price" id="type_price">
                                <option value=""></option>
                        </select>
                            <div class="text-danger">
                                <strong>
                                </strong>
                            </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 30px;">
                    <div class="col">
                        <label class = "form-group"  style="padding-right: 30px">Вказати тип стін </label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="type_wall" name="type_wall" value="panel" class="custom-control-input">
                            <label class="custom-control-label" for="type_wall">Панель</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="type_wall1" name="type_wall" value="brick" class="custom-control-input">
                            <label class="custom-control-label" for="type_wall1">Цегла</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="number_rooms" >Кількісь кімнат</label>
                            <input type="text" name="number_rooms" class="form-control" id="number_rooms" placeholder="Ведіть кількість кімнат" style="float: right; width: 250px">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="user_id">Ім'я</label>
                        <select class="custom-select mr-sm-2" name="user_id" id="user_id">
                                <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="information">Додаткова інформація</label>
                        <textarea name="information" class="form-control" id="information" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="remember" value="">
                        <input type="checkbox" name="remember" value="" id="remember">
                        <label for="remember">Запамятати мане</label>
                    </div>
                    <button type="submite" class="btn btn-primary">Опублікувати</button>
            </form>
        </div>
    </div>
    </div>
@stop