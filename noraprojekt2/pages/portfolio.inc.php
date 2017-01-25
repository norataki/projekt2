
<div class="container mt40">
    <h1>Portfolio</h1>
    <section class="row">

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="" title="Nature Portfolio" class="zoom" data-type="image" data-toggle="lightbox">
                        <img src="henna.jpg" alt="Nature Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><p>henna</p></h4>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="" title="Food Portfolio" class="zoom" data-type="image" data-toggle="lightbox">
                        <img src="henna.jpg" alt="Food Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="Food Portfolio">henna</a></h4>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="" title="People Portfolio" class="zoom" data-type="image" data-toggle="lightbox">
                        <img src="henna.jpg" alt="People Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="#" title="People Portfolio">henna</a></h4>  
                </div>
            </div>
        </article>                                              


        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="" title="Sports Portfolio" class="zoom" data-type="image" data-toggle="lightbox">
                        <img src="henna.jpg" alt="Sports Portfolio" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><p>henna</p></h4>  
                </div>
            </div>
        </article>
</section>
</div>

<!-- ************************* HANGMAN ********************************-->
 <div id="hangman-jquery">
    <div id="word"></div>
    <div id="alpha"></div>
</div>
<button id= "BUT" ></button>

        <center><h3>Marrakech- Marocko</h3>
            <video controls class="video-responsive">
            <source src="marrakech.mp4" type="video/mp4">
            </video></center>

<script>


function hangman(word)
        {
            var alpha = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $.each(alpha.split(''), function(i, val){
            $('#alpha').append($('<span class="guess">' + val + '</span>'));
            });
            $.each(word.split(''), function(i, val){
            $('#word').append($('<span class="letter" letter="' + val +'">_</span>'));
            });
            $('.guess').click(function(){
            var count = $('#word [letter='+$(this).text()+']').each(function(){ $(this).text($(this).attr('letter'));}).length;
            $(this).removeClass('guess').css('color' , (count > 0 ? 'green' : 'red')).unbind('click');
            });
        }

        $(document).ready(function() {
        $('#BUT').click(function() {
            hangman('CAT');
                });
            });

</script>