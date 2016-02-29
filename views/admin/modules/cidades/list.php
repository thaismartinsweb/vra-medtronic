<div class="container-fluid">
    <div class="main_container" id="dashboard_page">
        <div class="row-fluid"></div>
        <div class="row-fluid">
            <div class="widget span12">
                <div class="widget-header">
                    <i class="icon-user-md"></i>
                    <h5>Cidades</h5>
                    <a href="<?php echo $link; ?>new" class="btn btn-plus btn-success pull-right">
                        <i class="icon-plus"></i> Adicionar Cidade
                    </a>
                </div>
                <div class="widget-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Estado</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php if($itens) { ?>
                                <?php foreach($itens as $item) { ?>
                                     <tr>
                                        <td><?php echo $item->id; ?></td>
                                        <td><?php echo $item->name; ?></td>
                                        <td><?php echo State::getAbbreviation($item->state_id); ?></td>
                                        <td>
                                            <a href="<?php echo $link; ?>edit/<?php echo $item->id; ?>" class="btn btn-small"><i class="icon-edit"></i></a>
                                            <a href="<?php echo $link; ?>delete/<?php echo $item->id; ?>" class="btn btn-smll btn-danger delete"><i class="icon-remove"></i></a>
                                        </td>
                                     </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4" style="text-align: center; padding: 50px 0;"> Nenhum item cadastrado</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>