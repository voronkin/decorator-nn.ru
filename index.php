<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/my.css" rel="stylesheet">

    <title>Арт-студия "Декоратор" - шторы для дома</title>
  </head>
  <body>    
    <?php include 'header.php';?>  
    <main role="main">
        <div class="jumbotron">
          <div class="col-sm-12 mx-auto jumbotext text-center">
            <h1>ШТОРЫ ДЛЯ ДОМА</h1>
            <h2>Для кухни и спальни, для гостинной и детской, для загородного дома,<br>          
              Придумаем модель, подберём ткань, сошьём и развесим новые шторы.<br>Ваш дом будет самый красивый и уютный.</h2>
            <br><br>
            <div class="row">                  
              <div class="col-sm-1">
              </div>
              <div class="col-sm-10">
                  <img class="img-fluid" src="img/face2.png">                  
              </div>
              <div class="col-sm-1">
              </div>              
            </div>                                
              
          </div>          
        </div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center">Галерея</h2>
            <div class="row">
              <div class="col-sm-4">
                <img class="img-fluid" src="img/001.png">
              </div>
              <div class="col-sm-4">
                <img class="img-fluid" src="img/002.png">
              </div>
              <div class="col-sm-4">
                <img class="img-fluid" src="img/003.png">
              </div>
            </div>            
            <div class="row">
              <div class="col-sm-4">
                <img class="img-fluid" src="img/004.png">
              </div>
              <div class="col-sm-4">
                <img class="img-fluid" src="img/005.png">
              </div>
              <div class="col-sm-4">
                <img class="img-fluid" src="img/006.png">
              </div>
            </div>            
          </div>
          <div class="row">
              <div class="col-sm-4">
              </div>
              <div class="col-sm-4">
                <button type="button" class="btn-danger btn-lg btn-block" onclick="location.href = 'actors.php'"><strong>Смотреть всё</strong></button>
              </div>
              <div class="col-sm-4">
              </div>
          </div>          
        </div>
        <br>
        
          <div class="card text-center">
            <div class="card-body">
              <h2>Как мы с вами работаем</h2>
              <div class="row">
                <div class="col-sm-3">
                <p>Звоните по телефонам + 7 (910) 140-12-72 +7 (831) 43-512-43, приходите в офис или оставляете заявку</p>                
                </div>
                <div class="col-sm-3">
                  <p>Подбираем ткани и фурнитуру по вашим идеям и пожеланиям</p>
                </div>
                <div class="col-sm-3">
                  <p>Делаем замеры, рисуем эскизы, делаем смету на материалы</p>
                </div>
                <div class="col-sm-3">
                  <p>Заключаем договор, сдаём ткань в пошив и ждём день монтажа. Всё очень просто!</p>
                </div>

              </div>
            </div>
          </div>        
        <br>
        <h2 class="text-center">Чтобы получить шторы, вам остаётся только нажать на кнопку и ...</h2>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
              <button type="button" class="btn-danger btn-lg btn-block" onclick="location.href = 'actors.php'"><strong>Вызвать дизайнера</strong></button>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <br>
        <div class="card text-center">
          <div class="card-body">
            <h2>Как меня найти?</h2>
            <br>
            <div class="row">
              <div class="col-sm-6">
                <form>
                <div class="form-group">                
                  <input type="text" class="form-control form-control-sm" id="name" name="name" aria-describedby="firstnameHelp" placeholder="Имя*">                  
                  <input type="email" class="form-control form-control-sm" id="email" name="email" aria-describedby="emailHelp" placeholder="E-mail*">                  
                  <input type="phone" class="form-control form-control-sm" id="phone" name="phone" placeholder="Телефон">                
                  <textarea class="form-control form-control-sm" id="message" name="message" rows="3" placeholder="Сообщение"></textarea>                 
                  <button type="submit" id="submit" class="btn-block btn-outline-secondary">Отправить</button>
                  <small id="emailHelp" class="form-text text-muted">Нажимая на кнопку "Отправить", вы соглашаетесь на обработку персональных данных.</small>                    
              </div>
              </form>              
              </div>
              <div class="col-sm-6">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1dcf59d79ead334b71ca0e4c74e990a50d894eb6ae11cf87a2fa0a8d6b4af406&amp;lang=ru_RU&amp;scroll=true"></script>
              </div>
            </div>
          </div>
        </div>

      </div>        
    </main>

    <!-- footer-->
    <?php include 'footer.php';?>               
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>