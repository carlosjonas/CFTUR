	<!--Fechamento do container do footer-->
	</div>

	<footer>
		<!--BOOTSTRAP-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
		<script src="public/scripts/jquery.maskMoney.min.js" type="text/javascript"></script>  
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	    <!-- Máscara js -->
	    <script>
	        $("#rg").mask("9999999999-9");
	        $("#cpf").mask("999.999.999-99");
	        $("#telefone").mask("(99)99999-9999");

	        $(function(){
            $('#vagas').maskMoney({
              thousands:'.', decimal:',',
              affixesStay: true});
        	})
	    </script>

	</footer>
</body>
</html>