<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

</head>
<body>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Редактор сайта</h1></div>

            <div class="panel-body">

                <div class="row">
                    <div class="col-md-4">
                        <h2>Медиа контент</h2>
                        <p>
                            {!! Form::open(array('action' => 'AdminController@postUpdatePageInfo')) !!}
                        <div class="form-group">
                            {!! Form::label('url_logo', 'Ссылка на логотип')!!}
                            {!! Form::text('url_logo',null,array('class' => 'form-control','id'=>'pi_h1')) !!}

                            {!! Form::label('url_video', 'Ссылка на видео')!!}
                            {!! Form::text('url_video',null,array('class' => 'form-control','id'=>'pi_h2')) !!}

                            {!! Form::label('url_vk', 'Ссылка VK.COM')!!}
                            {!! Form::text('url_vk',null,array('class' => 'form-control','id'=>'pi_h3')) !!}

                            {!! Form::label('url_fb', 'Ссылка FaceBook')!!}
                            {!! Form::text('url_fb',null,array('class' => 'form-control','id'=>'pi_h4')) !!}

                            {!! Form::label('url_twitter', 'Ссылка Twitter')!!}
                            {!! Form::text('url_twitter',null,array('class' => 'form-control','id'=>'pi_h5')) !!}

                            {!! Form::label('url_gp', 'Ссылка Google+')!!}
                            {!! Form::text('url_gp',null,array('class' => 'form-control','id'=>'pi_h6')) !!}
                        </div>
                        {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                        {!! Form::close() !!}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h2>О Компании</h2>
                        <p>
                            {!! Form::open(array('action' => 'AdminController@postUpdateAboutCompany')) !!}
                        <div class="form-group">
                            {!! Form::label('url_img', 'Ссылка на картинку')!!}
                            {!! Form::text('url_img',null,array('class' => 'form-control','id'=>'ac_h1')) !!}

                            {!! Form::label('description', 'Описание')!!}
                            {!! Form::textarea('description',null,array('class' => 'form-control', 'rows'=>'12','id'=>'ac_h2')) !!}


                        </div>
                        {!! Form::submit('Обновить',array('class' => 'form-control'))!!}
                        {!! Form::close() !!}
                        </p>
                    </div>
                    <div class="col-md-4">
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
                            {!! Form::open(array('action' => 'AdminController@postUpdateFinishedDesign')) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Название')!!}
                            {!! Form::text('title',null,array('class' => 'form-control')) !!}

                            {!! Form::label('url_img', 'Картинка')!!}
                            {!! Form::text('url_img',null,array('class' => 'form-control')) !!}

                            {!! Form::label('catalog_id', 'Каталог')!!}
                            {!! Form::text('catalog_id',null,array('class' => 'form-control')) !!}

                            {!! Form::label('description', 'Описание')!!}
                            {!! Form::textarea('description',null,array('class' => 'form-control', 'rows'=>'9')) !!}


                        </div>
                        {!! Form::submit('Добавить',array('class' => 'form-control'))!!}
                        {!! Form::close() !!}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Каталог</h2>

                        <div class="col-md-2">
                            <div class="btn-group-vertical" id="cat_container"></div>
                        </div>

                        <div class="col-md-9">
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img data-src="holder.js/300x200" alt="...">
                                    <div class="caption">
                                        <h3>Ярлык эскиза</h3>
                                        <p>...</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
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



        $.ajax({
            type: "POST",
            url: "{{ action('AdminController@postListFinishedDesign') }}",
            data: {_token: CSRF_TOKEN},
            dataType: 'JSON',
            success: function (data) {

                $("<button>", {
                    "class": "btn btn-default",
                    text: "Все",
                    click: function(){

                    }
                }).appendTo(cat_container);

                $.each(data, function(i, item) {
                    $("#fd_h"+z).attr("value", item);

                    $("<button>", {
                            "class": "btn btn-default",
                            text: item,
                            click: function(){

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

                $("#pi_h1").attr("value", data['url_logo']);
                $("#pi_h2").attr("value", data['url_video']);
                $("#pi_h3").attr("value", data['url_vk']);
                $("#pi_h4").attr("value", data['url_fb']);
                $("#pi_h5").attr("value", data['url_twitter']);
                $("#pi_h6").attr("value", data['url_gp']);



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
                            text: item
                        })

                    z++;
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
