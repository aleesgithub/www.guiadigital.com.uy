<?php /* Smarty version Smarty-3.1.18, created on 2016-08-30 02:06:45
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106755d61cf8925453-34391790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9824aaa8f5f6102080c18f1d937d185e240c37c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\user\\index.tpl',
      1 => 1472515583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106755d61cf8925453-34391790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61cf89a65c8_25559469',
  'variables' => 
  array (
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61cf89a65c8_25559469')) {function content_55d61cf89a65c8_25559469($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\vendor\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="container-fluid well" id="container-tabla">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
            <?php echo $_smarty_tpl->getSubTemplate ('backend/layout/search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <a href="/user/" id="a-borrar-busqueda"> Borrar busqueda </a>
        </div>
        
        <!-- xs -->
        <div class="col-xs-8 visible-xs">
            <h4>Listado de Usuarios</h4>
        </div>    
        
        <!-- sm -->
        <div class="col-sm-4 visible-sm">
            <h3>Listado de Usuarios</h3>
        </div>
        
        <!-- md -->
        <div class="col-md-5 visible-md">
            <h2>Listado de Usuarios</h2>
        </div>
        
        <div class="hidden-xs hidden-sm hidden-md col-lg-5 col-lg-pull-1 text-center">
            <h2>Listado de Usuarios</h2>
        </div>
        <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-right">
            <button type="button" class="btn btn-lg btn-info" onclick="location.href='/user/crear/'" title="Nuevo usuario" id="boton-crud"><span class="glyphicon glyphicon-plus"></span> Nuevo usuario </button>
        </div>
    </div>
    
    <div class="row">
        <div class=" col-lg-12 table-responsive">
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Imagen</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Mail</th>
                        <th>Fecha creado</th>
                        <th>Fecha modificado</th>
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
                            <td><a href="/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" target="_blank"><img class="img-rounded" src="/uploads/mini/<?php echo $_smarty_tpl->tpl_vars['row']->value['imagen'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
" /></a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['usr'];?>
</td>
                            <td><label> (<?php echo $_smarty_tpl->tpl_vars['row']->value['role'];?>
)</label>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='USR') {?>Usuario<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='ADM') {?>Administrador<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='REP') {?>Reporte<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['role']=='INV') {?>Invitado<?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
</td>
                            <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</a></td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['created'],"%d/%m/%Y %H:%M:%S");?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['updated'],"%d/%m/%Y %H:%M:%S");?>
</td>
                            <td class="pull-right"> 
                                <button type="button" class="btn btn-lg btn-primary" onclick="location.href='/user/actualizar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/'" title="Editar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
)" id="boton-crud"><span class="glyphicon glyphicon-pencil"></span> Editar </button>
                                <button type="button" class="btn btn-lg btn-warning" onclick="return (confirmar('/user/eliminar/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/', 'Seguro desea eliminar el usuario (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
)?'))" title="Eliminar (<?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apellido'];?>
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
</div><?php }} ?>
