<!-- Code -->
<!--?php

    include '_conexao.php';

?-->
<!-- Code End -->

<!-- Head -->
<?php
    include 'head.php';
    $page = 1;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <div class="container">
        <h4 style="margin-top: 20px;">Meus outros cursos:</h3>
            <div class="row">
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="container" style="margin-top: 20px; float: left; margin-right: 10px;">
                        <div class="card" style="width: 18rem;">
                            <img src="imagens/card1.jpg" class="card-img-top"
                                alt="CRUD Básico com Bootstrap 4 , PHP e MySQL">
                            <div class="card-body">
                                <h5 class="card-title">Curso: CRUD Básico com Bootstrap 4 , PHP e MySQL</h5>
                                <p class="card-text">Trata-se de um sistema de cadastro de produtos, seguindo os
                                    principios
                                    básicos de um
                                    CRUD.<br>
                                <h6 class="card-subtitle mb-2 text-muted">Aluno: Werner L. Gottschalt</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">9 Seções</li>
                                <li class="list-group-item">31 Aulas</li>
                                <li class="list-group-item">Duração Total: 6h 52m</li>
                            </ul>
                            <div class="card-body">
                                <a href="https://github.com/WernerLuiz92/Curso_CRUD_Bootstrap_PHP_MySQL"
                                    class="card-link">GitHub</a>
                                <a href="https://www.udemy.com/course/curso-basico-de-bootstrap-4-php-e-mysql-gratis/"
                                    class="card-link">Curso</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="container" style="margin-top: 20px; float: left; margin-right: 10px;">
                        <div class="card" style="width: 18rem;">
                            <img src="imagens/card2.jpg" class="card-img-top"
                                alt="PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos">
                            <div class="card-body">
                                <h5 class="card-title">PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos</h5>
                                <p class="card-text">Domine PHP 7 , HTML, CSS, JavaScript, Banco de Dados, Curso Web
                                    Completo partindo dos fundamentos até Projetos Reais!<br>
                                <h6 class="card-subtitle mb-2 text-muted">Aluno: Werner L. Gottschalt</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">27 Seções</li>
                                <li class="list-group-item">499 Aulas</li>
                                <li class="list-group-item">Duração Total: 73h 39m</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Site Pessoal</a>
                                <a href="https://www.udemy.com/course/php-7-completo/" class="card-link">Curso</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="container" style="margin-top: 20px; float: left; margin-right: 10px;">
                        <div class="card" style="width: 18rem;">
                            <img src="imagens/card3.jpg" class="card-img-top"
                                alt="Docker: Ferramenta essencial para Desenvolvedores">
                            <div class="card-body">
                                <h5 class="card-title">Docker: Ferramenta essencial para Desenvolvedores</h5>
                                <p class="card-text">Aprenda a criar ambientes profissionais completos com Docker, que é
                                    a principal tecnologia de containers do mercado!<br>
                                <h6 class="card-subtitle mb-2 text-muted">Aluno: Werner L. Gottschalt</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">9 Seções</li>
                                <li class="list-group-item">60 Aulas</li>
                                <li class="list-group-item">Duração Total: 5h 39m</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Site Pessoal</a>
                                <a href="https://www.udemy.com/course/curso-docker/" class="card-link">Curso</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="container" style="margin-top: 20px; float: left; margin-right: 10px;">
                        <div class="card" style="width: 18rem;">
                            <img src="imagens/card2.jpg" class="card-img-top"
                                alt="PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos">
                            <div class="card-body">
                                <h5 class="card-title">PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos</h5>
                                <p class="card-text">Domine PHP 7 , HTML, CSS, JavaScript, Banco de Dados, Curso Web
                                    Completo partindo dos fundamentos até Projetos Reais!<br>
                                <h6 class="card-subtitle mb-2 text-muted">Aluno: Werner L. Gottschalt</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">27 Seções</li>
                                <li class="list-group-item">499 Aulas</li>
                                <li class="list-group-item">Duração Total: 73h 39m</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Site Pessoal</a>
                                <a href="https://www.udemy.com/course/php-7-completo/" class="card-link">Curso</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="container" style="margin-top: 20px; float: left; margin-right: 10px;">
                        <div class="card" style="width: 18rem;">
                            <img src="imagens/card2.jpg" class="card-img-top"
                                alt="PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos">
                            <div class="card-body">
                                <h5 class="card-title">PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos</h5>
                                <p class="card-text">Domine PHP 7 , HTML, CSS, JavaScript, Banco de Dados, Curso Web
                                    Completo partindo dos fundamentos até Projetos Reais!<br>
                                <h6 class="card-subtitle mb-2 text-muted">Aluno: Werner L. Gottschalt</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">27 Seções</li>
                                <li class="list-group-item">499 Aulas</li>
                                <li class="list-group-item">Duração Total: 73h 39m</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Site Pessoal</a>
                                <a href="https://www.udemy.com/course/php-7-completo/" class="card-link">Curso</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="margin-top: 20px;">
                    <div class="container" style="margin-top: 20px; float: left; margin-right: 10px;">
                        <div class="card" style="width: 18rem;">
                            <img src="imagens/card2.jpg" class="card-img-top"
                                alt="PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos">
                            <div class="card-body">
                                <h5 class="card-title">PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos</h5>
                                <p class="card-text">Domine PHP 7 , HTML, CSS, JavaScript, Banco de Dados, Curso Web
                                    Completo partindo dos fundamentos até Projetos Reais!<br>
                                <h6 class="card-subtitle mb-2 text-muted">Aluno: Werner L. Gottschalt</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">27 Seções</li>
                                <li class="list-group-item">499 Aulas</li>
                                <li class="list-group-item">Duração Total: 73h 39m</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Site Pessoal</a>
                                <a href="https://www.udemy.com/course/php-7-completo/" class="card-link">Curso</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->