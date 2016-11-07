<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Entre em contato</h1></div>

                    <div class="panel-body">

                        <form action="" method="POST">
                            <div class="row">
                            <div class="col-md-8">
                                <label>Nome:</label>
                                <input class="form-control" type="text" name="nome">
                            </div>
                                <div class="col-md-8">
                                    <label>Telefone:</label>
                                    <input class="form-control" type="text" name="telefone">
                                </div>
                                <div class="col-md-8">
                                    <label>E-mail:</label>
                                    <input class="form-control" type="email" name="email">
                                </div>
                            </div>
                            </br>
                            <input class="btn btn-primary" type="button" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>