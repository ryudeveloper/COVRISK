<?php
if ($this->request->getData('states'))
    echo $this->element('Application/states_details')
?>
<?php $this->start('js') ?>
<script>
    $('#states').change(function() {
        console.log('foi');
        $('#frm-states').submit();
    })
</script>
<?php $this->end() ?>