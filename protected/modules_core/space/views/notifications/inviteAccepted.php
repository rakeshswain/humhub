<?php $this->beginContent('application.modules_core.notification.views.notificationLayout', array('notification' => $notification, 'iconClass' => 'fa fa-check-circle approval accepted')); ?>
<?php echo Yii::t('SpaceModule.views_notifications_inviteAccepted', '{userName} accepted your invite for the space {spaceName}', array(
    '{userName}' => '<strong>' . $creator->displayName . '</strong>',
    '{spaceName}' => '<strong>' . $targetObject->name . '</strong>'
)); ?>
<?php $this->endContent(); ?>