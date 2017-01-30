	</div>
	<script src="{{ url('js/app.js') }}"></script>
	<script>
				$(document).ready(function(){
					setTimeout(function(){
						$("#loading").remove();
						$('.app').animate({opacity:"1"});
					},1200);	
					$('.btn').on('click', function() {
					  var $this = $(this);
					  $this.button('loading');
					  setTimeout(function() {
					       $this.button('reset');
					  }, 1000);
					});

				})
	</script>
	</body>
</html>