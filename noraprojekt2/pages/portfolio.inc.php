<!--********************* Portfolio ******************************-->
<div class="container mt40">
    <h1>Portfolio</h1>
    <section class="row">

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="https://www.pinterest.se/pin/440719513516576169/" class="zoom" data-type="image" data-toggle="lightbox">
                        <img src="henna.jpg" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="https://www.pinterest.se/pin/440719513516576169/">Henna</a></h4>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="https://www.pinterest.se/pin/440719513516576169/" class="zoom" data-type="image" data-toggle="lightbox">
                        <img src="henna.jpg" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="https://www.pinterest.se/pin/440719513516576169/">Henna</a></h4>
            </div>
        </article>

        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="https://www.pinterest.se/pin/440719513516576169/" class="zoom" data-type="image" data-toggle="lightbox">
                        <img src="henna.jpg" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="https://www.pinterest.se/pin/440719513516576169/" >Henna</a></h4>  
                </div>
            </div>
        </article>                                              


        <article class="col-xs-12 col-sm-6 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="https://www.pinterest.se/pin/440719513516576169/" class="zoom" data-type="image" data-toggle="lightbox">
                        <img src="henna.jpg" />
                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                    </a>
                </div>
                <div class="panel-footer">
                    <h4><a href="https://www.pinterest.se/pin/440719513516576169/">Henna</a></h4>  
                </div>
            </div>
        </article>
</section>
</div>
<!--********************* end Portfolio ******************************-->


<!-- ************************* HANGMAN ********************************-->
     <div id="hangman-jquery">
        <div id="word"></div>
        <div id="alpha"></div>
    </div>
    <button id="buttosh" style="background-color: red;margin-left: 30px;padding: 40px; display: none;"></button>

<!-- ************************* Video ********************************-->

        <center><h3>Marrakech- Marocko</h3>
            <video controls class="video-responsive">
            <source src="marrakech.mp4" type="video/mp4">
        </video></center>
<!-- ************************* Video ********************************-->

<script>

        $(document).keypress(function(e){
            var key = e.which;
            if (key == 116) {
                // if the user pressed T toggle the button with the id 
                $('#buttosh').toggle();
            }
        });


    function hangman(word) //
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
        $('#buttosh').click(function() {
            hangman('CAT');
                });
            });

</script>