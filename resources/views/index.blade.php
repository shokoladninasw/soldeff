@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <main>
        <div class="first-list">

        
        <div class="rectangle">
        <div class="rectangle-text">
           <h1>Форум</h1> 
           <h2>для обмена опыта использования паяльных устройств.</h2>
        <button>  <a href="{{ route('forum') }}">Перейти в форум</a></button>

           
    </div>
        </div>
    </div>

   <div class="blue-paddings">
   <h2> Что такое паяльник?</h2> <div class="img-text">
   <p><span class="red"> Паяльник</span>  — ручной инструмент, применяемый при лужении и пайке для нагрева деталей, флюса, расплавления припоя и внесения его в место контакта спаиваемых деталей.
    Рабочая часть паяльника, обычно называемая жалом, нагревается пламенем (например, от паяльной лампы) или электрическим током.
</p> 
<img src="../img/image 1.jpg" alt="фотография паяльника"></div>


<h2>Что такое флюс?</h2><div class="img-text">


    <img src="../img/image 2.jpg" alt="фотография паяльника">    
    <p><span class="red"> Флюс </span>(лат. Fluxus — поток, течение) — вещества (чаще смесь) органического и неорганического происхождения, предназначенные для удаления оксидов с паяемых или свариваемых поверхностей, снижения поверхностного натяжения и улучшения растекания жидкого припоя и/или защиты от действия окружающей среды.
</p></div>


<h2>Что такое припой?</h2><div class="img-text">
<p><span class="red"> Припо́й</span> — материал, применяемый при пайке для соединения заготовок и имеющий температуру плавления ниже, чем соединяемые металлы. Применяют сплавы на основе олова, свинца, никеля, кадмия, меди, серебра и другие металлы.
</p>
<img src="../img/image 3.jpg" alt="фотография паяльника"></div>


<h2>Зачем нужна губка для паяльника?</h2><div class="img-text">

<img src="../img/image 4.jpg" alt="фотография паяльника">
<p><span class="red"> Губки</span> для очистки жал выполняют две основные функции: Удаление окислов с поверхности жала и удаление избытков припоя. Губки произведены из чистой целлюлозы (натуральный лесохимический продукт).
</p></div>

<h2>Виды жал для паяльника</h2>


<p> 


<div class="img-text">  <img src="../img/image 5.png" alt="схема 'жало паяльника'">
    <p> 
    900M-T-I – узкое коническое жало, подходящее для пайки маленьких элементов и работы с компактными печатными платами, имеющими высокую плотность расположения элементов.
</p> </div><div class="img-text"><img src="../img/image 6.png" alt="схема 'жало паяльника'">
    <p> 
    900M-T-B – коническое жало круглого сечения, позволяющее паять под удобным вам углом как крупные, так и мелкие элементы.
</p> </div><div class="img-text"><img src="../img/image 7.png" alt="схема 'жало паяльника'">
    <p> 
    900M-T-K – жало, напоминающее своей формой нож; возможна пайка различными частями наконечника: узким ребром, плоскостью и острием; удобно использовать для пайки узких дорожек.
</p> </div><div class="img-text"><img src="../img/image 8.png" alt="схема 'жало паяльника'">
    <p> 
    900M-T-3C – жало в виде цилиндра диаметром 3 мм с косым срезом, обычно используется для пайки дорожек протяжкой и лужения проводов.
</p> </div><div class="img-text"><img src="../img/image 9.png" alt="схема 'жало паяльника'">
    <p> 
    900M-T-2.4D – жало в виде «плоской» отвертки, паять можно как плоскостью, так и гранью (длина грани в данном случае – 2,4 мм).
</p> </div>

</div>
    </main>


</body>
</html>






@endsection