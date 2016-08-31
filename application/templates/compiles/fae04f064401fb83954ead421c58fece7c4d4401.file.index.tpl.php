<?php /* Smarty version Smarty-3.1.18, created on 2016-08-28 00:44:31
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\empresa\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1237355d63955ec1337-62198606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae04f064401fb83954ead421c58fece7c4d4401' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\empresa\\index.tpl',
      1 => 1472337870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1237355d63955ec1337-62198606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d639560517c4_89381405',
  'variables' => 
  array (
    'estados' => 0,
    'estado' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d639560517c4_89381405')) {function content_55d639560517c4_89381405($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="container-fluid well" id="container-tabla">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
            <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <a href="/empresa/" id="a-borrar-busqueda"> Borrar busqueda </a>
            <label>Estado</label><select class="text" id='estado' id="estado" name='estado' onchange="location.href='?estado='+this.value"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['estado']->value),$_smarty_tpl);?>
</select>
        </div>
        
        <!-- xs -->
        <div class="col-xs-8 visible-xs">
            <h4 class="titulo">Listado de Empresas</h4>
        </div>    
        
        <!-- sm -->
        <div class="col-sm-4 visible-sm">
            <h3 class="titulo">Listado de Empresas</h3>
        </div>
        
        <!-- md -->
        <div class="col-md-5 visible-md">
            <h2 class="titulo">Listado de Empresas</h2>
        </div>
        
        <div class="hidden-xs hidden-sm hidden-md col-lg-5 col-lg-pull-1 text-center">
            <h2 class="titulo">Listado de Empresas</h2>
        </div>
        <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-right">
            <button type="button" class="btn btn-lg btn-info" onclick="location.href='/empresa/crear/'" title="Nueva empresa" id="boton-crud"><span class="glyphicon glyphicon-plus"></span> Nueva empresa</button>
        </div>
    </div>
    
    <div class="row">
        <div class=" col-lg-12 table-responsive">
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Localidad</th>
                        <th>Departamento</th>
                        <th>Teléfono</th>
                        <th>Celular</th>
                        <th></th>
                        <th></th>
                        <th>Descripción</th>
                        <th>#Contacto</th>
                        <th>Usuario</th>
                        <th>Estado</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <td><a href="/img/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img class="img-rounded" src="/img/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
" alt="/img/uploads/noimagen.png" width="65" height="65" /></a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['direccion'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['localidad'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['departamento'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['celular'];?>
</td>
                            <td><!-- Email -->
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['email']) {?>
                                    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
"><i class="fa fa-envelope-o fa-2x"></i></span></a>
                                <?php }?>
                            </td>
                            <td><!-- Web -->
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['web']) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['web'];?>
" target="blank"><i class="fa fa-home fa-2x"></i></span></a>
                               <?php }?>
                            </td>
                            <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['descripcion'],30,"...",true);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['contactoId'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usuario'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
                            <td class="pull-right"> 
                                <button type="button" class="btn btn-lg btn-primary" onclick="location.href='/empresa/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" title="Editar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
" id="boton-crud"><span class="glyphicon glyphicon-pencil"></span> Editar </button>
                                <button type="button" class="btn btn-lg btn-warning" onclick="return (confirmar('/empresa/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar la empresa (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)?'))" title="Eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
)" id="boton-crud"> <span class="glyphicon glyphicon-remove"></span> Eliminar </button>
                               
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
    <div><?php echo $_smarty_tpl->getSubTemplate ('backend/layout/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</div>






<!-- <td>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['facebook']) {?>
            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value['facebook'];?>
"><i class="fa fa-facebook fa-2x"></i></span></a>
        <?php }?>
    </td>
    <td>

        <?php if ($_smarty_tpl->tpl_vars['row']->value['twitter']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['twitter'];?>
" target="blank"><i class="fa fa-twitter fa-2x"></i></span></a>
        <?php }?>
    </td>
    <td>

        <?php if ($_smarty_tpl->tpl_vars['row']->value['youtube']) {?>
            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value['youtube'];?>
"><i class="fa fa-youtube fa-2x"></i></span></a>
        <?php }?>
    </td>
    <td>

        <?php if ($_smarty_tpl->tpl_vars['row']->value['linkedin']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['linkedin'];?>
" target="blank"><i class="fa fa-linkedin fa-2x"></i></span></a>
        <?php }?>
    </td>
    <td>

        <?php if ($_smarty_tpl->tpl_vars['row']->value['rss']) {?>
            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value['rss'];?>
"><i class="fa fa-rss fa-2x"></i></span></a>
        <?php }?>
    </td>
    <td>

        <?php if ($_smarty_tpl->tpl_vars['row']->value['googlemaps']) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['googlemaps'];?>
" target="blank"><i class="fa fa-map fa-2x"></i></span></a>
        <?php }?>
    </td>

--><?php }} ?>
