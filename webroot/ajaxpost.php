$(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: "<?= $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'updateGeolocation'
                            ]) ?>",
                    method: "POST", //First change type to method here

                    data: {
                        item_id: "id",
                        _csrfToken: "<?= $this->request->getAttribute('csrfToken');?>"
                    },
                    success: function(response) {
                        document.getElementById("disp").innerHTML = response;
                    },
                    error: function() {
                        //alert("error");
                    }

                });
            }, 5000);
        });