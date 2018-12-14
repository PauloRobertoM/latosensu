<?php include 'components/header.php'; ?>

    <section class="interna institucional fale-conosco">
        <div class="container">
        	<div class="row">
        		<div class="col-md-8 col-sm-8">
        			<h2 class="titulo-geral">Cursos in Company</h2>
                    <p>A LatoSensu – Escola Jurídica se propõe a planejar e executar junto com a sua Instituição o interesse por treinamento fechado, na modalidade CURSOS IN COMPANY. Visando atender ao princípio da economicidade, orienta a escolha desse tipo de treinamento para os Órgãos e Empresas, possibilitando a adequação do conteúdo programático aos interesses específicos de cada Instituição, o que inclui também a redução dos custos operacionais, com flexibilização na escolha das datas e horários mais convenientes para a realização do treinamento.</p>
        			<form>
                        <input type="text" name="nome" id="nome" class="form-control" value="" placeholder="Nome do Órgão / Empresa" />
                        <input type="text" name="solicitante" id="solicitante" class="form-control" value="" placeholder="Nome do solicitante" />
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="participantes" id="participantes" class="form-control" value="" placeholder="Quantidade de participantes" />
                            </div><!-- .md-6 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="telefone" id="telefone" class="form-control" value="" placeholder="Telefone para contato" />
                            </div><!-- .md-6 -->
                        </div><!-- .row -->
                        <input type="text" name="email" id="email" class="form-control" value="" placeholder="Email para contato:" />
                        <input type="text" name="curso" id="curso" class="form-control" value="" placeholder="Nome do curso desejado" />
                        <button class="botao">Enviar</button>
                    </form>
            	</div><!-- md-8 -->
            	<div class="col-md-4 col-sm-4">
					<?php include 'components/sidebar.php'; ?>
            	</div><!-- md-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->

<?php include 'components/footer.php'; ?>