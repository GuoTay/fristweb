<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ChatSky Home</title>
    <meta name="description" content="An interactive getting started guide for Brackets.">
    <link rel="stylesheet" type="text/css" href="ChatSky/Static/css/secondcss.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="ChatSky/Static/JavaScript/jquery-ui-1.12.1/jquery-ui.css">
    <?php 
    include 'ChatSky/Static/ChatSkyIP.php';
    $IP=ip_connect($IP=''); 
    ?>
    
</head>

<body>
    <section id="nav" class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
       <img src="ChatSky/Static/image/group.svg" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> </span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="btn btn-outline-success my-2 my-sm-0" type="button" value="登入" onclick="location.href='http://<?php echo $IP; ?>/ChatSky/ChatSkyLogin.html'">
            </form>
        </div>
    </section>

    <section>
        <div>
            <div class="whitePaper">
                <div class=" row">
                    <div class="col-md-12 mycenter">
                        <h2>ChatSky</h2>
                        <p>Welcome to chatsky room</p>
                    </div>
                    <div class="col-md-7"></div>
                </div>
            </div>
            <div class="MyContainer">
                <div class="whitePaper_Button">
                    <div class=" row">
                        <div class="col-md-12 ">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="btn btn-outline-success my-2 my-sm-0" type="button" value="登入" onclick="location.href='http://<?php echo $IP; ?>/ChatSky/ChatSkyLogin.html'">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="backgroundImageFilter"></div>
            </div>
        </div>
    </section>

    <section class="modal-footer navbar-light bg-light" style="padding:0rem">
        <div class=" container">
            <div class=" row">
                <div class="col-md-12 mycenter">
                    <p>welcome to xcoco<a href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> xcoco1</a> or read our <a href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.css">xcoco2</a>.</p>
                </div>

            </div>
        </div>
    </section>

    
    <!--練習-->
    <form method="post" enctype="multipart/form-data" action="ChatSky/Static/upload_file.php">
          <input type="file" name="my_file">
          <input type="submit" value="Upload">
    </form>
    
    <style>
      #Box { width:300px; height: 300px; padding: 0.5em; }
      #Box h3 { text-align: center; margin: 0; }
      #container { width: 300px; height: 300px; }
      #feedback { font-size: 1.4em; }
      #selectable .ui-selecting { background: #FECA40; }
      #selectable .ui-selected { background: #F39814; color: white; }
      #selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
      #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
    </style>
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    /*控制可拖曳事件*/    
      $( function() {
        $( "#Box" ).resizable({animate: true}).draggable();
      });
    /*選項事件*/
      $( function() {
        $( "#selectable" ).selectable({
            stop:function(){
                var result = $( "#select-result" ).empty();
                $( ".ui-selected" ,this).each( function() {
                    var index = $( "#selectable li" ).index( this );
                    result.append( "#" + ( index + 1) );
                });
            }
        });
      } );   
    </script>
    <div id="Box" class="ui-widget-content">
        <h3 class="ui-widget-header">表情</h3>
        
        <p id="feedback">
            <span>You've selected:</span> <span id="select-result">none</span>.
        </p>
        
        <ol id="selectable">
          <li class="ui-widget-content">Item 1</li>
          <li class="ui-widget-content">Item 2</li>
          
        </ol>
        
    </div>

    <!--練習-->
</body>

</html>
