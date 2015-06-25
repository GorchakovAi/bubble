<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('/js/jquery-latest.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.file-input.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
    <style>
        body {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 9pt; /* Размер шрифта в пунктах */
        }
    </style>


</head>
<body>

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Редактор сайта</h1></div>

            <div class="panel-body">

                <div class="row">
                    <div class="col-md-4">
                        <h2>Ссылки</h2>
                        <p>
                            {!! Form::open(array('action' => 'AdminController@postUpdatePageInfo')) !!}
                        <div class="form-group">
                            {!! Form::label('url_vk', 'Ссылка VK.COM')!!}
                            {!! Form::text('url_vk',null,array('class' => 'form-control','id'=>'pi_h1')) !!}

                            {!! Form::label('url_fb', 'Ссылка FaceBook')!!}
                            {!! Form::text('url_fb',null,array('class' => 'form-control','id'=>'pi_h2')) !!}

                            {!! Form::label('url_twitter', 'Ссылка Twitter')!!}
                            {!! Form::text('url_twitter',null,array('class' => 'form-control','id'=>'pi_h3')) !!}

                            {!! Form::label('url_gp', 'Ссылка Google+')!!}
                            {!! Form::text('url_gp',null,array('class' => 'form-control','id'=>'pi_h4')) !!}
                        </div>
                        {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                        {!! Form::close() !!}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h2>О Компании</h2>
                        <p>
                            {!! Form::open(array('action' => 'AdminController@postUpdateAboutCompany', 'files' => true)) !!}
                        <div class="form-group">

                            {!! Form::file('url_img',array('title' => 'Выбрать картинку')) !!}<br>

                            {!! Form::label('description', 'Описание')!!}
                            {!! Form::textarea('description',null,array('class' => 'form-control', 'rows'=>'13','id'=>'ac_h2')) !!}


                        </div>
                        {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                        {!! Form::close() !!}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h2>Шапка</h2>
                        <p>
                            {!! Form::open(array('action' => 'AdminController@postUploadHead', 'files' => true)) !!}
                        <div class="form-group">
                            {!! Form::file('url_logo',array('title' => 'Выбрать логотип')) !!}
                        </div>
                        {!! Form::submit('Изменить',array('class' => 'form-control'))!!}
                        {!! Form::close() !!}
                        </p>

                        <h2>Акции</h2>
                        <p>
                            {!! Form::open(array('action' => 'AdminController@postUpdatePageInfo')) !!}
                        <div class="form-group">
                            {!! Form::label('h1', 'Первый заголовок')!!}
                            {!! Form::text('h1',null,array('class' => 'form-control')) !!}

                            {!! Form::label('h2', 'Второй заголовок')!!}
                            {!! Form::text('h2',null,array('class' => 'form-control')) !!}

                            {!! Form::label('DeadLine', 'Срок окончания акции')!!}
                            {!! Form::text('DeadLine',null,array('class' => 'form-control')) !!}

                        </div>
                        {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                        {!! Form::close() !!}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12" >
                        <h2>Каталог
                            <button class="btn btn-default btn-sm" data-target="#catalog_add_design_name" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span></button>
                            <button class="btn btn-default btn-sm" data-target="#catalog_edit_design_name" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span></button>
                        </h2>
                        <div class="btn-group-justified " ></div>
                        <div class="btn-group" id="cat_container"></div><br><br>
                        <div class="col-md-12" id="catalog_row"> </div>
                    </div>
                </div>
<hr>
                <div class="row">
                    <div class="col-md-12" >
                        <h2>Галерея <button type="button" data-target="#gallery_add_pic" data-toggle="modal" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></h2>
                        <div class="col-md-12" id="galerey_container"></div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12" >
                        <h2>Партнеры
                            <button class="btn btn-default btn-sm" data-target="#partner_add" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span></button>
                        </h2>
                        <div class="col-md-12" id="partner_container"></div>
                    </div>
                </div>

                <!-- Modal Remove Catalog -->
                <div class="modal fade" id="catalog_remove" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Удалить товар</h4>
                            </div>
                            <div class="modal-body" id="catalog_remove_b"></div>
                            <div class="modal-footer">
                                {!! Form::open(array('action' => 'AdminController@postRemoveCardProduct')) !!}
                                {!! Form::hidden('id',null,array('id'=>'phr_id')) !!}

                                {!! Form::submit('Удалить',array('class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit Catalog-->
                <div class="modal fade" id="catalog_edit" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Изменить карточку товара</h4>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(array('action' => 'AdminController@postUpdateCardProduct', 'files' => true)) !!}
                                <div class="form-group">
                                    {{--<img id="up_catalog_img">--}}
                                    {!! Form::hidden('id',null,array('id'=>'ph_id')) !!}
                                    {!! Form::file('url_img',array('title' => 'Выбрать картинку')) !!}<br>

                                    {!! Form::label('title', 'Название')!!}
                                    {!! Form::text('title',null,array('class' => 'form-control','id'=>'up_d_title')) !!}


                                    {!! Form::label('catalog_id', 'Каталог')!!}
                                    {!! Form::select('catalog_id', array(),null,array('class' => 'form-control','id'=>'up_catalog_id')) !!}

                                    {!! Form::label('description', 'Описание')!!}
                                    {!! Form::textarea('description',null,array('class' => 'form-control', 'rows'=>'9','id'=>'up_description_id')) !!}
                                </div>
                                {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                                {!! Form::close() !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Gallery-->
                <div class="modal fade" id="gallery_edit" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Изменить фотографию</h4>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(array('action' => 'AdminController@postUpdatePicture', 'files' => true)) !!}
                                <div class="form-group">
                                    {{--<img id="up_catalog_img">--}}
                                    {!! Form::hidden('id',null,array('id'=>'pg_id')) !!}
                                    {!! Form::file('url_img',array('title' => 'Выбрать картинку')) !!}<br>

                                    {!! Form::label('title', 'Название')!!}
                                    {!! Form::text('title',null,array('class' => 'form-control','id'=>'up_g_title')) !!}

                                </div>
                                {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                                {!! Form::close() !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Remove Gallery -->
                <div class="modal fade" id="gallery_remove" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Удалить картинку</h4>
                            </div>
                            <div class="modal-body" id="gallery_remove_b"></div>
                            <div class="modal-footer">
                                {!! Form::open(array('action' => 'AdminController@postRemovePicture')) !!}
                                {!! Form::hidden('id',null,array('id'=>'ghr_id')) !!}

                                {!! Form::submit('Удалить',array('class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit Design Name -->
                <div class="modal fade" id="catalog_edit_design_name" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Изменить названия</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    {!! Form::open(array('action' => 'AdminController@postUpdateFinishedDesign')) !!}
                                <div class="form-group">
                                    {!! Form::label('h1', 'Заголовок 1')!!}
                                    {!! Form::text('h1',null,array('class' => 'form-control','id'=>'fd_h1')) !!}

                                    {!! Form::label('h2', 'Заголовок 2')!!}
                                    {!! Form::text('h2',null,array('class' => 'form-control','id'=>'fd_h2')) !!}

                                    {!! Form::label('h3', 'Заголовок 3')!!}
                                    {!! Form::text('h3',null,array('class' => 'form-control','id'=>'fd_h3')) !!}

                                    {!! Form::label('h4', 'Заголовок 4')!!}
                                    {!! Form::text('h4',null,array('class' => 'form-control','id'=>'fd_h4')) !!}

                                    {!! Form::label('h5', 'Заголовок 5')!!}
                                    {!! Form::text('h5',null,array('class' => 'form-control','id'=>'fd_h5')) !!}

                                    {!! Form::label('h6', 'Заголовок 6')!!}
                                    {!! Form::text('h6',null,array('class' => 'form-control','id'=>'fd_h6')) !!}

                                    {!! Form::label('h7', 'Заголовок 7    ')!!}
                                    {!! Form::text('h7',null,array('class' => 'form-control','id'=>'fd_h7')) !!}

                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Design -->
                <div class="modal fade" id="catalog_add_design_name" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Добавить товар</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    {!! Form::open(array('action' => 'AdminController@postAddPDesign', 'files' => true)) !!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Название')!!}
                                    {!! Form::text('title',null,array('class' => 'form-control')) !!}

                                    <br>
                                    {!! Form::file('url_img',array('title' => 'Выбрать картинку')) !!}<br>

                                    {!! Form::label('catalog_id', 'Каталог')!!}
                                    {!! Form::select('catalog_id', array(),null,array('class' => 'form-control','id'=>'catalog_id')) !!}

                                    {!! Form::label('description', 'Описание')!!}
                                    {!! Form::textarea('description',null,array('class' => 'form-control', 'rows'=>'9')) !!}


                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::submit('Добавить',array('class' => 'form-control'))!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Pic -->
                <div class="modal fade" id="gallery_add_pic" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Изменить названия</h4>
                            </div>
                            <div class="modal-body">
                                <h3>Добавить картинку</h3>
                                <p>
                                    {!! Form::open(array('action' => 'AdminController@postAddPicture', 'files' => true)) !!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Название')!!}
                                    {!! Form::text('title',null,array('class' => 'form-control')) !!}

                                    <br>
                                    {!! Form::file('url_img',array('title' => 'Выбрать картинку')) !!}<br>
                                </div>
                                </p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::submit('Добавить',array('class' => 'form-control'))!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Partner -->
                <div class="modal fade" id="partner_add" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Добавить партнера</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    {!! Form::open(array('action' => 'AdminController@postAddPartners', 'files' => true)) !!}
                                <div class="form-group">
                                    {!! Form::label('title', 'Название')!!}
                                    {!! Form::text('title',null,array('class' => 'form-control')) !!}
                                    <br>
                                    {!! Form::file('url_img',array('title' => 'Выбрать картинку')) !!}<br>
                                </div>
                                </p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::submit('Добавить',array('class' => 'form-control'))!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit Partner -->
                <div class="modal fade" id="partner_edit" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Изменить партнера</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    {!! Form::open(array('action' => 'AdminController@postEditPartners', 'files' => true)) !!}
                                <div class="form-group">
                                    {!! Form::hidden('id',null,array('id'=>'partner_id')) !!}
                                    {!! Form::label('title', 'Название')!!}
                                    {!! Form::text('title',null,array('class' => 'form-control','id'=>'partner_title')) !!}
                                    <br>
                                    {!! Form::file('url_img',array('title' => 'Выбрать картинку')) !!}<br>
                                </div>
                                </p>
                            </div>
                            <div class="modal-footer">
                                {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Remove Gallery -->
                <div class="modal fade" id="partner_remove" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Удалить картинку</h4>
                            </div>
                            <div class="modal-body" id="partner_remove_b"></div>
                            <div class="modal-footer">
                                {!! Form::open(array('action' => 'AdminController@postRemovePartners')) !!}
                                {!! Form::hidden('id',null,array('id'=>'partner_id_r')) !!}

                                {!! Form::submit('Удалить',array('class' => 'btn btn-default'))!!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<script>
    $( document ).ready(function() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var z = 1;
        var cat_container = $("#cat_container");
        $('input[type=file]').bootstrapFileInput();
        postCatalogDesign();
        ListPageInfo();
        ListFinishedDesign();
        AboutCompany();
        Partners();
        Gallery();

        //Загрузка страницы
        function AboutCompany() {
            $.ajax({
                type: "POST",
                url: "{{ action('AdminController@postAboutCompany') }}",
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (data) {
                    $("#ac_h2").html(data['description']);
                }
            });
        }
        function Partners(){
            $.ajax({
                type: "POST",
                url: "{{ action('AdminController@postPartners') }}",
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (data) {
                    $.each(data, function(i, item) {
                        var caption = $("<div>", {
                            "class": "caption",
                            html: "<h4>"+item['title']+"</h4>"
                        });
                        var button_edit = $("<button>",{
                            "type":"button",
                            "class":"btn btn-default btn-sm",
                            "data-target":"#partner_edit",
                            "data-toggle":"modal",
                            click:function(){
                                var up_catalog_id = "#up_catalog_id [value='"+item['catalog_id']+"']";
                                $('#partner_title').attr("value",item['title']);
                                $('#partner_id').val(item['id']);
                            }
                        });
                        var button_remove = $("<button>",{
                            "type":"button",
                            "class":"btn btn-default btn-sm",
                            "data-target":"#partner_remove",
                            "data-toggle":"modal",
                            click:function(){
                                $('#partner_id_r').val(item['id']);
                                $("#partner_remove_b").html("Точно удалить '"+item['title']+"' ?");
                            }
                        });
                        $("<span>", {"class":"glyphicon glyphicon-edit"}).appendTo(button_edit);
                        $("<span>", {"class":"glyphicon glyphicon-remove-sign"}).appendTo(button_remove);
                        button_edit.appendTo(caption);
                        button_remove.appendTo(caption);
                        var thumbnail = $("<div>", {
                            "class": "thumbnail",
                            html: "<img src='{{asset('media/img/partners/')}}/"+item['url_img']+"'>"
                        });
                        var nail = $("<div>", {
                            "class": "col-md-2"
                        });
                        nail.append(thumbnail.append(caption)).appendTo("#partner_container");
                    });
                }
            });
        }
        function Gallery() {
            $.ajax({
                type: "POST",
                url: "{{ action('AdminController@postGallery') }}",
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (data) {
                    $.each(data, function (i, item) {
                        var caption = $("<div>", {
                            "class": "caption",
                            html: "<h4>" + item['title'] + "</h4>"
                        });
                        var button_edit = $("<button>", {
                            "type": "button",
                            "class": "btn btn-default btn-sm",
                            "data-target": "#gallery_edit",
                            "data-toggle": "modal",
                            click: function () {
                                $('#up_g_title').attr("value", item['title']);
                                $('#pg_id').val(item['id']);
                                $('#ug_catalog_img')
                                        .attr("src", "{{asset('media/img/catalog/')}}/" + item['url_img'])
                                        .attr("style", "width: 100%")
                                        .addClass('img-rounded');
                            }
                        });
                        var button_remove = $("<button>", {
                            "type": "button",
                            "class": "btn btn-default btn-sm",
                            "data-target": "#gallery_remove",
                            "data-toggle": "modal",
                            click: function () {
                                $('#ghr_id').val(item['id']);
                                $("#gallery_remove_b").html("Точно удалить '" + item['title'] + "' ?");
                            }
                        });
                        $("<span>", {"class": "glyphicon glyphicon-edit"}).appendTo(button_edit);
                        $("<span>", {"class": "glyphicon glyphicon-remove-sign"}).appendTo(button_remove);
                        button_edit.appendTo(caption);
                        button_remove.appendTo(caption);
                        var thumbnail = $("<div>", {
                            "class": "thumbnail",
                            html: "<img src='{{asset('media/img/gallery/')}}/" + item['url_img'] + "'>"
                        });
                        var nail = $("<div>", {
                            "class": "col-md-2"
                        });
                        nail.append(thumbnail.append(caption)).appendTo("#galerey_container");
                    });

                }
            });
        }
        function ListFinishedDesign() {
            $.ajax({
                type: "POST",
                url: "{{ action('AdminController@postListFinishedDesign') }}",
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (data) {
                    $("<button>", {
                        "class": "btn btn-default",
                        text: "Все товары",
                        click: postCatalogDesign
                    }).appendTo(cat_container);
                    $.each(data, function (i, item) {
                        $('#catalog_id').append($('<option>', {
                            value: item['id'],
                            text: item['title']
                        }));
                        $('#up_catalog_id').append($('<option>', {
                            value: item['id'],
                            text: item['title']
                        }));
                        $("#fd_h" + z).attr("value", item['title']);
                        $("<button>", {
                            "class": "btn btn-default",
                            text: item['title'],
                            click: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "{{ action('AdminController@postCatalogs') }}" + "/" + item['id'],
                                    data: {_token: CSRF_TOKEN},
                                    dataType: 'JSON',
                                    success: function (data) {
                                        $("#catalog_row").empty();
                                        $.each(data, function (i, item) {
                                            var caption = $("<div>", {
                                                "class": "caption",
                                                html: "<h4>" + item['title'] + "</h4>"
                                            });
                                            var button_edit = $("<button>", {
                                                "type": "button",
                                                "class": "btn btn-default btn-sm",
                                                "data-target": "#catalog_edit",
                                                "data-toggle": "modal",
                                                click: function () {
                                                    var up_catalog_id = "#up_catalog_id [value='" + item['catalog_id'] + "']";
                                                    $('#up_d_title').attr("value", item['title']);
                                                    $(up_catalog_id).attr("selected", "selected");
                                                    $('#up_description_id').val(item['description']);
                                                    $('#ph_id').val(item['id']);
                                                    $('#phr_id').val(item['id']);
                                                    $('#up_catalog_img')
                                                            .attr("src", "{{asset('media/img/catalog/')}}/" + item['url_img'])
                                                            .attr("style", "width: 100%")
                                                            .addClass('img-rounded');
                                                }
                                            });
                                            var button_remove = $("<button>", {
                                                "type": "button",
                                                "class": "btn btn-default btn-sm",
                                                "data-target": "#catalog_remove",
                                                "data-toggle": "modal",
                                                click: function () {
                                                    $('#phr_id').val(item['id']);
                                                    $("#catalog_remove_b").html("Точно удалить '" + item['title'] + "' ?");
                                                }
                                            });
                                            $("<span>", {"class": "glyphicon glyphicon-edit"}).appendTo(button_edit);
                                            $("<span>", {"class": "glyphicon glyphicon-remove-sign"}).appendTo(button_remove);
                                            button_edit.appendTo(caption);
                                            button_remove.appendTo(caption);
                                            var thumbnail = $("<div>", {
                                                "class": "thumbnail",
                                                html: "<img src='{{asset('media/img/catalog/')}}/" + item['url_img'] + "'>"
                                            });
                                            var nail = $("<div>", {
                                                "class": "col-md-2"
                                            });
                                            nail.append(thumbnail.append(caption)).appendTo("#catalog_row");
                                        });
                                    }
                                });
                            }
                        }).appendTo(cat_container);
                        z++;
                    });
                }
            });
        }
        function ListPageInfo(){
            $.ajax({
                type: "POST",
                url: "{{ action('AdminController@postListPageInfo') }}",
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (data) {
                    $("#pi_h1").attr("value", data['url_vk']);
                    $("#pi_h2").attr("value", data['url_fb']);
                    $("#pi_h3").attr("value", data['url_twitter']);
                    $("#pi_h4").attr("value", data['url_gp']);
                }
            });
        }
        function postCatalogDesign(){
                $("#catalog_row").empty();
                $.ajax({
                    type: "POST",
                    url: "{{ action('AdminController@postCatalogDesign') }}",
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (data) {
                        $.each(data, function(i, item) {
                            var caption = $("<div>", {
                                "class": "caption",
                                html: "<h4>"+item['title']+"</h4>"
                            });
                            var button_edit = $("<button>",{
                                "type":"button",
                                "class":"btn btn-default btn-sm",
                                "data-target":"#catalog_edit",
                                "data-toggle":"modal",
                                click:function(){
                                    var up_catalog_id = "#up_catalog_id [value='"+item['catalog_id']+"']";
                                    $('#up_d_title').attr("value",item['title']);
                                    $(up_catalog_id).attr("selected", "selected");
                                    $('#up_description_id').val(item['description']);
                                    $('#ph_id').val(item['id']);
                                    $('#up_catalog_img')
                                            .attr("src","{{asset('media/img/catalog/')}}/"+item['url_img'])
                                            .attr("style","width: 100%")
                                            .addClass('img-rounded');
                                }
                            });
                            var button_remove = $("<button>",{
                                "type":"button",
                                "class":"btn btn-default btn-sm",
                                "data-target":"#catalog_remove",
                                "data-toggle":"modal",
                                click:function(){
                                    $('#phr_id').val(item['id']);
                                    $("#catalog_remove_b").html("Точно удалить '"+item['title']+"' ?");
                                }
                            });
                            $("<span>", {"class":"glyphicon glyphicon-edit"}).appendTo(button_edit);
                            $("<span>", {"class":"glyphicon glyphicon-remove-sign"}).appendTo(button_remove);
                            button_edit.appendTo(caption);
                            button_remove.appendTo(caption);
                            var thumbnail = $("<div>", {
                                "class": "thumbnail",
                                html: "<img src='{{asset('media/img/catalog/')}}/"+item['url_img']+"'>"
                            });
                            var nail = $("<div>", {
                                "class": "col-md-2"
                            });
                            nail.append(thumbnail.append(caption)).appendTo("#catalog_row");
                        });
                    }
                });
        }

    });
</script>
</div>

</body>
</html>
