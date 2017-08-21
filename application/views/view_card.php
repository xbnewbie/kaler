<div ng-controller="ViewCardController">
{{card}}
<hr>
<li ng-repeat="profile in profiles">
    {{profile.KodeCategory}}   :   {{profile.Label}}
</li>
<a href="#!/edit_card/{{card.NickName}}">edit card</a>
</div>

