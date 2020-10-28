<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" >
  $(document).ready(function(){
    $('.aguarde').click(function(){
      $('#aguarde, #blanket').css('display','block');
    });
  });
</script>
@yield('script')
    </body>

    </html>
