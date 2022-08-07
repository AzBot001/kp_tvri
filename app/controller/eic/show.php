<?php

include '../../env.php';
include '../../../base_url.php';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            function slideout() {
                setTimeout(function() {
                    $("#response").slideUp("slow", function() {});
                }, 2000);
            }
            $(function() {
                $("#list ul").sortable({
                    opacity: 0.8,
                    cursor: 'move',
                    update: function() {
                        var order = $(this).sortable("serialize") + '&update=update';
                        $.post("<?= $base_url ?>app/controller/eic/updatelist.php", order, function(theResponse) {
                            $("#response").html(theResponse);
                            $("#response").slideDown('slow');
                            slideout();
                        })
                    }
                });
            });
        });
    </script>
<div id="list">
    <div id="response"></div>
<ul class="list-group">
    <?php

    $query = $mysqli->query("SELECT * FROM detail_rundown WHERE id_rundown = '{$_POST['idl']}' ORDER BY urutan ASC");
    while ($r = $query->fetch_assoc()) {
    ?>
        <li class="list-group-item col-12" id="arrayorder_<?= $r['id_detail_rundown'] ?>">
            <?php

                if ($r['id_naskah_default'] == '0') {
                    $dff = $mysqli->query("SELECT * FROM naskah WHERE id_naskah = '{$r['id_naskah']}'");
                    $data = $dff->fetch_assoc();
                    echo $data['judul'];
                }else{
                    $dff = $mysqli->query("SELECT * FROM naskah_default WHERE id_naskahdefault = '{$r['id_naskah_default']}'");
                    $data = $dff->fetch_assoc();
                    echo $data['judul_naskah'];
                }

                if ($r['id_naskah_default'] == '0' && $r['id_naskah'] == '0') {
                    echo 'Teaser';
                }

            ?>
        </li>
    <?php
    }
    ?>
</ul>
</div>