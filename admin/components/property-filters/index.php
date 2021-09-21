<?php /* This component should have access to $filters array */ ?>


<?php $showOperation = $showOperation ?? false; ?>

<div class="mt-6 form-search-01">
    <form class="form-inline mx-n1" id="accordion-5">
    
    <?php if($destinations):?>
        <div class="form-group p-1 w-25">
            <label for="location">Destino</label>
            <select class="form-control border-0 shadow-xxs-1 bg-transparent font-weight-600 w-100 filter-control" name="destination">
                <option value="">Todos</option>
                <?php foreach($destinations as $d):?>
                    <option value="<?php echo $d["slug"];?>" <?php echo $d["slug"] == $filters["destination"] ? "selected" : "";?>><?php echo $d["city"];?></option>
                <?php endforeach;?>
            </select>
        </div>
    <?php endif;?>
        
    <?php if($types):?>
        <div class="form-group p-1 w-25">
            <label for="location">Tipo de propiedad</label>
            <select class="form-control border-0 shadow-xxs-1 bg-transparent font-weight-600 w-100 filter-control" name="type">
                <option value="">Todos</option>
                <?php foreach($types as $t):?>
                    <option value="<?php echo $t["slug"];?>" <?php echo $t["slug"] == $filters["type"] ? "selected" : "";?>><?php echo $t["type"];?></option>
                <?php endforeach;?>
            </select>
        </div>
    <?php endif;?>

    <?php if($showOperation):?>
        <div class="form-group p-1 w-25">
            <label for="status">Operación</label>
            <select class="form-control border-0 shadow-xxs-1 bg-transparent font-weight-600 w-100 filter-control" name="operation">
                <option value="">Cualquiera</option>
                <option value="venta" <?php echo $filters["operation"] == "venta" ? "selected" : "";?>>Venta</option>
                <option value="renta" <?php echo $filters["operation"] == "renta" ? "selected" : "";?>>Renta</option>
            </select>
        </div>
    <?php endif;?>
    </form>
</div>
    
