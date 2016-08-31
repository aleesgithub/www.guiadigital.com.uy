{foreach $rows as $row}
    <strong>{$row.nombre}</strong>&nbsp;&nbsp;
    <label class="lbl1">Creada:{$row.created|date_format:"%d/%m/%Y %H:%M:%S"} </label>
    <div class="nota" >
        {$row.texto}({$row.usuario})<br>
        <label class="lbl1">Acceso:</label>
        <label class="acceso">
        <strong>{$row.acceso}</strong> </label><br>

    </div>
{/foreach}
        
            
