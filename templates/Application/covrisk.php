<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?= $this->Form->create(null, [
                    'url' => [
                        'action' => 'covrisk',
                        'controller' => 'Application'
                    ],
                    'id' => 'frm-states'
                ]) ?>
                <?= $this->Form->control('states', [
                    'options' => $statesLists,
                    'id' => 'states'
                ]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
<?php
if ($this->request->is('post'))
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