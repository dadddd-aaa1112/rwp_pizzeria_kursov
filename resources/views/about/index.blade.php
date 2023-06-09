@extends('layouts.main')
@section('main')
    <div class="d-flex flex-row">
        <div class="me-5">
            <h4>Мы</h4>
            <p>Обычно люди приходят к нам, чтобы просто поесть. Наши промоутеры раздают листовки про кусочек
                пиццы за двадцать рублей или ещё что-то выгодное. Мы делаем это как первый шаг, чтобы познакомиться.</p>

            <p>Но для нас пиццерия — не только пицца. Это и пицца тоже, но в первую очередь это большое дело, которое
                вдохновляет нас, заставляет каждое утро просыпаться и с интересом продолжать работу.</p>

            <p> В чём же наш интерес? Сейчас расскажем.</p>
            <h4>Идеальные ингредиенты</h4>

            <p>Почему мы так хотим познакомиться? Потому что дальше пицца делает всё сама. Люди видят, что она вкусная,
                и возвращаются снова. Нам главное первый раз это показать.</p>

            <p> Вообще пицца — очень простая штука, её сложно испортить. Достаточно хороших ингредиентов и правильного
                теста. Это конструктор, если детали качественные, то и результат будет в порядке. </p>

            <h4>Открытость во всём</h4>
            <p>Кто угодно может написать сотню правил, но само по себе это не работает. Нужна сила, благодаря которой
                стандарты будут соблюдаться. Для нас этой силой стала открытость. Мы сделали всё настолько прозрачным,
                что отступать от стандартов просто не получается.</p>
        </div>

        <img style="width: 450px; height: 450px;" src="{{asset('for_main/about.png')}}">
    </div>

@endsection
