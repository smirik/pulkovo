<?php

function p_if($data)
{
  if ($data)
  {
    echo $data;
  }
}

$lab1 = array(
  0 => array('Шевченко Иван Иванович', 'shevchenko.png', 'заведующий отделом, заведующий лабораторией', 'доктор физико-математических наук'),
  1 => array('Мельников Александр Викторович', false, 'старший научный сотрудник', 'кандидат физико-математических наук'),
  2 => array('Соколов Виктор Георгиевич', false, 'старший научный сотрудник', 'кандидат физико-математических наук'),
  3 => array('Тимошкова Елена Ивановна', false, 'старший научный сотрудник', 'кандидат физико-математических наук'),
  4 => array('Попова Елена Алексеевна', false, 'инженер'),
  5 => array('Смирнов Евгений Александрович', 'smirnov.png', 'стажёр-исследователь, аспирант'),
  6 => array('Судов Леонид Николаевич', 'sudov.png', 'стажёр-исследователь'),
);

$lab2 = array(
  0 => array('Бобылев Вадим Вадимович', 'bobylev.png', 'заведующий лабораторией', 'доктор физико-математических наук' ),
  1 => array('Балуев Роман Владимирович', false, 'старший научный сотрудник', 'кандидат физико-математических наук'),
  2 => array('Бекетов И.Б.', false, false),
  3 => array('Гончаров Георгий Александрович', 'goncharov.png', 'старший научный сотрудник', 'кандидат физико-математических наук'),
  4 => array('Кондратьев Борис Петрович', 'kondratiev.png', 'ведущий научный сотрудник', 'доктор физико-математических наук'),
  5 => array('Степанищев Александр Сергеевич', 'stepanitshev.png', 'младший научный сотрудник'),
);

$lab3 = array(
  0 => array('Ерошкин Георгий Иванович', false, 'заведующий лабораторией', 'кандидат физико-математических наук'),
  1 => array('Вершков А.Н.', false, false),
  2 => array('Пашкевич В.В.', false, false),
  3 => array('Петровская М.С.', false, false),
);

$labs = array(
  'Лаборатория динамики планет и малых тел' => $lab1,
  'Лаборатория динамики Галактики' => $lab2,
  'Лаборатория аналитических и численных методов небесной механики' => $lab3,
)


/**
ЛДП

Шевченко И.И.
Алешкина Е.Ю.
Мельников А.В.
Попова Е.А.
Смирнов Е.А.
Соколов В.Г.
Судов Л.Н.
Тимошкова Е.И.


ЛАЧМ

Ерошкин Г.И.
Вершков А.Н.
Пашкевич В.В.
Петровская М.С.


ЛДГ

Бобылев В.В.
Балуев Р.В.
Бекетов И.Б.
Гончаров Г.А.
Кондратьев Б.П.
Степанищев А.С.
*/

?>