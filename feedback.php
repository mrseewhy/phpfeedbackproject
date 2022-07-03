<?php require_once('partials/header.php'); ?>
<?php 
$sql = 'select * from feedback_table';
$result = mysqli_query($con, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<div class="w-2/4 mx-auto mt-8">

<?php if(empty($feedbacks)): ?>
    <div class="block p-6 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">No feedbacks yet</h5>
</div>

    <?php else: ?>
<?php foreach( $feedbacks as $feedback): ?>
<div class="block p-6 my-4 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $feedback['feedback']?></h5>
    <p class="font-normal text-gray-700 dark:text-gray-400"><?= $feedback['name']?> on <?= $feedback['date']?></p>
    <p class="font-small text-gray-700 dark:text-gray-400"><?= $feedback['email']?></p>
</div>
<?php endforeach ?>
<?php endif ?>
</div>


<?php require_once('partials/footer.php'); ?>