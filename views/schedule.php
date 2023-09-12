<?php
    $this->layout("base", $data);
    $estrutura = $data['estrutura'];
    $dados = $data['agenda'];
    $pesquisa = $data['pesquisa'];
    $tipo = "secretaria";
    $horaInicial = $estrutura->agenda_inicio;
    $horaFinal = $estrutura->agenda_fim;
    $tempoConsulta = $estrutura->tempo_consulta;
    $horaInicialAlmoco = $estrutura->agenda_inicio_almoco;
    $horaFinalAlmoco = $estrutura->agenda_fim_almoco;
?>
<div class="container content">
<div class="app_launch_header">
    <form class="app_launch_form_filter app_form" action="<?=CONF_URL_BASE?>/agenda" method="post">

        <input list="datelist" type="date" class="radius mask-month" name="data" value="<?= $pesquisa ?>">
        <button class="filter radius transition icon-filter icon-notext"></button>
    </form>
</div>

<?php
if($tipo == "paciente"){
    ?>
    <section class="app_launch_box">
        <div class="app_launch_item header">
            <p class="hora">Horário</p>
            <p class="enrollment">Convênio</p>
            <p class="agendar">Agendar</p>
        </div>
        <?php for ($hora = $estrutura->agenda_inicio; $hora <= $estrutura->agenda_fim; $hora++): ?>
            <article class="app_launch_item">
                <p class="hora"><?= str_pad($hora, 2, 0, 0); ?>:00:00</p>
                <p class="enrollment">UNIMED</p>
                <p class="agendar">
                    <span title="Agendar" class="check income icon-thumbs-o-up transition"></span>
                </p>
            </article>
        <?php endfor; ?>
    </section>
<?php } ?>

<?php
if($tipo == "secretaria"){
    ?>
    <section class="app_launch_box">
        <div class="app_launch_item header">
            <p class="hora">Horário</p>
            <p class="category">Paciente</p>
            <p class="enrollment">Convênio</p>
            <p class="price">Contato Responsável</p>
            <p class="agendar">Agendar</p>
        </div>
        <?php  while($horaInicial < $horaFinal){ 
            if($horaInicial < $horaInicialAlmoco || $horaInicial >= $horaFinalAlmoco){            
            ?>
            <article class="app_launch_item">
                <p class="hora"><?=$horaInicial?></p>
                <p class="category">LULU</p>
                <p class="enrollment">UNIMED</p>
                <p class="enrollment">(19) 99723-0262</p>
                <p class="agendar">
                    <span title="Pagar" class="check income icon-thumbs-o-up transition"></span>
                </p>
            </article>
    </section>
<?php } 
        $horaInicial = date('H:i:s', strtotime('+'.$tempoConsulta.' minute', strtotime($horaInicial)));
    }
}?>
</div>

