<?php
/**
 * Created by PhpStorm.
 * User: LeThinh
 * Date: 8/22/2015
 * Time: 12:31 AM
 */
?>
<script src="<?=STATIC_PATH_URL?>57/coolcarousel/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {

        $('#carousel').carouFredSel({
            width: '100%',
            items: {
                visible: 'odd+2'
            },
            scroll: {
                pauseOnHover: true,
                onBefore: function() {
                    $(this).children().removeClass( 'hover' );
                }
            },
            auto: {
                items: 1,
                easing: 'linear',
                duration: 1250,
                timeoutDuration: 0
            },
            pagination: {
                container: '#pager',
                items: 1,
                duration: 0.5,
                queue: 'last',
                onAfter: function() {
                    var cur = $(this).triggerHandler( 'currentVisible' ),
                        mid = Math.floor( cur.length / 2 );

                    cur.eq( mid ).addClass( 'hover' );
                }
            }
        });

    });
</script>
<style type="text/css">
  /*  html, body {
        height: 100%;
        padding: 0;
        margin: 0;
    }
    body {
        background-color: #ffe;
        position: relative;
        min-height: 300px;
    }
    body * {
        font-family: Arial, Geneva, SunSans-Regular, sans-serif;
        font-size: 14px;
        color: #333;
        line-height: 22px;
    }

    #wrapper {
        background-color: #fff;
        border-top: 1px solid #ccc;
        width: 100%;
        height: 350px;
        position: absolute;
        left: 0;
        bottom: 0;
    }*/
    #carousel {
        margin-top: -60px;
    }
    #carousel div {
        text-align: center;
        width: 125px;
        height: 140px;
        padding: 0 20px;
        float: left;
        position: relative;
    }
    #carousel div img {
        border: none;
        width: 100%;
        height: auto;
    }
    #carousel div span {
        display: none;
    }
    #carousel div:hover span,
    #carousel div.hover span {
        background-color: #333;
        color: #fff;
        display: inline-block;
        width: 100px;
        padding: 2px 0;
        margin: 0 0 0 -50px;
        position: absolute;
        bottom: 0;
        left: 50%;
        border-radius: 3px;
    }
    #pager {
        text-align: center;
        padding-top: 20px;
    }
    #pager a {
        background: #ccc;
        display: inline-block;
        border-radius: 5px;
        width: 10px;
        height: 10px;
        margin: 0 2px;
    }
    #pager a.selected {
        background: #999;
    }
    #pager a:hover {
        background: #666;
    }
    #pager a span {
        display: none;
    }

    #donate-spacer {
        height: 100%;
    }
    #donate {
        width: 750px;
        padding: 50px 75px;
        margin: 0 auto;
        overflow: hidden;
    }
    #donate p, #donate form {
        margin: 0;
        float: left;
    }
    #donate p {
        width: 650px;
    }
    #donate form {
        width: 100px;
    }
</style>
<div class="col-md-12 ">
    <div class="container boder-bottom-1">
<div id="carousel"
     style="text-align: left; float: none; position: absolute;
     top: 0px; right: auto; bottom: auto; left: -104px; margin: 0px; width: 4047px; height: 250px; z-index: auto;">

    <div>
        <img width="200" height="200" alt="fruit2" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit2.png">
        <span>Mandarin</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit3" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit3.png">
        <span>Banannas</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit4" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit4.png">
        <span>Cherries</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit5" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit5.png">
        <span>Orange</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit6" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit6.png">
        <span>Melon</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit7" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit7.png">
        <span>Lemon</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit8" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit8.png">
        <span>Grapes</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit9" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit9.png">
        <span>Peach</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit10" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit10.png">
        <span>Pear</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit11" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit11.png">
        <span>Strawberry</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit12" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit12.png">
        <span>Melon</span>
    </div>
    <div>
        <img width="200" height="200" alt="fruit1" src="<?=STATIC_PATH_URL?>57/coolcarousel/img/fruit1.png">
        <span>Apple</span>
    </div>
</div>
</div>
    </div>
