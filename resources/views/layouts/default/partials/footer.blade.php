	</div>
	<script src="{{ url('js/app.js') }}"></script>
	<script>
				$(document).ready(function(){
					setTimeout(function(){
						$("#loading").remove();
						$('.app').animate({opacity:"1"});
					},1200);	
				})
	</script>
	</body>
</html>