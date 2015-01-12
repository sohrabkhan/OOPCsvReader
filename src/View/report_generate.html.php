<?php foreach ($transactions as $transaction): ?>
    [<?php echo $transaction->getMerchant()->getId(); ?> : <?php echo $transaction->getDate(); ?> : <?php echo $transaction->getCurrency()->getCode(); ?> <?php echo $transaction->getAmount(); ?>]
<?php endforeach; ?>