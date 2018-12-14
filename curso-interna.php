<?php include 'components/header.php'; ?>

    <section class="interna institucional">
        <div class="container">
        	<div class="row">
        		<div class="col-md-8 col-sm-8">
        			<h2 class="titulo-geral">Cursos</h2>
        			<div class="item">
	            		<h4>Título do Curso</h4>
	            		<div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <p>A necessidade de se proporcionar uma melhor qualidade das atividades jurídicas, a LatoSensu surgiu em 1998 como uma escola voltada para a qualificação, habilitação, capacitação e aperfeiçoamento do profissional do direito e do agente público na área da gestão pública, visando ser uma instituição com um padrão e uma qualidade de ensino diferenciados.</p>
                                    <p>Em suas atividades procura ministrar cursos de aperfeiçoamentos para estudantes e profissionais de Direito, além de uma específica preocupação de realizar treinamento, capacitação e habilitação de agentes públicos de todas as esferas administrativas, por meio de professores escolhidos entre os melhores profissionais de cada segmento.</p>
                                    <p>Reúne um corpo docente de alto nível, composto de professores de renome no meio jurídico e em suas respectivas áreas de atuação, que por meio de sólida formação acadêmica e ampla experiência profissional proporcionam ao aluno a grande oportunidade de adquirir novos e valiosos conhecimentos.</p>
                                    <p>É uma instituição que já prestou serviços a vários órgãos públicos, empresas privadas e profissionais autônomos, também a estudantes de direito, tendo se consolidado como sinônimo de pioneirismo, sucesso e tradição em sua área de atuação.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">...</div>
                                <div role="tabpanel" class="tab-pane" id="messages">...</div>
                                <div role="tabpanel" class="tab-pane" id="settings">...</div>
                            </div>
                        </div>
					</div><!-- item -->
                    <div class="item">
                        <h2 class="titulo-geral">Inscreva-se</h2>
                        <div class="fale-conosco">
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
                        </div><!-- fale-conosco -->
                    </div><!-- item -->
            	</div><!-- md-8 -->
            	<div class="col-md-4 col-sm-4">
					<?php include 'components/sidebar.php'; ?>
            	</div><!-- md-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->

<?php include 'components/footer.php'; ?>