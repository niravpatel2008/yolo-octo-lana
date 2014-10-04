<h3>Pricing</h3>
<?php
    foreach ($plans as $plan) {
?>
    <div>
        <?=ucfirst($plan->name)?> <br/>
        $<?=$plan->price?> - <?=$plan->type_value?> <?=$plan->type?><br/>
        <a href="<?=base_url()?>signup/<?=$plan->id?>">Buy Now</a><br/><br/>
    </div>
<?php
    }
?>
