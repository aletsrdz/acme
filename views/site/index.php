<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$this->registerJs("$('[data-toggle=\"popover\"]').popover()");
?>
<div class="site-index">

    <div class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Lenguage<b class="caret"></b></a>
        <?php
            echo \app\components\LanguageDropdown::widget();
        ?>
    </div>


    <div class="jumbotron">
        <h1><?= Yii::t('app', 'congratulations')?></h1>

        <p class="lead">You have successfully created your Yii-powered application!!!!!!.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com" data-toggle="modal" data-target="#about-modal">Get started with Yii</a></p>                
    </div>

    


    <div class="body-content">

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h2>Heading 1</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-primary btn-sm" href="http://www.yiiframework.com/doc/"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2>Heading 2</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="clearfix hidden-md hidden-lg"></div>
            <div class="col-md-3 col-sm-6">
                <h2>Heading 3</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h2>Heading 4</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                <div class="btn-group" role="group" aria-label="group1">    
                <a class="btn btn-primary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a>
                <a class="btn btn-default" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Author info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Author</a>
                </div>
            </div>            
        </div>

    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="about-modal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Boton de dialogo</h4>
                  </div>
                  <div class="modal-body">
                    <p>About Alex Rdz</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
