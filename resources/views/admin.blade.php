<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>


    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('/js/jquery-latest.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.file-input.js') }}"></script>

</head>
<body>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Редактор сайта</h1><img height="200" src="{{ asset('/media/img/logo.png') }}"></div>

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
                    <div class="col-md-6">
                        <h2>Готовые оформления</h2>
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
                        {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                        {!! Form::close() !!}
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h2>Добавить товар</h2>
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
                        {!! Form::submit('Добавить',array('class' => 'form-control'))!!}
                        {!! Form::close() !!}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12" >
                        <h2>Каталог</h2>
                        <div class="btn-group-vertical col-md-3" id="cat_container"></div>
                        <div class="col-md-9" id="catalog_row"> </div>
                    </div>
                </div>
<hr>
                <div class="row">
                    <div class="col-md-12" >
                        <h2>Галерея</h2>
                        <div class="col-md-3" id="add_pic">
                            <h3>Добавить картинку</h3>
                            <p>
                                {!! Form::open(array('action' => 'AdminController@postAddPicture')) !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Название')!!}
                                {!! Form::text('title',null,array('class' => 'form-control')) !!}

                                {!! Form::label('url_img', 'Картинка')!!}
                                {!! Form::text('url_img',null,array('class' => 'form-control')) !!}

                                {!! Form::label('description', 'Описание')!!}
                                {!! Form::textarea('description',null,array('class' => 'form-control', 'rows'=>'9')) !!}


                            </div>
                            {!! Form::submit('Добавить',array('class' => 'form-control'))!!}
                            {!! Form::close() !!}
                            </p>
                        </div>
                        <div class="col-md-9" id="galerey_container"></div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12" >
                        <h2>Партнеры</h2>
                        <div class="col-md-3">
                            <h3>Добавить партнера</h3>
                            <p>
                                {!! Form::open(array('action' => 'AdminController@postAddPartners')) !!}
                            <div class="form-group">
                                {!! Form::label('title', 'Название')!!}
                                {!! Form::text('title',null,array('class' => 'form-control')) !!}

                                {!! Form::label('url_img', 'Картинка')!!}
                                {!! Form::text('url_img',null,array('class' => 'form-control')) !!}

                                {!! Form::label('description', 'Описание')!!}
                                {!! Form::textarea('description',null,array('class' => 'form-control', 'rows'=>'9')) !!}


                            </div>
                            {!! Form::submit('Добавить',array('class' => 'form-control'))!!}
                            {!! Form::close() !!}
                            </p>
                        </div>
                        <div class="col-md-9" id="partner_container"></div>
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
                    $("<span>", {
                        "class":"glyphicon glyphicon-edit"
                    }).appendTo(caption);
                    $("<span>", {
                        "class":"glyphicon glyphicon-remove-sign"
                    }).appendTo(caption);
                    var thumbnail = $("<div>", {
                        "class": "thumbnail",
                        html: "<img src='"+item['url_img']+"'>"
                    });
                    var nail = $("<div>", {
                        "class": "col-md-2"
                    });
                    nail.append(thumbnail.append(caption)).appendTo("#partner_container");
                });
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ action('AdminController@postGallery') }}",
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
            success: function (data) {
                $.each(data, function(i, item) {
                    var caption = $("<div>", {
                        "class": "caption",
                        html: "<h4>"+item['title']+"</h4>"
                    });
                    $("<span>", {
                        "class":"glyphicon glyphicon-edit"
                    }).appendTo(caption);
                    $("<span>", {
                        "class":"glyphicon glyphicon-remove-sign"
                    }).appendTo(caption);
                    var thumbnail = $("<div>", {
                        "class": "thumbnail",
                        html: "<img src='"+item['url_img']+"'>"
                    });
                    var nail = $("<div>", {
                        "class": "col-md-2"
                    });
                    nail.append(thumbnail.append(caption)).appendTo("#galerey_container");
                });
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ action('AdminController@postListFinishedDesign') }}",
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
            success: function (data) {
                $("<button>", {
                    "class": "btn btn-default",
                    text: "Все товары",
                    click: function(){
                        $.ajax({
                            type: "POST",
                            url: "{{ action('AdminController@postCatalogDesign') }}",
                            data: {_token: CSRF_TOKEN},
                            dataType: 'JSON',
                            success: function (data) {
                                $("#catalog_row").empty();
                                $.each(data, function(i, item) {
                                    var caption = $("<div>", {
                                        "class": "caption",
                                        html: "<h4>"+item['title']+"</h4>"
                                    });
                                    $("<span>", {
                                        "class":"glyphicon glyphicon-edit"
                                    }).appendTo(caption);
                                    $("<span>", {
                                        "class":"glyphicon glyphicon-remove-sign"
                                    }).appendTo(caption);
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
                }).appendTo(cat_container);
                $.each(data, function(i, item) {

                    $('#catalog_id').append($('<option>', {
                        value: item['id'],
                        text: item['title']
                    }));

                    $("#fd_h"+z).attr("value", item['title']);
                    $("<button>", {
                            "class": "btn btn-default",
                            text: item['title'],
                            click: function(){
                                $.ajax({
                                    type: "POST",
                                    url: "{{ action('AdminController@postCatalogs') }}"+"/"+item['id'],
                                    data: {_token: CSRF_TOKEN},
                                    dataType: 'JSON',
                                    success: function (data) {
                                        $("#catalog_row").empty();
                                        $.each(data, function(i, item) {
                                            var caption = $("<div>", {
                                                "class": "caption",
                                                html: "<h4>"+item['title']+"</h4>"
                                            });
                                            $("<span>", {
                                                "class":"glyphicon glyphicon-edit"
                                            }).appendTo(caption);
                                            $("<span>", {
                                                "class":"glyphicon glyphicon-remove-sign"
                                            }).appendTo(caption);
                                            var thumbnail = $("<div>", {
                                                "class": "thumbnail",
                                                html: "<img src='{{asset('media/img/catalog/')}}/"+item['url_img']+"'>"
                                            });
                                            var nail = $("<div>", {
                                                "class": "col-md-2"
                                            });
                                            nail.append(thumbnail.append(caption)).appendTo("#catalog_row");
                                        });
                                    }});
                            }
                        }).appendTo(cat_container);
                    z++;
                });
            }
        });
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
                    $("<span>", {
                        "class":"glyphicon glyphicon-edit"
                    }).appendTo(caption);
                    $("<span>", {
                        "class":"glyphicon glyphicon-remove-sign"
                    }).appendTo(caption);
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
        $.ajax({
            type: "POST",
            url: "{{ action('AdminController@postAboutCompany') }}",
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
            success: function (data) {
                $("#ac_h1").attr("value", data['url_img']);
                $("#ac_h2").html(data['description']);
            }
        });
    });
</script>
</body>
</html>
