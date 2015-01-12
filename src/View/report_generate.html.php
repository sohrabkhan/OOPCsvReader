<?php foreach ($transactions as $transaction): ?>
    [
    <?php echo $transaction->getMerchant()->getId(); ?> :
    <?php echo $transaction->getDate(); ?> :
    <?php echo $transaction->getCurrency()->getSymbol(); ?>
    <?php echo $transaction->getAmount(); ?>
    ]
    <br>
<?php endforeach; ?>