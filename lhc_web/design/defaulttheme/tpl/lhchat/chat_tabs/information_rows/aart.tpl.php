<?php if ($chat->aart > 0) : ?>
<div class="col-6 pb-1"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Average agent response time')?> - <?php echo erLhcoreClassChat::formatSeconds($chat->aart); ?></div>
<?php endif; ?>