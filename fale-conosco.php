<?php include 'components/header.php'; ?>

    <section class="interna institucional fale-conosco">
        <div class="container">
        	<div class="row">
        		<div class="col-md-8 col-sm-8">
        			<h2 class="titulo-geral">Fale Conosco</h2>
        			<form>
                        <input type="text" name="nome" id="nome" class="form-control" value="" placeholder="NOME" />
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="email" id="email" class="form-control" value="" placeholder="E-MAIL" />
                            </div><!-- .md-6 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="telefone" id="telefone" class="form-control" value="" placeholder="TELEFONE" />
                            </div><!-- .md-6 -->
                        </div><!-- .row -->
                        <textarea name="mensagem" id="mensagem" class="form-control" placeholder="MENSAGEM"></textarea>
                        <button class="botao">Enviar</button>
                    </form>
                    
                    <p>SAC: NATAL/RN (84) 3201-7689 / (84) 9431-6525</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31755.753951592218!2d-35.202075!3d-5.789195000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b30012f310cf37%3A0x92ce6f6d8e52c1c6!2sAv.+Prudente+de+Morais%2C+744+-+Tirol%2C+Natal+-+RN%2C+59020-505%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v1525710394476" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
            	</div><!-- md-8 -->
            	<div class="col-md-4 col-sm-4">
					<?php include 'components/sidebar.php'; ?>
            	</div><!-- md-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->

<?php include 'components/footer.php'; ?>