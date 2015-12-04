<?php
/**
 * @var HOAuthWidget $this
 * @var string       $provider name of provider
 */

$additionalClass = $this->onlyIcons ? 'icon' : '';
$invitation      = Yii::app()->user->isGuest ? HOAuthAction::t('Sign in with') : HOAuthAction::t('Connect with');
?>
<a data-provider="<?php echo strtolower($provider);?>" class="<?php echo $additionalClass . ' ' . strtolower($provider)?> btn btn-block button-submit button" href="<?php echo Yii::app()->createUrl($this->route . '/social', array('provider' => $provider)); ?>">
	<b><?php echo "$provider";?></b>
</a>