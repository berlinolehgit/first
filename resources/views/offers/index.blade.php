@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="users-tables-group">
            @foreach($offers as $offer)
                <div class="table-users-row">
                    <div class="table-user">
                        <div class="table-header-blue clearfix">
                        <span class="right">
                            <a href="{{route('offers.edit',$offer)}}" class=" action" style="color: white">Редагувати оголошення</a>
                            <a href="{{route('offers.delete',$offer)}}" class="action" style="color: white; padding-left: 20px;">Видалити</a>
                        </span>
                        </div>

                        <div class="tale-user-body clearfix">
                            <table class="user-details">
                                <tbody>
                                <tr>
                                    <td>Тип об'єкта</td>
                                    <td>{{$offer->type_object}}</td>
                                </tr>
                                <tr>
                                    <td>Ціна</td>
                                    <td>{{$offer->price}}</td>
                                    <td style="font-weight: bold;">{{$offer->type_price}}</td>
                                </tr>
                                <tr>
                                    <td>Вказати тип стін</td>
                                    <td>{{$offer->type_wall}}</td>
                                </tr>
                                <tr>
                                    <td>Кількісь кімнат</td>
                                    <td>{{$offer->number_rooms}}</td>
                                </tr>
                                <tr>
                                    <td >Ім'я користувача</td>
                                    <td style="">{{$offer->user_id}}</td>
                                </tr>
                                <tr>
                                    <td>Телефон</td>
                                    <td>{{$offer->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Збереження даних</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Додаткова інформація</td>
                                    <td>{{$offer->information}}</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop