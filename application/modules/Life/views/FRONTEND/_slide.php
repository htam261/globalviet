
    <link href="<?=STATIC_PATH_URL?>css/sliderdemo.css" rel="stylesheet">
    <script src="<?=STATIC_PATH_URL?>js/jquery.scrollbox.js"></script>

<div class="container">


        <h2>Example - 5</h2>

        <div id="demo5" class="scroll-img">
            <ul>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=234" target="_blank"><img src="/img/normal_234.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=485" target="_blank"><img src="/img/normal_485.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=511" target="_blank"><img src="/img/normal_511.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=725" target="_blank"><img src="/img/normal_725.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=840" target="_blank"><img src="/img/normal_840.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=934" target="_blank"><img src="/img/normal_934.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=1295" target="_blank"><img src="/img/normal_1295.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=1459" target="_blank"><img src="/img/normal_1459.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=1590" target="_blank"><img src="/img/normal_1590.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=1688" target="_blank"><img src="/img/normal_1688.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=3206" target="_blank"><img src="/img/normal_3206.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=3810" target="_blank"><img src="/img/normal_3810.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=5176" target="_blank"><img src="/img/normal_5176.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=6861" target="_blank"><img src="/img/normal_6861.png"></a></li>
                <li><a href="http://www.faceyourmanga.com/mangatar.php?id=7004" target="_blank"><img src="/img/normal_7004.png"></a></li>
            </ul>
        </div>
        <div id="demo5-btn" class="text-center">
            <button class="btn" id="demo5-backward"><i class="icon-chevron-left"></i> Backward</button>
            <button class="btn" id="demo5-forward">Forward <i class="icon-chevron-right"></i></button>
        </div>

        <h2>Example - 6</h2>

        <div id="demo6" class="scroll-img">
            <ul>
                <li><p>1</p></li>
                <li><p>2</p></li>
                <li><p>3</p></li>
                <li><p>4</p></li>
            </ul>
        </div>

        <h3>queue container:</h3>
        <p>You can append items here, which are pulling from the server side.</p>
        <div id="demo6-queue" class="scroll-img">
            <ul>
                <li><p>5</p></li>
                <li><p>6</p></li>
            </ul>
        </div>

        <h2>Example - 7</h2>
        <p>Hover an element to trigger forward action.</p>

        <div id="demo7" class="scroll-text">
            <ul>
                <li><a href="http://blog.imgtec.com/powervr-developers/powervr-gr6500-ray-tracing" target="_blank">PowerVR GR6500: Ray tracing is the future and the future is now</a></li>
                <li><a href="https://blog.mozilla.org/blog/2014/03/18/mozilla-and-unity-deliver-award-winning-game-engine-to-the-web/" target="_blank">Mozilla and Unity Bring Unity Game Engine to WebGL</a></li>
                <li><a href="http://starkravingvc.com/2014/03/18/to-protect-legitimate-interests-seattle-should-cap-all-forms-of-innovation-immediately/" target="_blank">To Protect Legitimate Interests, Seattle Should Cap All Forms of Innovation</a></li>
                <li><a href="http://blackhole12.blogspot.com/2014/03/the-problem-with-photorealism.html" target="_blank">The Problem With Photorealism</a></li>
                <li><a href="http://hackeradam17.com/2014/03/18/an-introduction-to-x86_64-assembly-language/">An Introduction to x86_64 Assembly Language</a></li>
                <li><a href="http://nginx.org/en/security_advisories.html?1.5.12">Nginx SPDY heap buffer overflow (affects 1.3.15 – 1.5.11)</a>></li>
            </ul>
        </div>
        <div id="demo7-btn">
            <button class="btn" id="demo7-forward"><i class="icon-arrow-down"></i> <i class="icon-arrow-down"></i> <i class="icon-arrow-down"></i> Hover Me <i class="icon-arrow-down"></i> <i class="icon-arrow-down"></i> <i class="icon-arrow-down"></i></button>
        </div>

    </div>
</div>
<a href="https://github.com/wmh/jquery-scrollbox"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
<script>
    $(function () {

        $('#demo5').scrollbox({
            direction: 'h',
            distance: 134
        });
        $('#demo5-backward').click(function () {
            $('#demo5').trigger('backward');
        });
        $('#demo5-forward').click(function () {
            $('#demo5').trigger('forward');
        });
        $('#demo6').scrollbox({
            direction: 'h',
            distance: 134,
            queue: 'demo6-queue'
        });
        var queueNext = 7;
        (function () {
            $('#demo6-queue ul').append('<li><p>'+ queueNext +'</p></li>');
            queueNext++;
            setTimeout(arguments.callee, 2000 + parseInt(Math.random() * 2000, 10));
        }());

        $('#demo7').scrollbox({
            linear: true,
            delay: 0,
            speed: 60,
            autoPlay: false,
            onMouseOverPause: false
        });
        $('#demo7-forward').mouseover (function () {
            $('#demo7').trigger('forwardHover');
        }).mouseout(function() {
            $('#demo7').trigger('pauseHover');
        });
    });
</script>
