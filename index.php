<?php include_once('data.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ru">
  <head>
    <title>Отдел небесной механики и динамической астрономии / Главная (Пулковская) Астрономическая Обсерватория</title>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <link type="text/css" rel="stylesheet" href="css/cupertino/jquery-ui-1.8.12.custom.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.12.custom.min.js"></script>
  </head>
<body>
  
  <div id="header">
    <h1>Главная (Пулковская) Астрономическая Обсерватория</h1>
  </div>
  
  <script>
    function create_dialog(lab_num, person_num)
    {
      $.ajax({
        url: "data/p"+lab_num.toString()+"_"+person_num.toString()+".html",
        success: function(data) {
          /*$('.result').html(data);*/
          $('#pub_list').html(data);
          dialog = $('#pub_list').dialog({
            width: 800, height: 500
          });
        }
      });
/*      tmp = $( "#"+elem.toString() ).dialog({
  		  autoOpen: true, height: 550, width: 800
      });*/
    }
    
  	</script>


  <div id="navigation">
    <div id="logo">
      <img src="images/logo.png" alt="Главная (Пулковская) Астрономическая Обсерватория" title="Главная (Пулковская) Астрономическая Обсерватория">
    </div>
    <div id="info">
      <h2>Отдел небесной механики и динамической астрономии</h2>
      <ul>
        <li><a href="#lab1" class="ajax">Лаборатория динамики планет и малых тел</a></li>
        <li><a href="#lab2" class="ajax">Лаборатория динамики Галактики</a></li>
        <li><a href="#lab3" class="ajax">Лаборатория аналитических и численных методов небесной механики</a></li>
      </ul>
    </div>
  </div>
  
  <div class="divider"><!-- --></div>
  
  <div id="content">
    
    <div id="pub_list" title="Главные публикации" style="font-size: 0.8em; display: none;">
    </div>
    
    <div id="comments">
      <img src="images/notabene2.png" alt="Notabene!" title=""><br />
      <h3>Объявление</h3>
      <p>
        Всем сотрудникам, не выславшим по e-mail свои данные, включая фотографию, должность, звание и список публикаций (в формате txt или doc, по одной публикации в строчку), просьба сделать это в самое ближайшее время!
      </p>
    </div>  
    <div id="list">
      
      <?php $num=0; foreach ($labs as $key => $value): $lab2 = $value; $num++; ?>
      <a name="lab<?= $num ?>">&nbsp;</a>
      <h1><?= $key ?></h1>
      <div class="person">
        <?php if ($lab2[0][1]): ?>
        <div class="photo"><img src="images/avatars/<?= $lab2[0][1] ?>" alt="" width="100" title=""></div>
        <?php endif; ?>
        <h3><?= $lab2[0][0] ?></h3>
        <div class="position"><?= $lab2[0][2] ?>, <?= $lab2[0][3] ?></div>
        <div class="publications" id="bobylev_publications">
          <a onclick="create_dialog(<?= $num ?>, 0)" class="ajax">Главные публикации</a>
        </div>
        <div class="clear_left">&nbsp;</div>
      </div>
      
      <h3>Сотрудники</h3>
      <ul>
      <?php for ($i=1; $i<count($lab2); $i++): ?>
        <li>
        <div class="person_link">
          <a name="p<?= $num ?>_<?= $i ?>"></a>
          <a onclick="$('#p<?= $num ?>_<?= $i ?>').toggle('slow')" class="ajax"><?= $lab2[$i][0] ?></a> <span class="position"><?php p_if($lab2[$i][2]) ?></span>
        </div>
        <div class="person" id="p<?= $num ?>_<?= $i ?>" style="display: none; padding: 10px 0 0 0;">
          <div class="photo">
            <?php if ($lab2[$i][1]): ?>
              <img src="images/avatars/<?= $lab2[$i][1] ?>" alt="" width="100" title="">
            <?php endif; ?>
          </div>
          <h3><?= $lab2[$i][0] ?></h3>
          <div class="position"><?php p_if($lab2[$i][2])?></div>
          <div class="publications" id="bobylev_publications">
            <a  onclick="create_dialog(<?= $num ?>, <?= $i ?>)" class="ajax">Главные публикации</a>
          </div>
          <div class="clear_left">&nbsp;</div>
        </div>
        </li>
      <?php endfor; ?>
      </ul>
      <?php endforeach; ?>
      
    </div>
  </div>
  
</body>
</html>