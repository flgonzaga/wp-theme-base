<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Pecege
 * @since 1.0
 */

get_header(); ?>
<style>
	.btn-404,
	.btn-404:active,
	.btn-404:focus,
	.btn-404:hover,
	.btn-404:visited,
	.font-404-01,
	.font-404-02{
		color: #959595;
	}	
	*{
		margin: 0;
		padding: 0;
		border: 0;
		text-decoration: none;
		font-family: Helvetica, Arial, sans-serif;
		outline: 0;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		-webkit-transition: all .6s cubic-bezier(.19, 1, .22, 1);
		transition: all .6s cubic-bezier(.19, 1, .22, 1);
	}	
	a,
	a:hover{
		text-decoration: none !important;
	}	
	body,
	html {
		background: rgba(255, 255, 255, 1);
		background: -moz-linear-gradient(top, rgba(255, 255, 255, 1) 0, rgba(239, 239, 239, 1) 100%);
		background: -webkit-gradient(left top, left bottom, color-stop(0, rgba(255, 255, 255, 1)), color-stop(100%, rgba(239, 239, 239, 1)));
		background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0, rgba(239, 239, 239, 1) 100%);
		background: -o-linear-gradient(top, rgba(255, 255, 255, 1) 0, rgba(239, 239, 239, 1) 100%);
		background: -ms-linear-gradient(top, rgba(255, 255, 255, 1) 0, rgba(239, 239, 239, 1) 100%);
		background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0, rgba(239, 239, 239, 1) 100%);
		filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#efefef', GradientType=0);
	}	
	.open-sans{
		font-family: Open Sans, Helvetica, Arial, sans-serif;
	}	
	.box-404{
		width: 100%;
		max-height: 100%;
		top: 50%;
		left: 0;
		text-align: center;
	}	
	.font-404-01{
		font-size: 400px;
		text-shadow: 5px 5px 30px #B2B2B2;
		line-height: 370px;
	}	
	.font-404-02{
		font-size: 34px;
	}	
	.btn-404{
		display: block;
		background-color: #FFF;
		padding: 15px 30px;
		max-width: 100%;
		width: 180px;
		margin: 45px auto 0;
		border-radius: 35px;
		border: 1px solid #959595;
		box-shadow: 0 0 7px #D9D9D9;
	}	
	.btn-404:hover{
		width: 200px
	}
	@media only screen and (max-width:768px){
		.font-404-01{
			font-size: 300px;
			line-height: 285px;
		}
		.font-404-02{
			font-size: 25px;
		}
	}
	@media only screen and (max-width:480px){
		.font-404-01{
			font-size: 200px;
			line-height: 170px;
		}
		.font-404-02{
			font-size: 15px;
		}
		.btn-404{
			margin: 20px auto 0;
		}
	}
	@media only screen and (max-height:350px){
		.font-404-01{
			font-size: 200px;
			line-height: 170px;
		}
		.font-404-02{
			font-size: 15px;
		}
		.btn-404{
			margin: 20px auto 0;
		}
	}
</style>
<main class="w-100">
	<div class="container-fluid">
		<div class="col-12">
			<div class="spacer-md"></div><!-- /.spacer-md -->
		</div><!-- /.col-12 -->
		<div class="col-12">
			<div class="box-404">
				<div class="w-100 alignc font-404-01">
					404
				</div>
				<div class="w-100 alignc open-sans font-404-02">
					Página não encontrada.
				</div>
				<a href="<?php echo get_home_url(); ?>" class="btn-404 open-sans">
					<i class="fa fa-reply" aria-hidden="true"></i> 
					Voltar ao site
				</a>
			</div>
		</div><!-- /.col-12 -->
		<div class="col-12">
			<div class="spacer-md"></div><!-- /.spacer-md -->
		</div><!-- /.col-12 -->
	</div><!-- /.w-100 -->
</main><!-- /.w-100 -->
<?php
get_footer();
