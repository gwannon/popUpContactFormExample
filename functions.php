<?php
/**
 * Your code here.
 *
 */
 
 
//Catálogo popup
function drenatura_catalogo_popup() { ?>
<div id="catalogopopup">
	<?php echo do_shortcode("[contact-form-7 id='734' title='Descargar catálogo']"); ?>
</div>
<div id="presupuestopopup">
	<?php echo do_shortcode("[contact-form-7 id='736' title='Pedir presupuesto']"); ?>
</div>
<style>
#catalogopopup,
#presupuestopopup {
	height: 100vh;
	width: 100%;
	position: fixed;
	top: 0px;
	left: 0px;
	background-color: #000000d1;
	display: none;
	justify-content: center;
	align-items: center;
	z-index: 500;
}
#catalogopopup.opened,
#presupuestopopup.opened {
	display: flex;
}
#catalogopopup > div,
#presupuestopopup > div {
	max-width: 560px;
	background-color: #fff;
	padding: 50px;
	position: relative;
	width: 100%;
}
#catalogopopup > div p.title,
#presupuestopopup > div p.title {
	color: #758592;
	font-size: 30px;
	line-height: 39px;
	text-align: center;
	position: relative;
	padding-bottom: 20px;
	margin-bottom: 20px;
}

#catalogopopup > div p.title:after,
#presupuestopopup > div p.title:after {
	content: " ";
	width: 30px;
	height: 5px;
	position: absolute;
	background-color: #6bb65e;
	bottom: 0px;
	left: calc(50% - 15px);
}

#catalogopopup > div input[type=text],
#catalogopopup > div input[type=tel],
#catalogopopup > div input[type=email],
#catalogopopup > div input[type=number],
#catalogopopup > div select,
#presupuestopopup > div input[type=text],
#presupuestopopup > div input[type=tel],
#presupuestopopup > div input[type=email],
#presupuestopopup > div input[type=number],
#presupuestopopup > div select {
    border-top: 1px solid #fff;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
    background-color: #fff;
}
#catalogopopupclose,
#presupuestopopupclose {
	position: absolute;
	top: 20px;
	right: 30px;
	font-size: 25px;
	color: #6bb65e;
	cursor: pointer;
}
#catalogopopup .wpcf7-list-item,
#presupuestopopup .wpcf7-list-item {
	color: #758592;
	margin-left: 0px;
	font-size: 12px;
	margin-top: 10px;
	margin-bottom: 5px;
}
#catalogopopup .wpcf7 form .wpcf7-response-output,
#presupuestopopup .wpcf7 form .wpcf7-response-output {
	margin-left: 0px;
	margin-right: 0px;
}
#catalogopopup .wpcf7-list-item a,
#presupuestopopup .wpcf7-list-item a {
	color: #758592;
	text-decoration: underline;
}
</style>
<script>
	jQuery("#catalogopopupclose, .catalogopopupopen a").click(function(e) {
		e.preventDefault();
		jQuery("input[name=catalogo-file]").val(jQuery(".catalogopopupopen a").attr("href"));
		jQuery("#catalogopopup").toggleClass("opened");
	});
	jQuery("#presupuestopopupclose, .presupuestopopupopen").click(function() {
		jQuery("#presupuestopopup").toggleClass("opened");
	});
</script>
<?php }
add_action( 'wp_footer', 'drenatura_catalogo_popup');

/*

<span id="catalogopopupclose">✕</span>
[hidden catalogo-file]
<p class="title">Dános tu email y te enviaremos nuestro catalógo.</p>
[email* your-email placeholder "Email"]
[acceptance acceptance-352] Acepto la <a href="/politica-privacidad/" rel="nofollow">politica de privacidad</a>.[/acceptance]
[submit "Enviar"]


<span id="presupuestopopupclose">✕</span>
<p class="title">Estaremos encantados de prepararte un presupuesto, solo dános estos datos.</p>
[text* your-name placeholder "Nombre*"]
[email* your-email placeholder "Email*"]
[tel* your-tel placeholder "Teléfono*"]
[textarea your-message x5 placeholder "Cuéntanos que es lo que quieres"]
[acceptance acceptance-352] Acepto la <a href="/politica-privacidad/" rel="nofollow">politica de privacidad</a>.[/acceptance]
[submit "Enviar"]

*/
