<div ng-controller="EditProfileController">
    Company Name {{CompanyName}} {{IdProfile}} <br>
    Id Company<input type="text" ng-model="IdCompany" value="{{IdCompany}}"><hr>
    First Name    <input type="text" ng-model="FirstName"> <br>
    Midle Name    <input type="text" ng-model="MiddleName"> <br>
    Last Name    <input type="text" ng-model="LastName"> <br>
    Nick Name    <input type="text" ng-model="NickName"> <br>
    Id Profile  <input type="text" ng-model="IdProfile">
    <hr>
    <input type="file" ng-model="profile_picture" onchange="angular.element(this).scope().fileNameChanged(this)">
    <hr>
    item
    <hr>



    <fieldset  data-ng-repeat="choice in choices">
        <select ng-model="choice.key" ng-change="update(this)">
            <?php
            foreach($item_category as $item){
                $kode = $item->Kode;
                echo "<option>$kode </option>";
            }
            ?>
        </select>
        <input type="text" ng-model="choice.value" name="" placeholder="Enter {{choice.id}}">

        <button class="remove" ng-show="$last" ng-click="removeChoice()">-</button>
        <button class="addfields" ng-show="$last" ng-click="addNewChoice()">+</button>
    </fieldset>

    <button class="addfields" ng-click="addNewChoice()">Add fields</button>
    <button class="addfields" ng-click="dump()">Dump fields</button>

    <button class="addfields" ng-click="EditProfile()">Save ID card</button>
    <div id="choicesDisplay">
        {{ choices }}
    </div>

{{item_profile}}


</div>