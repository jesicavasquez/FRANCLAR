<script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
    $('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
    </script>
    <script>
        function soloLetras(e) {
            var key = e.keyCode || e.which,
            tecla = String.fromCharCode(key).toLowerCase(),
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
            especiales = [8, 37, 39, 46],
            tecla_especial = false;

            for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
            }

            if (letras.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
            }
        }
    </script>
    <script>
        function solonumeros(e) {
            var key = e.keyCode || e.which,
            tecla = String.fromCharCode(key).toLowerCase(),
            numeros = " 1234567890",
            especiales = [8, 37, 39, 46],
            tecla_especial = false;

            for (var i in especiales) {
            if (key == especiales[i]) {
                tecla_especial = true;
                break;
            }
            }

            if (numeros.indexOf(tecla) == -1 && !tecla_especial) {
            return false;
            }
        }
    </script>

<script>
        $(document).on('ready', function(){
            $('#show-hide-passwd').on('click', function(e) {

                var current = $(this).attr('action');

                if (current == 'hide'){
                    $(this).prev().attr('type','text');
                    $(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
                }
                if (current == 'show'){
                    $(this).prev().attr('type','password');
                    $(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                }
            })
        })
</script>