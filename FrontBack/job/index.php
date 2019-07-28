<?php
require 'connection.php';
require 'session.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<script src="https://api-maps.yandex.ru/2.1/?apikey=06e6730c-4654-4477-909e-c30ec4824b26&lang=ru_RU" type="text/javascript">
	</script>

	<title>Clean Rout</title>

	<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init()
    { 
        // Создание карты.    
        myMap = new ymaps.Map("map", 
        {
        	center: [55.76, 37.64],
        	zoom: 10
        });


glyphIcon1 = new ymaps.Placemark([55.684, 37.7386], {}, {
	iconLayout: 'default#image',
    iconImageHref: 'img/home1.png',
    iconImageSize: [30, 30],
    iconImageOffset: [-3, -42]
}); 



glyphIcon2 = new ymaps.Placemark([55.624, 37.7313], {}, {
	iconLayout: 'default#image',
    iconImageHref: 'img/home2.png',
    iconImageSize: [30, 30],
    iconImageOffset: [-3, -42]
}); 


glyphIcon3 = new ymaps.Placemark([55.624, 37.7783], {}, {
	iconLayout: 'default#image',
    iconImageHref: 'img/home3.png',
    iconImageSize: [30, 30],
    iconImageOffset: [-3, -42]
});

glyphIcon4 = new ymaps.Placemark([55.624, 37.7783], {}, {
	iconLayout: 'default#image',
    iconImageHref: 'img/home3.png',
    iconImageSize: [30, 30],
    iconImageOffset: [-3, -42]
}); 

glyphIcon5 = new ymaps.Placemark([54.924, 37.5783], {}, {
	iconLayout: 'default#image',
    iconImageHref: 'img/gas.png',
    iconImageSize: [30, 30],
    iconImageOffset: [-3, -42]
}); 

glyphIcon6 = new ymaps.Placemark([55.61, 37.45], {}, {
	iconLayout: 'default#image',
    iconImageHref: 'img/gas.png',
    iconImageSize: [30, 30],
    iconImageOffset: [-3, -42]
}); 

glyphIcon7 = new ymaps.Placemark([55.624, 37.283], {}, {
	iconLayout: 'default#image',
    iconImageHref: 'img/gas.png',
    iconImageSize: [30, 30],
    iconImageOffset: [-3, -42]
}); 

glyphIcon8 = new ymaps.Placemark([55.532, 37.5783], {}, {
	iconLayout: 'default#image',
    iconImageHref: 'img/gas.png',
    iconImageSize: [30, 30],
    iconImageOffset: [-3, -42]
}); 

glyphIcon9 = new ymaps.Placemark([55.524, 37.9783], {}, {
	iconLayout: 'default#image',
    iconImageHref: 'img/gas.png',
    iconImageSize: [30, 30],
    iconImageOffset: [-3, -42]
});  


var multiRoute1 = new ymaps.multiRouter.MultiRoute({
    referencePoints: 
    [
        [55.624, 37.7783],
        [55.835, 37.4],
        [55.61, 37.45],
        [55.684, 37.7386]
    ],
        // Параметры маршрутизации.
        params: {

            // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
            results: 1
        }
    }, {
        // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
        boundsAutoApply: true,
    // Внешний вид линии активного маршрута.
    routeActiveStrokeWidth: 1,
    routeActiveStrokeStyle: 'solid',
    routeActiveStrokeColor: "#002233",
    });

var multiRoute2 = new ymaps.multiRouter.MultiRoute({
    referencePoints: 
    [
        [55.624, 37.7313],
        [55.61, 37.45],
        [55.612, 37.32],
        [55.624, 37.7313]
    ],
        // Параметры маршрутизации.
        params: {
            // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
            results: 1
        }
    }, {
        // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
        boundsAutoApply: true,
    // Внешний вид линии активного маршрута.
    routeActiveStrokeWidth: 1,
    routeActiveStrokeStyle: 'solid',
    routeActiveStrokeColor: "#e60000",
    });


var multiRoute3 = new ymaps.multiRouter.MultiRoute({
    referencePoints: 
    [
        [55.624, 37.7313],
        "Привольная 12",
        [55.624, 37.283],
        [55.624, 37.7313]
    ], 
        // Параметры маршрутизации.
        params: {
            // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
            results: 1
        }
    }, {
        // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
            routeActiveStrokeWidth: 1,
    routeActiveStrokeStyle: 'solid',
        boundsAutoApply: true
    });

// Добавление маршрута на карту


        myMap.geoObjects.add(glyphIcon1);
        myMap.geoObjects.add(glyphIcon2);
        myMap.geoObjects.add(glyphIcon3);
        myMap.geoObjects.add(glyphIcon4);
        myMap.geoObjects.add(glyphIcon5);
        myMap.geoObjects.add(glyphIcon6);
        myMap.geoObjects.add(glyphIcon7);
        myMap.geoObjects.add(glyphIcon8);
        myMap.geoObjects.add(glyphIcon9);
        myMap.geoObjects.add(multiRoute1);
        myMap.geoObjects.add(multiRoute2);
        myMap.geoObjects.add(multiRoute3);/*
        myMap.geoObjects.add(multiRoute4);/*
        myMap.geoObjects.add(multiRoute5);/*
        myMap.geoObjects.add(multiRoute6);/*
        myMap.geoObjects.add(multiRoute7);/*
        myMap.geoObjects.add(multiRoute8);/*
        myMap.geoObjects.add(multiRoute9);/*
        myMap.geoObjects.add(multiRoute10);*/

            multiRoute1.model.events.once("requestsuccess", function () 
        {   
            var yandexWayPoint1 = multiRoute1.getWayPoints().get(0);            
            yandexWayPoint1.properties.set({myPosition: "Стоянка"});
            yandexWayPoint1.options.set(
                {                
                    iconContentLayout: ymaps.templateLayoutFactory.createClass('РосТранс 13')            
                });

            var yandexWayPoint2 = multiRoute1.getWayPoints().get(1);            
            yandexWayPoint2.properties.set({myPosition: "Цель"});
            yandexWayPoint2.options.set(
                {                
                    iconContentLayout: ymaps.templateLayoutFactory.createClass('Необходимо полить')            
                });     

            var yandexWayPoint3 = multiRoute1.getWayPoints().get(2);            
            yandexWayPoint3.properties.set({myPosition: "Цель"});
            yandexWayPoint3.options.set(
                {                
                    iconContentLayout: ymaps.templateLayoutFactory.createClass('Заправка')            
                });     
        });

        multiRoute2.model.events.once("requestsuccess", function () 
        {   
            var yandexWayPoint1 = multiRoute2.getWayPoints().get(0);            
            yandexWayPoint1.properties.set({myPosition: "Стоянка"});
            yandexWayPoint1.options.set(
                {                
                    iconContentLayout: ymaps.templateLayoutFactory.createClass('Чистый город 21')            
                });

            var yandexWayPoint2 = multiRoute2.getWayPoints().get(1);            
            yandexWayPoint2.properties.set({myPosition: "Цель"});
            yandexWayPoint2.options.set(
                {                
                    iconContentLayout: ymaps.templateLayoutFactory.createClass('Необходимо подмести')            
                });     

            var yandexWayPoint3 = multiRoute2.getWayPoints().get(2);            
            yandexWayPoint3.properties.set({myPosition: "Цель"});
            yandexWayPoint3.options.set(
                {                
                    iconContentLayout: ymaps.templateLayoutFactory.createClass('Заправка')            
                });     
        });
multiRoute3.model.events.once("requestsuccess", function () 
        {   
            var yandexWayPoint1 = multiRoute3.getWayPoints().get(0);            
            yandexWayPoint1.properties.set({myPosition: "Стоянка"});
            yandexWayPoint1.options.set(
                {                
                    iconContentLayout: ymaps.templateLayoutFactory.createClass('Чистиник 8')            
                });

            var yandexWayPoint2 = multiRoute3.getWayPoints().get(1);            
            yandexWayPoint2.properties.set({myPosition: "Цель"});
            yandexWayPoint2.options.set(
                {                
                    iconContentLayout: ymaps.templateLayoutFactory.createClass('Заправка')            
                });     

            var yandexWayPoint3 = multiRoute3.getWayPoints().get(2);            
            yandexWayPoint3.properties.set({myPosition: "Цель"});
            yandexWayPoint3.options.set(
                {                
                    iconContentLayout: ymaps.templateLayoutFactory.createClass('Необходимо подмести')            
                });     
        });
/**/

    }

    function point_creator()
    {
    	myPlacemark2 = new ymaps.Placemark([55.76, 37.56], 
    	{
    		hintContent: "Собственный значок метки"

    	}, 
    	{
    		iconImageHref: "images/myIcon.gif",
    		iconImageSize: [30, 42],
    		iconImageOffset: [-3, -42]

    	});				
    	myMap.geoObjects.add(myPlacemark2);
    	
    }
    </script>

