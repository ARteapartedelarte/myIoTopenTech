<?php
	define('DBUSER','xxx');
	define('DBPWD','xxx');
	define('DBHOST','xxx');
	define('DBNAME','xxx');
	define('CAPTCHA_WEB','xxx');
	define('CAPTCHA_PRIVATE','xxx');
	define('TENANT_NAME','xxx');
	define('TENANT_PWD','xxx');
	define('TENANT_ID',"xxx");	
	define('TIPOS_DE_ACTIVOS','MAP01,IMAGE01');
	define('TIPOS_DE_DISPOSITIVOS','V02_001,V02_002');
	define('V02_001_CONFIG','<div class="md-body-1" style="padding-bottom: 10px; color: rgba(0,0,0,0.57);">Heartbeat</div><div class="body"> <div class="row" layout="row" layout-align="start center"> <div class="md-whiteframe-1dp" flex layout="column" style="padding-left: 5px; margin-bottom: 3px;"> <div class="row" layout="row"> <md-input-container flex class="md-block"> <label>N�mero de minutos entre heartbeats</label> <input type="number" size="10" step="1" min="0" max="60" ng-model="vm.configuracion.___0700"> </md-input-container> </div> </div> </div></div><div class="md-body-1" style="padding-bottom: 10px; color: rgba(0,0,0,0.57);">Coordenadas</div><div class="body"> <div class="row" layout="row" layout-align="start center"> <div class="md-whiteframe-1dp" flex layout="column" style="padding-left: 5px; margin-bottom: 3px;"> <div class="row" layout="row"> <md-input-container flex class="md-block"> <label>Posicion X</label> <input type="number" size="10" step=".01" min="0" max="1" ng-model="vm.configuracion.__xPos"> </md-input-container> <md-input-container flex class="md-block"> <label>Posicion Y</label> <input type="number" size="10" step="0.01" min="0.00" max="1.00" ng-model="vm.configuracion.__yPos"> </md-input-container> </div> </div> </div></div><div class="md-body-1" style="padding-bottom: 10px; color: rgba(0,0,0,0.57);">Alarmas</div><div class="body"> <div class="row" layout="row" layout-align="start center"> <div class="md-whiteframe-1dp" flex layout="column" style="padding-left: 5px; margin-bottom: 3px;"> <div flex layout="column"> <label class="checkbox-label">Activar alarma de cambio de estado</label> <md-checkbox ng-model="vm.configuracion.__alarmas.cambioDeEstado.enable" style="margin-bottom: 10px;">{{(vm.configuracion.__alarmas.cambioDeEstado.enable ? "value.true" : "value.false") | translate}}</md-checkbox> </div> <div class="row" layout="row"> <md-input-container class="md-block" style="min-width: 100px;"> <label>Disparar al </label> <md-select ng-disabled="!vm.configuracion.__alarmas.cambioDeEstado.enable" ng-required="vm.configuracion.__alarmas.cambioDeEstado.enable" name="cambioDeEstadoTrigger" ng-model="vm.configuracion.__alarmas.cambioDeEstado.trigger"> <md-option value="abrir"> abrir </md-option> <md-option value="cerrar"> cerrar </md-option> </md-select> <div ng-messages="editEntityForm.cambioDeEstadoTrigger.$error"> <div ng-message="required">Este dato es obligatorio. </div> </div> </md-input-container> <sustituir-notificaciones class="ng-scope">cambioDeEstado</sustituir-notificaciones> </div> </div> </div></div><div class="body"> <div class="row" layout="row" layout-align="start center"> <div class="md-whiteframe-1dp" flex layout="column" style="padding-left: 5px; margin-bottom: 3px;"> <div flex layout="column"> <label class="checkbox-label">Activar alarma de nivel bajo de bater�a</label> <md-checkbox ng-model="vm.configuracion.__alarmas.nivelDeBateria.enable" style="margin-bottom: 10px;">{{(vm.configuracion.__alarmas.nivelDeBateria.enable ? "value.true" : "value.false") | translate}}</md-checkbox> </div> <div class="row" layout="row"> <md-input-container flex class="md-block"> <label>Umbral (V)</label> <input type="decimal" size="10" ng-disabled="!vm.configuracion.__alarmas.nivelDeBateria.enable " ng-model="vm.configuracion.__alarmas.nivelDeBateria.umbralBateria" ng-required="vm.configuracion.__alarmas.nivelDeBateria.enable"> </md-input-container> <sustituir-notificaciones class="ng-scope">nivelDeBateria</sustituir-notificaciones> </div> </div> </div></div><div class="body"> <div class="row" layout="row" layout-align="start center"> <div class="md-whiteframe-1dp" flex layout="column" style="padding-left: 5px; margin-bottom: 3px;"> <div flex layout="column"> <label class="checkbox-label">Activar alarma de inactividad</label> <md-checkbox ng-model="vm.configuracion.__alarmas.inactividad.enable" style="margin-bottom: 10px;">{{(vm.configuracion.__alarmas.inactividad.enable ? "value.true" : "value.false") | translate}}</md-checkbox> </div> <div class="row" layout="row"> <md-input-container flex class="md-block"> <label>Umbral en segundos</label> <input type="number" size="10" ng-disabled="!vm.configuracion.__alarmas.inactividad.enable " ng-model="vm.configuracion.__alarmas.inactividad.umbralInactividad" ng-required="vm.configuracion.__alarmas.inactividad.enable"> </md-input-container> <sustituir-notificaciones class="ng-scope">inactividad</sustituir-notificaciones> </div> </div> </div></div>');
	define('IMAGE01_CONFIG','<div class="body"> <div class="row" layout="row" layout-align="start center"> <div class="md-whiteframe-1dp" flex layout="column" style="padding-left: 5px; margin-bottom: 3px;"> <div class="row" layout="row"> <md-input-container flex class="md-block"> <label>URL imagen fondo</label> <input type="string" size="50" ng-model="vm.configuracion.__urlImagenFondo" ng-required="true"> </md-input-container> </div> </div> </div> </div>');
	define('DASHBOARDS', array(
    'xxx',
    'xxx',
    'xxx',
	'xxx',
	'xxx'
));
