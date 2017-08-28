<div ng-controller="ViewCardController">
    {{card}}
    {{company}}
    {{profiles}}
<hr>
    List Item
    <hr>
<li ng-repeat="profile in profiles">
    {{profile.KodeCategory}}   :   {{profile.Label}}
</li>
<a href="#!/edit_card/{{card.NickName}}">edit card</a>
    <a href="http://localhost/idcard/index.php/vcf/generate/{{card.NickName}}">Save Contact</a>

    <?php
    $base_url_encoded = urlencode("http://localhost/idcard/index.php/vcf/generate/");
    ?>
    <a href="whatsapp://send?text=<?php echo $base_url_encoded; ?>{{card.NickName}}"> Share Card</a>
</div>

