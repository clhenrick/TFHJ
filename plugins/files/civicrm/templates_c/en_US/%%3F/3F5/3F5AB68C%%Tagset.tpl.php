<?php /* Smarty version 2.6.27, created on 2015-11-20 18:46:57
         compiled from CRM/common/Tagset.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/Tagset.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (empty ( $this->_tpl_vars['tagsetType'] )): ?>
  <?php $this->assign('tagsetType', 'contact'); ?>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['tagsetInfo'][$this->_tpl_vars['tagsetType']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tagset']):
?>
  <?php $this->assign('elemName', $this->_tpl_vars['tagset']['tagsetElementName']); ?>
  <?php if (empty ( $this->_tpl_vars['tagsetElementName'] ) || $this->_tpl_vars['tagsetElementName'] == $this->_tpl_vars['elemName']): ?>
    <?php $this->assign('parID', $this->_tpl_vars['tagset']['parentID']); ?>
    <?php $this->assign('skipEntityAction', $this->_tpl_vars['tagset']['skipEntityAction']); ?>
    <?php if ($this->_tpl_vars['tableLayout']): ?>
      <td class="label">
        <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elemName']][$this->_tpl_vars['parID']]['label']; ?>

      </td>
      <td class="<?php echo $this->_tpl_vars['tagsetType']; ?>
-tagset <?php echo $this->_tpl_vars['tagsetType']; ?>
-tagset-<?php echo $this->_tpl_vars['tagset']['parentID']; ?>
-section">
          <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elemName']][$this->_tpl_vars['parID']]['html']; ?>

      </td>
    <?php else: ?>
      <div class="crm-section tag-section <?php echo $this->_tpl_vars['tagsetType']; ?>
-tagset <?php echo $this->_tpl_vars['tagsetType']; ?>
-tagset-<?php echo $this->_tpl_vars['tagset']['parentID']; ?>
-section">
        <div class="crm-clearfix">
          <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elemName']][$this->_tpl_vars['parID']]['label']; ?>

          <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elemName']][$this->_tpl_vars['parID']]['html']; ?>

        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if (! $this->_tpl_vars['skipEntityAction'] && empty ( $this->_tpl_vars['form']['frozen'] )): ?>
  <script type="text/javascript">
        <?php echo '
    (function($, _) {
      var $el = $(\'.'; ?>
<?php echo $this->_tpl_vars['tagsetType']; ?>
-tagset<?php echo ' input.crm-form-entityref\');
      // select2 provides "added" and "removed" properties in the event
      $el.on(\'change\', function(e) {
        var tags,
          data = _.pick($(this).data(), \'entity_id\', \'entity_table\'),
          apiCall = [];
        if (e.added) {
          tags = $.isArray(e.added) ? e.added : [e.added];
          _.each(tags, function(tag) {
            if (tag.id && tag.id != \'0\') {
              apiCall.push([\'entity_tag\', \'create\', $.extend({tag_id: tag.id}, data)]);
            }
          });
        }
        if (e.removed) {
          tags = $.isArray(e.removed) ? e.removed : [e.removed];
          _.each(tags, function(tag) {
            if (tag.id && tag.id != \'0\') {
              apiCall.push([\'entity_tag\', \'delete\', $.extend({tag_id: tag.id}, data)]);
            }
          });
        }
        if (apiCall.length) {
          CRM.api3(apiCall, true);
        }
      });
    }(CRM.$, CRM._));
    '; ?>

  </script>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>