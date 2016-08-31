<?php /* Smarty version Smarty-3.1.18, created on 2015-08-20 20:41:50
         compiled from "C:\xampp\htdocs\www.guiadigital.com.uy\application\templates\backend\layout\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1434355d61f6e8add29-25549588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ae429bf2a993a39b539b897ec07d849034f608d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www.guiadigital.com.uy\\application\\templates\\backend\\layout\\edit.tpl',
      1 => 1439403321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1434355d61f6e8add29-25549588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d61f6e8b3ba4_20177476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d61f6e8b3ba4_20177476')) {function content_55d61f6e8b3ba4_20177476($_smarty_tpl) {?><div class="editor" id="toolbar1">
   
                    <div class="imagebutton" id="cut"><img  class="image" src="/img/cortar.png" alt="Cut" title="Cut"></div>
                    <div class="imagebutton" id="copy"><img  class="image" src="/img/copiar.png" alt="Copy" title="Copy"></div>
                    <div class="imagebutton" id="paste"><img  class="image" src="/img/pegar.png" alt="Paste" title="Paste"></div>
                    <div  class="imagebutton" id="undo"><img  class="image" src="/img/undo.png" alt="Undo" title="Undo"></div>
                    <div  class="imagebutton" id="redo"><img class="image" src="/img/redo.png" alt="Redo" title="Redo"></div>
                    <div  class="imagebutton" id="createlink"><img class="image" src="/img/enlace.png" alt="Insert Link" title="Insert Link"></div>
                    <div  class="imagebutton" id="createimage"><img  class="image" src="/img/insertimage.png" alt="Insert Image" title="Insert Image"></div>
                    <div  class="imagebutton" id="createtable"><img  class="image" src="/img/table.png" alt="Insert Table" title="Insert Table" width="25px" height="25px"></div>
                    <div style="" class="imagebutton" id="bold"><img class="image" src="/img/negrita.png" alt="Bold" title="Bold"></div>
                    <div style="" class="imagebutton" id="italic"><img class="image" src="/img/italic.png" alt="Italic" title="Italic"></div>
                    <div style="" class="imagebutton" id="underline"><img class="image" src="/img/underline.png" alt="Underline" title="Underline"></div>
                    <div  class="imagebutton" id="forecolor"><img  class="image" src="/img/forecolor.png" alt="Text Color" title="Text Color"></div>
                    <div  class="imagebutton" id="hilitecolor"><img  class="image" src="/img/backcolor.png" alt="Background Color" title="Background Color"></div>
                    <div  class="imagebutton" id="justifyleft"><img class="image" src="/img/left.png" style="width:35px; height:35px" alt="Align Left" title="Align Left"></div>
                    <div  class="imagebutton" id="justifycenter"><img class="image" src="/img/center.png" style="width:35px; height:35px" alt="Center" title="Center"></div>
                    <div  class="imagebutton" id="justifyright"><img class="image" src="/img/rigth.png" style="width:35px; height:35px" alt="Align Right" title="Align Right"></div>
                    <div  class="imagebutton" id="insertorderedlist"><img class="image" src="/img/orderedlist.png" alt="Ordered List" title="Ordered List"></div>
                    <div class="imagebutton" id="insertunorderedlist"><img class="image" src="/img/unorderedlist.png" alt="Unordered List" title="Unordered List"></div>
                    <div  class="imagebutton" id="outdent"><img class="image" src="/img/outdent.png" style="width:35px; height:35px" alt="Outdent" title="Outdent"></div>
                    <div  class="imagebutton" id="indent"><img class="image" src="/img/indent.png" style="width:35px; height:35px" alt="Indent" title="Indent"></div>
                    <select id="formatblock" onChange="Select(this.id);" class="formatblock">
                        <option selected="selected" value="&lt;p&gt;">Normal</option>
                        <option value="&lt;p&gt;">Paragraph</option>
                        <option value="&lt;h1&gt;">Heading 1 </option>
                        <option value="&lt;h2&gt;">Heading 2 </option>
                        <option value="&lt;h3&gt;">Heading 3 </option>
                        <option value="&lt;h4&gt;">Heading 4 </option>
                        <option value="&lt;h5&gt;">Heading 5 </option>
                        <option value="&lt;h6&gt;">Heading 6 </option>
                        <option value="&lt;address&gt;">Address </option>
                        <option value="&lt;pre&gt;">Formatted </option>
                    </select>
                    <select id="fontname" onChange="Select(this.id);" class="formatblock">
                      <option selected="selected" value="Font">Font</option>
                      <option value="Arial">Arial</option>
                      <option value="Courier">Courier</option>
                      <option value="Times New Roman">Times New Roman</option>
                    </select>
                
                    <select unselectable="on" id="fontsize" onChange="Select(this.id);" class="formatblock">
                        <option selected="selected" value="Size">Size</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>  
                    </select>
</div>  
    
                    
                

<!--<div class="editor" id="toolbar1">
    <label class="lbl3">Editor</label><img src="/img/logosysav.png" width="40%" height="40%">
    <table  cellspacing="0" cellpadding="0" style=" visibility: visible;"  id="toolbar2">
        <tbody>
            <tr>
                <td colspan="3"><label class="lbl6">Portapapeles</label>
            </tr>
            <tr>
                <td>
                    <div class="imagebutton" id="cut"><img style="left: 1px; top: 1px;" class="image" src="/img/cortar.png" alt="Cut" title="Cut"></div>
                </td>
                <td>
                    <div class="imagebutton" id="copy"><img style="left: 1px; top: 1px;" class="image" src="/img/copiar.png" alt="Copy" title="Copy"></div>
                </td>
                <td>
                    <div class="imagebutton" id="paste"><img style="left: 1px; top: 1px;" class="image" src="/img/pegar.png" alt="Paste" title="Paste"></div>
                </td>
            </tr>
        </tbody>
    </table>
    <table  cellspacing="0" cellpadding="0" style=" visibility: visible;"  id="toolbar3">
        <tbody>
            <tr>
                <td colspan="2"><label class="lbl6">Deshacer</label>
            </tr>
            <tr>      
                <td>
                    <div  class="imagebutton" id="undo"><img style="left: 1px; top: 1px;" class="image" src="/img/undo.png" alt="Undo" title="Undo"></div>
                </td>
                <td>
                    <div  class="imagebutton" id="redo"><img class="image" src="/img/redo.png" alt="Redo" title="Redo"></div>
                </td>
            </tr>
        </tbody>
    </table>
    <table  cellspacing="0" cellpadding="0" style=" visibility: visible;"  id="toolbar4">
        <tbody>
            <tr>
                <td colspan="3"><label class="lbl6">Insertar</label>
            </tr>
            <tr>
                <td>
                    <div  class="imagebutton" id="createlink"><img class="image" src="/img/enlace.png" alt="Insert Link" title="Insert Link"></div>
                </td>
                <td>
                    <div  class="imagebutton" id="createimage"><img style="left: 1px; top: 1px;" class="image" src="/img/insertimage.png" alt="Insert Image" title="Insert Image"></div>
                </td>
                <td>
                    <div  class="imagebutton" id="createtable"><img style="left: 1px; top: 1px;" class="image" src="/img/table.png" alt="Insert Table" title="Insert Table" width="25px" height="25px"></div>
                </td>
            </tr>
        </tbody>
    </table>
    <table  cellspacing="0" cellpadding="0" style=" visibility: visible;"  id="toolbar5">
        <tbody>
            <tr>
                <td colspan="3"><label class="lbl6">Fuente</label>
            </tr>
            <tr>
                <td>
                    <div style="" class="imagebutton" id="bold"><img class="image" src="/img/negrita.png" alt="Bold" title="Bold"></div>
                </td>
                <td>
                    <div style="" class="imagebutton" id="italic"><img class="image" src="/img/italic.png" alt="Italic" title="Italic"></div>
                </td>
                <td>
                    <div style="" class="imagebutton" id="underline"><img class="image" src="/img/underline.png" alt="Underline" title="Underline"></div>
                </td>
            </tr>
        </tbody>
    </table>
    <table  cellspacing="0" cellpadding="0"style="visibility: visible;" id="toolbar10">
        <tbody>
            <tr>
                <td >
                    <select id="formatblock" onChange="Select(this.id);" class="text">
                        <option selected="selected" value="&lt;p&gt;">Normal</option>
                        <option value="&lt;p&gt;">Paragraph</option>
                        <option value="&lt;h1&gt;">Heading 1 </option>
                        <option value="&lt;h2&gt;">Heading 2 </option>
                        <option value="&lt;h3&gt;">Heading 3 </option>
                        <option value="&lt;h4&gt;">Heading 4 </option>
                        <option value="&lt;h5&gt;">Heading 5 </option>
                        <option value="&lt;h6&gt;">Heading 6 </option>
                        <option value="&lt;address&gt;">Address </option>
                        <option value="&lt;pre&gt;">Formatted </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td >
                    <select id="fontname" onChange="Select(this.id);" class="text">
                      <option selected="selected" value="Font">Font</option>
                      <option value="Arial">Arial</option>
                      <option value="Courier">Courier</option>
                      <option value="Times New Roman">Times New Roman</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <select unselectable="on" id="fontsize" onChange="Select(this.id);" class="text">
                        <option selected="selected" value="Size">Size</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>  
                    </select>
                </td>                
            </tr>
        </tbody>
    </table>
    <table  cellspacing="0" cellpadding="0" style=" visibility: visible;"  id="toolbar6">
        <tbody>
            <tr>
                <td>
                    <div style="left: 10px; " class="imagebutton" id="forecolor"><img style="left: 1px; top: 1px;" class="image" src="/img/forecolor.png" alt="Text Color" title="Text Color"></div>
                </td>
                <td>
                    <div style="left: 40px; " class="imagebutton" id="hilitecolor"><img style="left: 1px; top: 1px;" class="image" src="/img/backcolor.png" alt="Background Color" title="Background Color"></div>
                </td>
            </tr>
        </tbody>
    </table>
    <table  cellspacing="0" cellpadding="0" style=" visibility: visible;"  id="toolbar7">
        <tbody>
            <tr>
                <td colspan="3"><label class="lbl6">Alineaci&oacute;n</label>
            </tr>
            <tr>
                <td>
                    <div style="left: 10px; " class="imagebutton" id="justifyleft"><img class="image" src="/img/left.png" alt="Align Left" title="Align Left"></div>
                </td>
                <td>
                    <div style="left: 40px; " class="imagebutton" id="justifycenter"><img class="image" src="/img/center.png" alt="Center" title="Center"></div>
                </td>
                <td>
                    <div style="left: 70px; " class="imagebutton" id="justifyright"><img class="image" src="/img/rigth.png" alt="Align Right" title="Align Right"></div>
                </td>
            </tr>
        </tbody>
    </table>
    <table  cellspacing="0" cellpadding="0" style=" visibility: visible;"  id="toolbar8">
        <tbody>
            <tr>
                <td>
                    <div  style="left: 10px; " class="imagebutton" id="insertorderedlist"><img class="image" src="/img/orderedlist.png" alt="Ordered List" title="Ordered List"></div>
                </td>
                <td>
                    <div style="left: 40px; " class="imagebutton" id="insertunorderedlist"><img class="image" src="/img/unorderedlist.png" alt="Unordered List" title="Unordered List"></div>
                </td>
            </tr>
        </tbody>
    </table>
    <table  cellspacing="0" cellpadding="0" style=" visibility: visible;"  id="toolbar9">
        <tbody>
            <tr>
                <td>
                    <div style="left: 10px; " class="imagebutton" id="outdent"><img class="image" src="/img/outdent.png" alt="Outdent" title="Outdent"></div>
                </td>
                <td>
                    <div style="left: 40px; " class="imagebutton" id="indent"><img class="image" src="/img/indent.png" alt="Indent" title="Indent"></div>
                </td>
            </tr>
        </tbody>
    </table>
    
</div>--><?php }} ?>
