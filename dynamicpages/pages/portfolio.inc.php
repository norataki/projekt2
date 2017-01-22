<div id="hangman-jquery">
    <div id="word"></div>
    <div id="alpha"></div>
</div>
<button id= "BUT" ></button>

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
            hangman('DOG');
                });
            });

</script>