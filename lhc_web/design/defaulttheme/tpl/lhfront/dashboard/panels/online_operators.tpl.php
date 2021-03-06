<div class="panel panel-default panel-dashboard" data-panel-id="online_operators">
	<div class="panel-heading">
		<i class="material-icons chat-active">account_box</i><?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/titles/online_operators.tpl.php'));?> ({{online_op.list.length}}{{online_op.list.length == lhc.limito ? '+' : ''}})</a>
	</div>
	<div>  
  
  <?php $optinsPanel = array('panelid' => 'operatord','limitid' => 'limito'); ?>
  <?php include(erLhcoreClassDesign::designtpl('lhfront/dashboard/panels/parts/options.tpl.php'));?>
 
  <div class="panel-list">
			<table class="table table-condensed mb0 table-small table-fixed">
				<thead>
					<tr>
						<th width="40%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Operator');?>" class="material-icons">account_box</i></th>
						<th width="15%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Last activity ago');?>" class="material-icons">access_time</i></th>
						<th width="15%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Active chats');?>" class="material-icons chat-active">chat</i></th>
						<th width="30%"><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Department');?>" class="material-icons">home</i></th>
					</tr>
				</thead>
				<tr ng-repeat="operator in online_op.list track by operator.id">
					<td><a ng-show="operator.user_id != <?php echo erLhcoreClassUser::instance()->getUserID();?>" href="#" ng-click="lhc.startChatOperator(operator.user_id)" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/syncadmininterface','Start chat');?>"><i class="material-icons">chat</i></a> {{operator.name_support}}</td>
					<td>
						<div class="abbr-list" title="{{operator.lastactivity_ago}}">{{operator.lastactivity_ago}}</div>
					</td>
					<td>{{operator.active_chats}}</td>
					<td><div class="abbr-list" title="{{operator.departments_names.join(', ')}}">{{operator.departments_names.join(", ")}}</div></td>
					
				</tr>
			</table>
		</div>
	</div>
</div>
