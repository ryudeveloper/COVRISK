<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<script>
    Swal.fire({
        title: '<?= $message ?>',
        text: '',
        icon: 'error',
        confirmButtonText: 'Ok'
    })
</script>