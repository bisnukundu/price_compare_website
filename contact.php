
<?php
require_once("header.php");
?>

<style rel="stylesheet" class="css/text">
	.bloc_left_price {
	color: #c01508;
	text-align: center;
	font-weight: bold;
	font-size: 150%;
	}
	.category_block li:hover {
	background-color: #007bff;
	}
	.category_block li:hover a {
	color: #ffffff;
	}
	.category_block li a {
	color: #343a40;
	}
	.add_to_cart_block .price {
	color: #c01508;
	text-align: center;
	font-weight: bold;
	font-size: 200%;
	margin-bottom: 0;
	}
	.add_to_cart_block .price_discounted {
	color: #343a40;
	text-align: center;
	text-decoration: line-through;
	font-size: 140%;
	}
	.product_rassurance {
	padding: 10px;
	margin-top: 15px;
	background: #ffffff;
	border: 1px solid #6c757d;
	color: #6c757d;
	}
	.product_rassurance .list-inline {
	margin-bottom: 0;
	text-transform: uppercase;
	text-align: center;
	}
	.product_rassurance .list-inline li:hover {
	color: #343a40;
	}
	.reviews_product .fa-star {
	color: gold;
	}
	.pagination {
	margin-top: 20px;
	}
	
	
</style>
<div class="container">
	<h1 style="font-size:60px;font-family:arial black;text-align:center;" >Contact Us</h1>
	<div class="row">
		
		<div class="col-12 pl-4" style="padding: 100px 0px">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9510366823547!2d101.59236011408956!3d3.107655354274594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c04699da141%3A0xca6d0fa3b1953b8c!2sKelana%20Puteri%20Condominium!5e0!3m2!1sen!2smy!4v1586590186775!5m2!1sen!2smy" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			
		</div>
	</div>
	<div class="row pb-5">
		<div class="col-12">
			<div class="card bg-light mb-3">
				<div class="card-header bg-dark text-white text-uppercase text-center"><i class="fa fa-home"></i> Contact Us at:</div>
				<div class="card-body text-center">
					<p>PriceWar.com.my</p>
					<p>26, SS7, 47301 Petaling Jaya,Selangor,Malaysia</p>
					<p><b>Tel No :</b> +60 11 2803 8630</p>
					<p class="mt-5">Send us an Email :</p>
					<p><b>Email :</b> skssujon90@gmail.com</p>
					
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- Footer -->

<?php
require_once("footer.php");
?>

<script type="text/javascript">
	$(document).ready(function(){
		$("#sub").click(function(even){
			even.preventDefault();
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			$.ajax({
				url:"contac_data.php",
				type:"POST",
				data:{name:name,email:email,message:message},
				success:function(data){
					$("#msg").html(data)
					$("#fm").trigger("reset");
				}
			})
		})
	})
</script>