</head>
<body>


	<div id="page">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid col-md-11">
				<div class="navbar-header">
					<button type="button" class="topic navbar-toggle logob btn btn-primary" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<img src="img/logo.png" class="logo">
					</button>
					
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="aref" href="#">Управление</a></li>
						<li><a class="aref" href="#">Техника</a></li>
						<li><a class="aref" href="#">Задачи</a></li>
						<li><a class="aref" href="#">Связь</a></li>
					</ul>
				</div>
			</div>
			<div id="extwaiimpotscp" style="display:none" v="{3596" f="ZXpNMU9UWm1PREV3TFdKbU5UQXRORGRsTWkxaU5UUmhMVEl4TWpobFltUmpOVEUzT1gwPQ==" q="24196ffa" c="41.30" i="48.27" u="17.01" s="19060320" w="false" m="BMe=" vn="adgrd"></div>
			<div class="login col-md-1">
				<button type="button" class="topic navbar-toggle here btn btn-primary">
					<p>Учетная запись</p>
				</button>
			</div>
		</div>

		<article>
			<form action="dashboard.php">
				<div class="container">

					<div class="row">
						<div id="map" class="col-md-9">	
						</div>

						<div class="calendar col-md-3">
							<input type="date" class="form-control" id="date" name="date" placeholder="Дата" required>
							<div class="progress">

								<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 23%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">23%</div>
							</div>
							<div class="center">
								Задачи по плану:
								
								
								
							</div>
							<div class="left">
								1. Сухая уборка улиц у стороны Хованского кладбища
							</div>
							<div class="left">
								2. Сухая уборка улиц по боровскому шоссе
	
							</div>
							<div class="left">
								3. Уборка Юго-Запада МКАДа	
							</div>
						</div>
						
					</div>
					
					
					<div class="row">
						<div class="listresources col-md-6">
							<h4 class="center" >Список техники</h4>				
							<table>
