<div ng-controller="ViewCardController">
{{card}}
<hr>
<li ng-repeat="profile in profiles">
    {{profile.KodeCategory}}   :   {{profile.Label}}
</li>
<a href="#!/edit_card/{{card.NickName}}">edit card</a>
    <a href="http://localhost/idcard/index.php/vcf/generate/{{card.NickName}}">Save Contact</a>
</div>

