<main id="main">
    <section id="content" class="pt-3 pb-5">
        <div class="container">
            <div class="row about-extra pt-3">
                <div class="col-lg-12 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                    <div class="card border-0 table-responsive">
                    </div>

    <div style="background-color: #fee6a8;" class="card-header">
        <h3 class="card-title font-weight-bold text-center text-lg-left text-dark pt-3">Scientific Committee CaaS 2022</h3>
    </div>
    <table class="table table-hover table-striped committee">    
        <tbody>
                <tr>
                    <?php foreach ($komite as $index => $komite) {?>
                        <?php if ($komite->jenis_komite == 'scientific') {?>
                    <td><i class="fa fa-group"></i></td>
                    <td class="font-weight-bold"><?= $komite->nama_komite ?></td>
                    <td><?= $komite->kampus_komite?>, <?= $komite->negara_komite?></td>
                </tr>
                <?php }?>
                <?php } ?>   
        </tbody>
    </table>
</div>

<div class="card border-0 table-responsive">
    <div style="background-color: #fee6a8;" class="card-header">
        <h3 class="card-title font-weight-bold text-center text-lg-left text-dark pt-3 mt-5">Organizing Committee CaaS 2022</h3>
    </div>
    <table class="table table-hover table-striped committee">    
        <tbody>
        <tr>
                    <?php foreach ($komite2 as $index => $komite) {?>
                        <?php if ($komite->jenis_komite == 'organizing') {?>
                    <td><i class="fa fa-group"></i></td>
                    <td class="font-weight-bold"><?= $komite->nama_komite ?></td>
                    <td><?= $komite->status_komite?></td>
                </tr>
                <?php }?>
                <?php } ?>      
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </section>
</main>