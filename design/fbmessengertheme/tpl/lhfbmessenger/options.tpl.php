<h1 class="attr-header">Facebook Messenger Options</h1>

<form action="" method="post">

    <?php include(erLhcoreClassDesign::designtpl('lhkernel/csfr_token.tpl.php'));?>

    <?php if (isset($updated) && $updated == 'done') : $msg = erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','Settings updated'); ?>
        <?php include(erLhcoreClassDesign::designtpl('lhkernel/alert_success.tpl.php'));?>
    <?php endif; ?>

    <div class="form-group">
        <label><input type="checkbox" value="on" name="new_chat" <?php isset($fb_options['new_chat']) && ($fb_options['new_chat'] == true) ? print 'checked="checked"' : ''?> /> Create a new chat if chat was closed</label><br/>
    </div>

    <div class="form-group">
        <label>Priority</label>
        <input class="form-control" type="text" name="priority" value="<?php (isset($fb_options['priority'])) ? print htmlspecialchars($fb_options['priority']) : print 0?>" />
        <p><i><small>Set what priority chat's should get. The lower the lower priority. Settings priority to (-1) will make them appear at the bottom of pending chats list.</small></i></p>
    </div>

    <div class="form-group">
        <label><input type="checkbox" value="on" name="exclude_workflow" <?php isset($fb_options['exclude_workflow']) && ($fb_options['exclude_workflow'] == true) ? print 'checked="checked"' : ''?> /> Exclude chats from auto assign timeout workflow.</label>
        <p><i><small>Chat's won't participate in "Chats waiting in pending queue more than n seconds should be auto-assigned first."</small></i></p>
        <br/>
    </div>

    <input type="submit" class="btn btn-default" name="StoreOptions" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('system/buttons','Save'); ?>" />

</form>