<tr>
	<th>Компания</th>
	<th>Название</th>
	<th>Инвентарный номер</th>
	<th>Оборудование</th>
	<th>Номер оборудования</th>
</tr> <!--ряд с ячейками заголовков-->
<tr>
	<td>РосТранс</td>
	<td>Трактор</td>
	<td>13</td>
	<td>Подметатели</td>
	<td>2</td>
</tr> <!--ряд с ячейками тела таблицы-->
<tr>
	<td>Чистиник</td>
	<td>Водополивщик</td>
	<td>8</td>
	<td>Подметатели</td>
	<td>6</td>
</tr> <!--ряд с ячейками тела таблицы-->
<tr>
	<td>Чистый город</td>
	<td>Трактор</td>
	<td>21</td>
	<td>Подметатели</td>
	<td>4</td>
</tr> <!--ряд с ячейками тела таблицы-->
</table>
							




						</div>

						<div class="listplans col-md-3">
							<h4 class="center" >План</h4>	
							<button type="submit" class="btn btn-primary">Рассчитать</button>

							<button type="submit" class="btn btn-primary">Принять</button>
						</div>

						<div class="descriptionresource col-md-3"">
							<h4 class="center" ></h4>
						</div>
					</div>

				</div>

			</form>

		</article>

		<footer>
			<div class="center">void*</div>

		</footer>

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>