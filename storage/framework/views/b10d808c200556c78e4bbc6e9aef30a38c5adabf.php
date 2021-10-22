<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <title>Página Principal</title>
</head>

<body>
    <?php echo $__env->make('dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    <div id="main-container">

        <div id="expenses-container" class="container">

            <div id="left-container">

                <div id="expenses-summary">
                    <div>
                        <h2>Bienvenid@ <?php echo e(Auth::user()->name); ?> </h2>
                    </div>
                    <div class="cards-container">
                        <div class="card w-100">
                            <div class="total-budget">
                                <span class="total-budget-text">
                                    Balance General
                                </span>
                            </div>
                            <div class="total-expense">

                                <span class="">$
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="cards-container">
                        <div class="card w-50">

                            <div class="total-budget">
                                <span class="total-budget-text">
                                    De
                                    $<?php echo e(Auth::user()->budget); ?> mensuales te restan </span>
                            </div>
                            <div class="total-expense">
                                <span>
                                    $<?php echo e(Auth::user()->budget); ?> </span>
                            </div>


                        </div>


                        <div class="card w-50">
                            <div class="total-budget">
                                <span class="total-budget-text">Tu gasto más grande</span>

                            </div>
                            <div class="total-expense">

                                <span>$<?php echo e(Auth::user()->big_expenses); ?>


                                </span>

                            </div>
                        </div>

                    </div>
                </div>

                <div id="chart-container">
                    <div id="chart">

                    </div>
                </div>

                <div id="expenses-category">
                    <h2>Gastos del mes por categoria</h2>

                </div>
            </div>

            <div id="right-container">
                <div class="transactions-container">
                    <section class="operations-container">
                        <h2>Operaciones</h2>


                        <button class="btn-main" id="new-income">
                            <i class="material-icons">add</i>
                            <span>Registrar nuevo </span>
                        </button>
                        <a href="user#budget-user-container">Definir Ingresos del mes<i
                                class="material-icons">keyboard_arrow_right</i></a>
                    </section>

                    <section id="expenses-recents">
                        <h2>Registros más recientes</h2>
                        <div class="preview-expense">
                            <div class="left">
                                <div class="expense-date">2021-09-18</div>
                                <div class="expense-title">prueba</div>
                            </div>
                            <div class="right">
                                <div class="expense-amount">$1.00</div>
                            </div>
                        </div>

                        <div class="preview-expense">
                            <div class="left">
                                <div class="expense-date">2021-09-16</div>
                                <div class="expense-title">almuerzo</div>
                            </div>
                            <div class="right">
                                <div class="expense-amount">$10,000.00</div>
                            </div>
                        </div>

                        <div class="preview-expense">
                            <div class="left">
                                <div class="expense-date">2021-09-11</div>
                                <div class="expense-title">100</div>
                            </div>
                            <div class="right">
                                <div class="expense-amount">$1,000.00</div>
                            </div>
                        </div>

                        <div class="preview-expense">
                            <div class="left">
                                <div class="expense-date">2021-09-01</div>
                                <div class="expense-title">100</div>
                            </div>
                            <div class="right">
                                <div class="expense-amount">$100.00</div>
                            </div>
                        </div>

                        <div class="preview-expense">
                            <div class="left">
                                <div class="expense-date">2021-08-01</div>
                                <div class="expense-title">1</div>
                            </div>
                            <div class="right">
                                <div class="expense-amount">$1.00</div>
                            </div>
                        </div>

                        <div class="more-container"><a href="expenses">Ver todos los gastos<i
                                    class="material-icons">keyboard_arrow_right</i></a></div>
                    </section>
                </div>
            </div>
            <div class="modal fade" id="income" tabindex="-1" role="dialog" aria-labelledby="income"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="income">Registro Balance</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form id="balance">
                                <h3>Registrar nuevo Balance</h3>

                                <div class="section">
                                    <select name="balances" id="typebalance">
                                        <option value="Ingreso">Ingreso</option>
                                        <option value="Gastos">Gastos</option>
                                    </select>
                                </div>
                                <label for="amount">Cantidad</label>
                                <input type="number" name="amount" id="amount" autocomplete="off" required>

                                <div class="section">
                                    <label for="amount">categoria</label>
                                    <select name="" id="">
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value=""><?php echo e($cat->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="section">
                                    <label for="title">Descripción</label>
                                    <div><input type="text" name="title" autocomplete="off" required></div>
                                </div>
                                <div class="section">
                                    <label for="date">Fecha de gasto</label>
                                    <input type="date" name="date" id="" required>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <input id="data" type="submit" value="Listo">
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        $(document).on('click', '#new-income', function() {
            $('#income').modal('show')
        });
        $("#balance").submit(function(event) {
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var balance = $("#typebalance").val();
            alert(balance);
            $.ajax({
                type: 'POST',
                url: 'balance',
                dataType: 'json',
                data: {
                    balance: balance,
                },
                success: function(data) {


                },
                error: function(data) {
                    console.log("no funciona", data);
                }
            });

        });
    </script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>


</body>

</html>
<?php /**PATH C:\laragon\www\financiapp\resources\views/dashboard/index.blade.php ENDPATH**/ ?>