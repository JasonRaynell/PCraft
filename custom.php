<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Custom PC | Build Your Own PC!</title>

    <!-- Bootstrap core CSS -->
    <link href="helper/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header.css"> 
  </head>

  <body class="bg-light">
  <?php include"layout/header.php"?>

    <div class="container">
        <?php
            include_once("dbconfig/config.php");

            $query = "SELECT * FROM product WHERE category = 'cpu'";
            $res = mysqli_query($connection, $query);

            $query1 = "SELECT * FROM product WHERE category = 'motherboard'";
            $res1 = mysqli_query($connection, $query1);

            $query2 = "SELECT * FROM product WHERE category = 'ram'";
            $res2 = mysqli_query($connection, $query2);

            $query3 = "SELECT * FROM product WHERE category = 'hdd'";
            $res3 = mysqli_query($connection, $query3);

            $query4 = "SELECT * FROM product WHERE category = 'hdd'";
            $res4 = mysqli_query($connection, $query4);

            $query5 = "SELECT * FROM product WHERE category = 'ssd'";
            $res5 = mysqli_query($connection, $query5);

            $query6 = "SELECT * FROM product WHERE category = 'ssd'";
            $res6 = mysqli_query($connection, $query6);

            $query7 = "SELECT * FROM product WHERE category = 'case'";
            $res7 = mysqli_query($connection, $query7);

            $query8 = "SELECT * FROM product WHERE category = 'gpu'";
            $res8 = mysqli_query($connection, $query8);

            $query9 = "SELECT * FROM product WHERE category = 'power supply'";
            $res9 = mysqli_query($connection, $query9);
        ?>
      <div class="py-5 text-center">
        <h2>Custom PC</h2>
        <p class="lead"></p>
      </div>
      <form action="transaction.php" method="POST">
      <input type="hidden" name="csrf" value="<?php echo $csrf?>">
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">CPU</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedcpu" id="cpu">
                    <option value="">Choose</option>
                    <?php
                        while ($row = mysqli_fetch_array($res)) { ?>
                            <option value="<?php echo $row['productname']; ?>" data-price="<?php echo $row['price']; ?>"><?php echo $row['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtycpu" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="pricecpu" id="priceInput" readonly="" value="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">Motherboard</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedmobo" id="motherboard">
                    <option value="">Choose</option>
                    <?php
                        while ($row1 = mysqli_fetch_array($res1)) { ?>
                            <option value="<?php echo $row1['productname']; ?>" data-price1="<?php echo $row1['price']; ?>"><?php echo $row1['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtymobo" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="pricemobo" id="priceInput1" readonly="" value="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">RAM</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedram" id="ram">
                    <option value="">Choose</option>
                    <?php
                        while ($row2 = mysqli_fetch_array($res2)) { ?>
                            <option value="<?php echo $row2['productname']; ?>" data-price2="<?php echo $row2['price']; ?>"><?php echo $row2['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtyram" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="priceram" id="priceInput2" readonly="" value="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">HDD 1</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedhdd1" id="hdd1">
                    <option value="">Choose</option>
                    <?php
                        while ($row3 = mysqli_fetch_array($res3)) { ?>
                            <option value="<?php echo $row3['productname']; ?>" data-price3="<?php echo $row3['price']; ?>"><?php echo $row3['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtyhdd1" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="pricehdd1" id="priceInput3" readonly="" value="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">HDD 2</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedhdd2" id="hdd2">
                    <option value="">Choose</option>
                    <?php
                        while ($row4 = mysqli_fetch_array($res4)) { ?>
                            <option value="<?php echo $row4['productname']; ?>" data-price4="<?php echo $row4['price']; ?>"><?php echo $row4['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtyhdd2" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="pricehdd2" id="priceInput4" readonly="" value="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">SSD 1</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedssd1" id="ssd1">
                    <option value="">Choose</option>
                    <?php
                        while ($row5 = mysqli_fetch_array($res5)) { ?>
                            <option value="<?php echo $row5['productname']; ?>" data-price5="<?php echo $row5['price']; ?>"><?php echo $row5['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtyssd1" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="pricessd1" id="priceInput5" readonly="" value="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">SSD 2</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedssd2" id="ssd2">
                    <option value="">Choose</option>
                    <?php
                        while ($row6 = mysqli_fetch_array($res6)) { ?>
                            <option value="<?php echo $row6['productname']; ?>" data-price6="<?php echo $row6['price']; ?>"><?php echo $row6['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtyssd2" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="pricessd2" id="priceInput6" readonly="" value="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">Case</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedcase" id="casing">
                    <option value="">Choose</option>
                    <?php
                        while ($row7 = mysqli_fetch_array($res7)) { ?>
                            <option value="<?php echo $row7['productname']; ?>" data-price7="<?php echo $row7['price']; ?>"><?php echo $row7['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtycasing" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="pricecase" id="priceInput7" readonly="" value="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">GPU</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedgpu" id="gpu">
                    <option value="">Choose</option>
                    <?php
                        while ($row8 = mysqli_fetch_array($res8)) { ?>
                            <option value="<?php echo $row8['productname']; ?>" data-price8="<?php echo $row8['price']; ?>"><?php echo $row8['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtygpu" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="pricegpu" id="priceInput8" readonly="" value="0">
            </div>
        </div>
        <div class="form-group row">
            <label for="parts" class="col-sm-1 col-form-label">Power Supply</label>
            <div class="col-sm-6">
                <select class="selectpicker" data-live-search="true" data-width="100%" name="selectedpsu" id="psu">
                    <option value="">Choose</option>
                    <?php
                        while ($row9 = mysqli_fetch_array($res9)) { ?>
                            <option value="<?php echo $row9['productname']; ?>" data-price9="<?php echo $row9['price']; ?>"><?php echo $row9['productname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm-1">
                <input type="number" class="form-control quantity" min="0" id="qtypsu" value="1">
            </div>
            <label for="parts" class="col-form-label text-muted">Rp</label>
            <div class="row-sm-1">
                <input type="text" class="form-control price" name="pricepsu" id="priceInput9" readonly="" value="0">
            </div>
        </div>
        <div class="sticky-bottom">
            <div class="form-group row"> 
                <label class="col-sm-8 col-form-label text-right"><b>Total</b></label>
                <label class="col-form-label text-muted">Rp</label>
                <div class="row-sm-1"> 
                    <input type="text" class="form-control font-weight-bold" name="total" id="total" readonly="" value="0">
                </div> 
            </div>
        </div>
        <div class="col-sm-20 text-center">
            <input class="btn btn-primary" type="submit" value="Buy"></input>
        </div>
        </form>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; PCraft</p>
         </footer>
    </div>

    <!-- Bootstrap core JavaScript 
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="helper/js/jquery-slim.min.js"></script>
    <script src="helper/js/popper.min.js"></script>
    <script src="helper/js/bootstrap.min.js"></script>
    <script src="helper/js/holder.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#cpu, #qtycpu').change(function () {
                var cpu = parseInt($('#cpu option:selected').attr('data-price'));
                var qcpu = parseInt($('#qtycpu').val());
                var tcpu = cpu * qcpu || 0;

                document.getElementById("priceInput").value = tcpu.toLocaleString('id', { minimumFractionDigits: 0 });
            });

            $('#motherboard, #qtymobo').change(function () {
                var mobo = parseInt($('#motherboard option:selected').attr('data-price1'));
                var qmobo = parseInt($('#qtymobo').val());
                var tmobo = mobo * qmobo || 0;

                document.getElementById("priceInput1").value = tmobo.toLocaleString('id', { minimumFractionDigits: 0 });
            });

            $('#ram, #qtyram').change(function () {
                var ram = parseInt($('#ram option:selected').attr('data-price2'));
                var qram = parseInt($('#qtyram').val());
                var tram = ram * qram || 0;

                document.getElementById("priceInput2").value = tram.toLocaleString('id', { minimumFractionDigits: 0 });
            });

            $('#hdd1, #qtyhdd1').change(function () {
                var hdd1 = parseInt($('#hdd1 option:selected').attr('data-price3'));
                var qhdd1 = parseInt($('#qtyhdd1').val());
                var thdd1 = hdd1 * qhdd1 || 0;

                document.getElementById("priceInput3").value = thdd1.toLocaleString('id', { minimumFractionDigits: 0 });
            });

            $('#hdd2, #qtyhdd2').change(function () {
                var hdd2 = parseInt($('#hdd2 option:selected').attr('data-price4'));
                var qhdd2 = parseInt($('#qtyhdd2').val());
                var thdd2 = hdd2 * qhdd2 || 0;

                document.getElementById("priceInput4").value = thdd2.toLocaleString('id', { minimumFractionDigits: 0 });
            });

            $('#ssd1, #qtyssd1').change(function () {
                var ssd1 = parseInt($('#ssd1 option:selected').attr('data-price5'));
                var qssd1 = parseInt($('#qtyssd1').val());
                var tssd1 = ssd1 * qssd1 || 0;

                document.getElementById("priceInput5").value = tssd1.toLocaleString('id', { minimumFractionDigits: 0 });
            });

            $('#ssd2, #qtyssd2').change(function () {
                var ssd2 = parseInt($('#ssd2 option:selected').attr('data-price6'));
                var qssd2 = parseInt($('#qtyssd2').val());
                var tssd2 = ssd2 * qssd2 || 0;

                document.getElementById("priceInput6").value = tssd2.toLocaleString('id', { minimumFractionDigits: 0 });
            });

            $('#casing, #qtycasing').change(function () {
                var casing = parseInt($('#casing option:selected').attr('data-price7'));
                var qcasing = parseInt($('#qtycasing').val());
                var tcasing = casing * qcasing || 0;

                document.getElementById("priceInput7").value = tcasing.toLocaleString('id', { minimumFractionDigits: 0 });
            });
            
            $('#gpu, #qtygpu').change(function () {
                var gpu = parseInt($('#gpu option:selected').attr('data-price8'));
                var qgpu = parseInt($('#qtygpu').val());
                var tgpu = gpu * qgpu || 0;

                document.getElementById("priceInput8").value = tgpu.toLocaleString('id', { minimumFractionDigits: 0 });
            });
            
            $('#psu, #qtypsu').change(function () {
                var psu = parseInt($('#psu option:selected').attr('data-price9'));
                var qpsu = parseInt($('#qtypsu').val());
                var tpsu = psu * qpsu || 0;

                document.getElementById("priceInput9").value = tpsu.toLocaleString('id', { minimumFractionDigits: 0 });
            });
            
            $('#cpu, #qtycpu, #motherboard, #qtymobo, #ram, #qtyram, #hdd1, #qtyhdd1, #hdd2, #qtyhdd2, #ssd1, #qtyssd1, #ssd2, #qtyssd2, #casing, #qtycasing, #gpu, #qtygpu, #psu, #qtypsu').change(function () {
                var cpu = parseInt($('#cpu option:selected').attr('data-price'));
                var qcpu = parseInt($('#qtycpu').val());
                var tcpu = cpu * qcpu || 0;

                var mobo = parseInt($('#motherboard option:selected').attr('data-price1'));
                var qmobo = parseInt($('#qtymobo').val());
                var tmobo = mobo * qmobo || 0;

                var ram = parseInt($('#ram option:selected').attr('data-price2'));
                var qram = parseInt($('#qtyram').val());
                var tram = ram * qram || 0;

                var hdd1 = parseInt($('#hdd1 option:selected').attr('data-price3'));
                var qhdd1 = parseInt($('#qtyhdd1').val());
                var thdd1 = hdd1 * qhdd1 || 0;

                var hdd2 = parseInt($('#hdd2 option:selected').attr('data-price4'));
                var qhdd2 = parseInt($('#qtyhdd2').val());
                var thdd2 = hdd2 * qhdd2 || 0;

                var ssd1 = parseInt($('#ssd1 option:selected').attr('data-price5'));
                var qssd1 = parseInt($('#qtyssd1').val());
                var tssd1 = ssd1 * qssd1 || 0;

                var ssd2 = parseInt($('#ssd2 option:selected').attr('data-price6'));
                var qssd2 = parseInt($('#qtyssd2').val());
                var tssd2 = ssd2 * qssd2 || 0;

                var casing = parseInt($('#casing option:selected').attr('data-price7'));
                var qcasing = parseInt($('#qtycasing').val());
                var tcasing = casing * qcasing || 0;

                var gpu = parseInt($('#gpu option:selected').attr('data-price8'));
                var qgpu = parseInt($('#qtygpu').val());
                var tgpu = gpu * qgpu || 0;

                var psu = parseInt($('#psu option:selected').attr('data-price9'));
                var qpsu = parseInt($('#qtypsu').val());
                var tpsu = psu * qpsu || 0;

                var summary = 0;
                var arr = [tcpu, tmobo, tram, thdd1, thdd2, tssd1, tssd2, tcasing, tgpu, tpsu];

                for(i=0; i<10; i++){
                    summary += arr[i];
                }

                document.getElementById("total").value = summary.toLocaleString('id', { minimumFractionDigits: 0 });
            });
        });
    </script>
  </body>
</html>