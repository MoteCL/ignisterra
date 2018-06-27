<ul class="nav navbar-nav">
    <li class="active">
        <a href="<?php echo base_url('index.php/main/menu'); ?>" target="_self" style="color:">
<span class="icon voyager-documentation"></span> <span class="title">Panel de Control</span> </a>
    </li>
    <li class="">
        <a href="<?php echo base_url('index.php/mantencion/index'); ?>" target="_self" style="color:"> <span class="icon voyager-tag"></span> <span class="title">Solicitar Mant.<span>
        </a>
    </li>
    <li class="dropdown">
        <a href="#3-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-search"></span> <span class="title">Buscador</span> </a>
        <div id="3-dropdown-element" class="panel-collapse collapse ">
            <div class="panel-body">
                <ul class="nav navbar-nav">

                    <li class="">
                        <a href="<?php echo base_url('index.php/mantencion/buscarView');  ?>" target="_self" style="color:">
<span class="icon voyager-search"></span> <span class="title">Buscar Mantencion</span> </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url('index.php/seguimiento/entreFechas');?>" target="_self" style="color:">
<span class="icon voyager-calendar"></span> <span class="title">Entre fecha</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </li>

    <!-- <li class="">
        <a href="<?php echo base_url('index.php/main/configEmail'); ?>" target="_self" style="color:"> <span class="icon voyager-mail"></span> <span class="title">Config Email<span>
        </a>
    </li> -->

    <li class="dropdown">
        <a href="#1-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-list"></span> <span class="title">Listado</span> </a>
        <div id="1-dropdown-element" class="panel-collapse collapse ">
            <div class="panel-body">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="<?php echo base_url('index.php/mantencion/listado');  ?>" target="_self" style="color:">
<span class="icon voyager-list"></span> <span class="title">Lista de Mantencion</span> </a>
                    </li>


                    <li class="">
                        <a href="<?php echo base_url('index.php/seguimiento/MAN_Seguimiento');  ?>" target="_self" style="color:">
<span class="icon voyager-check"></span> <span class="title">List Man. asignadas</span> </a>
                    </li>


                </ul>
            </div>
        </div>
    </li>
    <li class="dropdown">
        <a href="#2-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self" style="color:"> <span class="icon voyager-file-text"></span> <span class="title">Reportes</span> </a>
        <div id="2-dropdown-element" class="panel-collapse collapse ">
            <div class="panel-body">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="#" target="_self" style="color:">
<span class="icon voyager-list"></span> <span class="title">Desemnio Maquinas</span> </a>
                    </li>
                    <li class="">
                        <a href="#" target="_self" style="color:">
<span class="icon voyager-check"></span> <span class="title">Indice de cumplimiento</span> </a>
                    </li>
                    <li class="">
                        <a href="#" target="_self" style="color:">
<span class="icon voyager-person"></span> <span class="title">Informe horas hombres</span> </a>
                    </li>
                    <li class="">
                        <a href="#" target="_self" style="color:">
<span class="icon voyager-truck"></span> <span class="title">Historial Maquinas</span> </a>
                    </li>
                    <li class="">
                        <a href="#" target="_self" style="color:">
<span class="icon voyager-settings"></span> <span class="title">Informe Tecnicos</span> </a>
                    </li>
                    <li class="">
                        <a href="#" target="_self" style="color:">
<span class="icon voyager-laptop"></span> <span class="title">Programa Mantencion</span> </a>
                    </li>
                </ul>
            </div>
        </div>
    </li>
    <li class="">
        <a href="<?php echo base_url('index.php/calendario/index');  ?>" target="_self" style="color:">
<span class="icon voyager-calendar"></span> <span class="title">Calendarizacion</span> </a>
    </li>
</ul>
